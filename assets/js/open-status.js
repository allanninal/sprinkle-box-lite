/**
 * Open now: fills each "Open now status" paragraph from the hours shown just
 * before it, in the shop's time zone. The hours are the owner's own table (or
 * rows of day and time paragraphs), so this reads what the page shows; a row
 * it cannot read leaves the paragraph empty, and empty is hidden. Nothing is
 * guessed.
 *
 * Reads days as "Monday", "Mon–Thu", "Lundi / Monday", "Daily", and times as
 * "6:30 AM – 2:00 PM", "8:00 – 18:00" or "Closed". Generated into the theme
 * from tools/skeleton-food/; edit it there.
 */
(function () {
	'use strict';
	var cfg = window['sprinkle_boxOpenStatus'];
	var DAYS = [ 'sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday' ];
	if ( ! cfg ) {
		return;
	}

	function dayIndex( word ) {
		if ( word.length < 3 ) {
			return -1;
		}
		for ( var i = 0; i < 7; i++ ) {
			if ( DAYS[ i ].indexOf( word ) === 0 ) {
				return i;
			}
		}
		return -1;
	}

	// The weekdays a row covers, or null.
	function daysOf( text ) {
		var t = text.toLowerCase();
		if ( /\b(daily|every day|everyday)\b/.test( t ) ) {
			return [ 0, 1, 2, 3, 4, 5, 6 ];
		}
		var found = ( t.match( /[a-z]+/g ) || [] ).map( dayIndex ).filter( function ( i ) {
			return i >= 0;
		} );
		if ( ! found.length ) {
			return null;
		}
		if ( 2 === found.length && /[–—-]|\bto\b/.test( t ) ) {
			var out = [];
			for ( var d = found[ 0 ]; ; d = ( d + 1 ) % 7 ) {
				out.push( d );
				if ( d === found[ 1 ] ) {
					return out;
				}
			}
		}
		return found;
	}

	// One time: minutes after midnight, and the text as written.
	var TIME = /(\d{1,2})(?:[:.h](\d{2}))?\s*([ap])?\.?\s*m?\.?/i;
	function minutes( m, inheritPm ) {
		var h = parseInt( m[ 1 ], 10 );
		var min = m[ 2 ] ? parseInt( m[ 2 ], 10 ) : 0;
		var ap = ( m[ 3 ] || inheritPm || '' ).toLowerCase();
		if ( h > 23 || min > 59 || ( ap && h > 12 ) ) {
			return null;
		}
		if ( 'p' === ap && h < 12 ) {
			h += 12;
		}
		if ( 'a' === ap && 12 === h ) {
			h = 0;
		}
		return h * 60 + min;
	}

	// The opening and closing of one row's time cell, "closed", or null.
	function hoursOf( text ) {
		var t = text.split( ' · ' )[ 0 ].trim();
		var parts = t.split( /\s*(?:–|—|-|\bto\b)\s*/ );
		if ( 2 !== parts.length ) {
			return /closed|fermé|cerrado|geschlossen|chiuso|fechado/i.test( t ) ? 'closed' : null;
		}
		var a = parts[ 0 ].match( TIME );
		var b = parts[ 1 ].match( TIME );
		if ( ! a || ! b ) {
			return null;
		}
		var close = minutes( b );
		// "1 – 9 PM": the first time takes the second's PM when that keeps it earlier.
		var carry = ! a[ 3 ] && b[ 3 ] && parseInt( a[ 1 ], 10 ) < parseInt( b[ 1 ], 10 ) ? b[ 3 ] : '';
		var open = minutes( a, carry );
		if ( null === open || null === close ) {
			return null;
		}
		return { open: open, close: close <= open ? close + 1440 : close, openText: parts[ 0 ].trim(), closeText: parts[ 1 ].trim() };
	}

	// The week from the element before the paragraph, or null if any row is unreadable.
	function weekFrom( box ) {
		var rows = box.querySelectorAll( 'tr' ).length ? box.querySelectorAll( 'tr' ) : box.children;
		var week = [];
		for ( var r = 0; r < rows.length; r++ ) {
			var cells = rows[ r ].querySelectorAll( 'td, th' ).length ? rows[ r ].querySelectorAll( 'td, th' ) : rows[ r ].children;
			if ( cells.length < 2 ) {
				return null;
			}
			var days = daysOf( cells[ 0 ].textContent );
			var hours = hoursOf( cells[ 1 ].textContent );
			if ( ! days || ! hours ) {
				return null;
			}
			days.forEach( function ( d ) {
				week[ d ] = hours;
			} );
		}
		return week.length ? week : null;
	}

	// Weekday and minutes in the shop's time zone.
	function shopNow() {
		var now = new Date();
		if ( cfg.tz ) {
			try {
				var p = {};
				new Intl.DateTimeFormat( 'en-US', { timeZone: cfg.tz, weekday: 'short', hour: '2-digit', minute: '2-digit', hourCycle: 'h23' } )
					.formatToParts( now ).forEach( function ( x ) {
						p[ x.type ] = x.value;
					} );
				return { day: dayIndex( p.weekday.toLowerCase() ), min: ( parseInt( p.hour, 10 ) % 24 ) * 60 + parseInt( p.minute, 10 ) };
			} catch ( e ) {}
		}
		var shifted = new Date( now.getTime() + cfg.offset * 60000 );
		return { day: shifted.getUTCDay(), min: shifted.getUTCHours() * 60 + shifted.getUTCMinutes() };
	}

	function dayName( d ) {
		// 2023-01-01 was a Sunday.
		return new Date( Date.UTC( 2023, 0, 1 + d, 12 ) ).toLocaleDateString( document.documentElement.lang || undefined, { weekday: 'long', timeZone: 'UTC' } );
	}

	function sentence( week, now ) {
		var today = week[ now.day ];
		var yesterday = week[ ( now.day + 6 ) % 7 ];
		// Still open from last night's late hours.
		if ( yesterday && 'closed' !== yesterday && yesterday.close > 1440 && now.min < yesterday.close - 1440 ) {
			return [ 'open', cfg.until.replace( '%s', yesterday.closeText ) ];
		}
		if ( today && 'closed' !== today ) {
			if ( now.min >= today.open && now.min < today.close ) {
				return [ 'open', cfg.until.replace( '%s', today.closeText ) ];
			}
			if ( now.min < today.open ) {
				return [ 'closed', cfg.today.replace( '%s', today.openText ) ];
			}
		}
		for ( var i = 1; i <= 7; i++ ) {
			var d = ( now.day + i ) % 7;
			var h = week[ d ];
			if ( h && 'closed' !== h ) {
				return [ 'closed', 1 === i ? cfg.tomorrow.replace( '%s', h.openText ) : cfg.day.replace( '%1$s', dayName( d ) ).replace( '%2$s', h.openText ) ];
			}
		}
		return null;
	}

	var now = shopNow();
	document.querySelectorAll( '.is-style-open-status' ).forEach( function ( el ) {
		var box = el.previousElementSibling;
		var week = box && weekFrom( box );
		var said = week && sentence( week, now );
		if ( said ) {
			el.setAttribute( 'data-state', said[ 0 ] );
			el.textContent = said[ 1 ];
		}
	} );
}());
