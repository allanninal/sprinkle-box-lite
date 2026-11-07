<?php
/**
 * Title: Hours and location
 * Slug: sprinkle-box-lite/hours-location
 * Categories: sprinkle-box-lite
 * Description: Opening hours and how to find the business.
 * Keywords: hours, opening times, location, address, contact
 * Viewport Width: 1400
 *
 * @package sprinkle-box-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","backgroundColor":"dark-bg","textColor":"dark-text","className":"ds-section ds-dark"} -->
<section class="wp-block-group has-dark-text-color has-text-color has-dark-bg-background-color has-background alignfull ds-section ds-dark" id="hours">
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"dark-muted"} -->
<p class="has-dark-muted-color has-text-color is-style-eyebrow"><?php echo esc_html__( 'Open for business', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textColor":"dark-text"} -->
<h2 class="wp-block-heading has-dark-text-color has-text-color"><?php echo esc_html__( 'Hours', 'sprinkle-box-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:table {"className":"ds-hours"} -->
<figure class="wp-block-table ds-hours"><table class="has-fixed-layout"><tbody><tr><td>Monday</td><td>7:00 AM – 2:00 PM</td></tr><tr><td>Tuesday</td><td>7:00 AM – 2:00 PM</td></tr><tr><td>Wednesday</td><td>7:00 AM – 2:00 PM</td></tr><tr><td>Thursday</td><td>7:00 AM – 2:00 PM</td></tr><tr><td>Friday</td><td>7:00 AM – 3:00 PM · Late Friday batch at 11 AM</td></tr><tr><td>Saturday</td><td>8:00 AM – 4:00 PM · Weekend specials drop at 9 AM</td></tr><tr><td>Sunday</td><td>8:00 AM – 1:00 PM · Sells out early — come before noon!</td></tr></tbody></table></figure>
<!-- /wp:table -->
<!-- wp:paragraph {"placeholder":"Open now status (filled in from the hours above)","className":"is-style-open-status","textColor":"dark-text"} -->
<p class="has-dark-text-color has-text-color is-style-open-status"></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"textColor":"dark-muted","fontSize":"small"} -->
<p class="has-dark-muted-color has-text-color has-small-font-size"><?php echo esc_html__( 'We often sell out before closing — especially on weekends. Follow us on Instagram for real-time updates on what\'s in the case.', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column {"className":"ds-card ds-card\u002d\u002ddark"} -->
<div class="wp-block-column ds-card ds-card--dark">
<!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"dark-muted"} -->
<p class="has-dark-muted-color has-text-color is-style-eyebrow"><?php echo esc_html__( 'Find us', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textColor":"dark-text"} -->
<h2 class="wp-block-heading has-dark-text-color has-text-color"><?php echo esc_html__( 'Location', 'sprinkle-box-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"dark-text"} -->
<p class="has-dark-text-color has-text-color"><?php echo wp_kses_post( __( '742 NW Donut Row, Portland, OR 97209<br><a href="tel:+15035550184">+1 (503) 555-0184</a><br><a href="mailto:hello@dotsdonuts.example">hello@dotsdonuts.example</a>', 'sprinkle-box-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"textColor":"dark-muted","fontSize":"small"} -->
<p class="has-dark-muted-color has-text-color has-small-font-size"><?php echo esc_html__( 'Parking: Street parking on NW Donut Row and adjacent streets. MAX Yellow Line stops one block east. Bike parking at the front door.', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline ds-on-dark"} -->
<div class="wp-block-button is-style-outline ds-on-dark"><a class="wp-block-button__link wp-element-button" href="https://maps.google.example/?q=742+NW+Donut+Row+Portland+OR"><?php echo esc_html__( 'Get directions', 'sprinkle-box-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</section>
<!-- /wp:group -->
<?php
echo sprinkle_box_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
