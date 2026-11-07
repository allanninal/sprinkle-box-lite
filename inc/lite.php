<?php
/**
 * The upgrade notice: once, dismissible for good, never on the front end.
 *
 * @package sprinkle-box-lite
 */

defined( 'ABSPATH' ) || exit;

/**
 * Show the notice on the dashboard and the Themes screen until dismissed.
 */
function sprinkle_box_lite_upgrade_notice() {
	$screen = get_current_screen();
	if ( ! $screen || ! in_array( $screen->id, array( 'dashboard', 'themes' ), true ) ) {
		return;
	}
	if ( ! current_user_can( 'switch_themes' ) || get_user_meta( get_current_user_id(), 'sprinkle_box_lite_notice_dismissed', true ) ) {
		return;
	}
	$dismiss = wp_nonce_url( add_query_arg( 'sprinkle_box_lite_dismiss', '1' ), 'sprinkle_box_lite_dismiss' );
	printf(
		'<div class="notice notice-info"><p>%1$s <a href="%2$s" target="_blank" rel="noopener noreferrer">%3$s</a> &middot; <a href="%4$s">%5$s</a></p></div>',
		esc_html__( 'Sprinkle Box Lite is the free edition. The full version adds a one-click demo import, a WooCommerce shop with products and order-ahead pickup, a dark style and a setup guide.', 'sprinkle-box-lite' ),
		esc_url( 'https://checkout.freemius.com/theme/42973/plan/74805/' ),
		esc_html__( 'See the full version', 'sprinkle-box-lite' ),
		esc_url( $dismiss ),
		esc_html__( 'Dismiss', 'sprinkle-box-lite' )
	);
}
add_action( 'admin_notices', 'sprinkle_box_lite_upgrade_notice' );

/**
 * Remember the dismissal for this user.
 */
function sprinkle_box_lite_dismiss_notice() {
	if ( isset( $_GET['sprinkle_box_lite_dismiss'] ) && check_admin_referer( 'sprinkle_box_lite_dismiss' ) ) {
		update_user_meta( get_current_user_id(), 'sprinkle_box_lite_notice_dismissed', 1 );
		wp_safe_redirect( remove_query_arg( array( 'sprinkle_box_lite_dismiss', '_wpnonce' ) ) );
		exit;
	}
}
add_action( 'admin_init', 'sprinkle_box_lite_dismiss_notice' );

/**
 * With no menu yet, WordPress's fallback for the Navigation block puts the page
 * list's own list straight inside the menu's list: a list inside a list with no
 * item between, which screen readers announce wrongly. Lite has no demo to make
 * a menu, so a fresh site shows the fallback; this keeps one list.
 *
 * @param string $html Rendered block.
 * @return string
 */
function sprinkle_box_lite_flatten_fallback_menu( $html ) {
	if ( false === strpos( $html, 'wp-block-page-list' ) ) {
		return $html;
	}
	return preg_replace( '#(<ul class="wp-block-navigation__container[^"]*"[^>]*>)\s*<ul class="wp-block-page-list"[^>]*>(.*?)</ul>\s*</ul>#s', '$1$2</ul>', $html );
}
add_filter( 'render_block_core/navigation', 'sprinkle_box_lite_flatten_fallback_menu' );
