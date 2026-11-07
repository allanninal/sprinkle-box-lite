<?php
/**
 * Title: Build your dozen
 * Slug: sprinkle-box-lite/dozen-box
 * Categories: sprinkle-box-lite
 * Description: Box prices and order buttons on a bold colour band.
 * Keywords: order, box, prices, call to action
 * Viewport Width: 1400
 *
 * @package sprinkle-box-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","backgroundColor":"accent","textColor":"bg","className":"ds-section ds-dozen"} -->
<section class="wp-block-group has-bg-color has-text-color has-accent-background-color has-background alignfull ds-section ds-dozen" id="order">
<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow","textColor":"accent-pale"} -->
<p class="has-text-align-center has-accent-pale-color has-text-color is-style-eyebrow"><?php echo esc_html__( 'Mix &amp; match — any 12', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center","textColor":"bg"} -->
<h2 class="wp-block-heading has-text-align-center has-bg-color has-text-color"><?php echo esc_html__( 'Build Your Dozen', 'sprinkle-box-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","className":"ds-lede","textColor":"bg"} -->
<p class="has-text-align-center has-bg-color has-text-color ds-lede"><?php echo esc_html__( 'Pick any 12 donuts from today\'s batch. Mix, match, and stack the box any way you like. Order online for same-day pickup (pre-orders close at noon).', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:columns {"className":"ds-boxes"} -->
<div class="wp-block-columns ds-boxes">
<!-- wp:column {"className":"ds-box ds-box\u002d\u002ddark"} -->
<div class="wp-block-column ds-box ds-box--dark">
<!-- wp:paragraph {"align":"center","className":"ds-box__price"} -->
<p class="has-text-align-center ds-box__price"><?php echo esc_html__( 'from $18', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","className":"ds-box__label"} -->
<p class="has-text-align-center ds-box__label"><?php echo esc_html__( 'Half Dozen (6)', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column {"className":"ds-box","backgroundColor":"bg"} -->
<div class="wp-block-column has-bg-background-color has-background ds-box">
<!-- wp:paragraph {"align":"center","className":"ds-box__price","textColor":"accent-dark"} -->
<p class="has-text-align-center has-accent-dark-color has-text-color ds-box__price"><?php echo esc_html__( 'from $36', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","className":"ds-box__label","textColor":"text-muted"} -->
<p class="has-text-align-center has-text-muted-color has-text-color ds-box__label"><?php echo esc_html__( 'Full Dozen (12)', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
<!-- wp:paragraph {"align":"center","textColor":"bg","fontSize":"small"} -->
<p class="has-text-align-center has-bg-color has-text-color has-small-font-size"><?php echo esc_html__( 'Online orders close at 12:00 PM for same-day pickup. Walk-ins always welcome.', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"ds-center"} -->
<div class="wp-block-buttons ds-center">
<!-- wp:button {"className":"ds-btn-light"} -->
<div class="wp-block-button ds-btn-light"><a class="wp-block-button__link wp-element-button" href="__PAGE_shop|menu__"><?php echo esc_html__( 'Order a Dozen', 'sprinkle-box-lite' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline ds-on-accent"} -->
<div class="wp-block-button is-style-outline ds-on-accent"><a class="wp-block-button__link wp-element-button" href="tel:+15035550184"><?php echo esc_html__( 'Call to Order', 'sprinkle-box-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</section>
<!-- /wp:group -->
<?php
echo sprinkle_box_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
