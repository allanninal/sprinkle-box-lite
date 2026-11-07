<?php
/**
 * Title: Hero
 * Slug: sprinkle-box-lite/hero
 * Categories: sprinkle-box-lite
 * Description: The opening section: headline, introduction, buttons and key facts.
 * Keywords: hero, header, banner, intro
 * Viewport Width: 1400
 *
 * @package sprinkle-box-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","className":"ds-section ds-hero"} -->
<section class="wp-block-group alignfull ds-section ds-hero" id="hero">
<!-- wp:columns {"verticalAlignment":"center","className":"ds-hero__grid"} -->
<div class="wp-block-columns are-vertically-aligned-center ds-hero__grid">
<!-- wp:column {"width":"55%","verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Portland, Oregon · Est. 2019', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"fontSize":"huge"} -->
<h1 class="wp-block-heading has-huge-font-size"><?php echo esc_html__( 'Freshly glazed. Ridiculously good.', 'sprinkle-box-lite' ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"large","className":"ds-lede-left"} -->
<p class="has-large-font-size ds-lede-left"><?php echo esc_html__( 'Handcrafted donuts made in small batches throughout the day at 742 NW Donut Row. Drop in, or order your dozen for pickup.', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#todays-batch"><?php echo esc_html__( 'See Today\'s Batch', 'sprinkle-box-lite' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#order"><?php echo esc_html__( 'Order a Dozen', 'sprinkle-box-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"45%","verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
<!-- wp:image {"id":"__ID_hero__","sizeSlug":"full","linkDestination":"none","className":"is-hero ds-hero__photo"} -->
<figure class="wp-block-image size-full is-hero ds-hero__photo"><img src="__SRC_hero__" alt="<?php echo esc_attr__( 'A colourful assortment of fresh donuts with sprinkles', 'sprinkle-box-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_hero__"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
<!-- wp:columns {"className":"ds-stats"} -->
<div class="wp-block-columns ds-stats">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"align":"center","className":"ds-stat__value","textColor":"accent"} -->
<p class="has-text-align-center has-accent-color has-text-color ds-stat__value"><?php echo esc_html__( '~1,400', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","className":"ds-stat__label"} -->
<p class="has-text-align-center ds-stat__label"><?php echo esc_html__( 'Donuts / week', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"align":"center","className":"ds-stat__value","textColor":"accent"} -->
<p class="has-text-align-center has-accent-color has-text-color ds-stat__value"><?php echo esc_html__( '60+', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","className":"ds-stat__label"} -->
<p class="has-text-align-center ds-stat__label"><?php echo esc_html__( 'Flavours in rotation', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"align":"center","className":"ds-stat__value","textColor":"accent"} -->
<p class="has-text-align-center has-accent-color has-text-color ds-stat__value"><?php echo esc_html__( 'Daily', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","className":"ds-stat__label"} -->
<p class="has-text-align-center ds-stat__label"><?php echo esc_html__( 'Fresh batches', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"align":"center","className":"ds-stat__value","textColor":"accent"} -->
<p class="has-text-align-center has-accent-color has-text-color ds-stat__value"><?php echo esc_html__( '$3–$4.50', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","className":"ds-stat__label"} -->
<p class="has-text-align-center ds-stat__label"><?php echo esc_html__( 'Starting from', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</section>
<!-- /wp:group -->
<?php
echo sprinkle_box_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
