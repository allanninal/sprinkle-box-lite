<?php
/**
 * Title: Gallery
 * Slug: sprinkle-box-lite/gallery
 * Categories: sprinkle-box-lite
 * Description: A grid of captioned photos.
 * Keywords: gallery, photos, images
 * Viewport Width: 1400
 *
 * @package sprinkle-box-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","className":"ds-section"} -->
<section class="wp-block-group alignfull ds-section" id="gallery">
<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
<p class="has-text-align-center is-style-eyebrow"><?php echo esc_html__( 'Follow along @dotsdonuts', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'From the Case', 'sprinkle-box-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","className":"ds-lede"} -->
<p class="has-text-align-center ds-lede"><?php echo esc_html__( 'Our regular customers are our best photographers. Come in, eat a donut, and tag us on Instagram.', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"},"className":"ds-gallery"} -->
<div class="wp-block-group ds-gallery">
<!-- wp:image {"id":"__ID_strawberry__","sizeSlug":"large","linkDestination":"none","className":"ds-photo"} -->
<figure class="wp-block-image size-large ds-photo"><img src="__SRC_strawberry__" alt="<?php echo esc_attr__( 'A tray of strawberry-glazed donuts topped with rainbow sprinkles on a white marble counter', 'sprinkle-box-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_strawberry__"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'Strawberry Sprinkle batch', 'sprinkle-box-lite' ); ?></figcaption></figure>
<!-- /wp:image -->
<!-- wp:image {"id":"__ID_maple-bacon__","sizeSlug":"large","linkDestination":"none","className":"ds-photo"} -->
<figure class="wp-block-image size-large ds-photo"><img src="__SRC_maple-bacon__" alt="<?php echo esc_attr__( 'A maple bacon twist donut on kraft paper with candied bacon crumble scattered around it', 'sprinkle-box-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_maple-bacon__"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'Maple Bacon Twist', 'sprinkle-box-lite' ); ?></figcaption></figure>
<!-- /wp:image -->
<!-- wp:image {"id":"__ID_dozen__","sizeSlug":"large","linkDestination":"none","className":"ds-photo"} -->
<figure class="wp-block-image size-large ds-photo"><img src="__SRC_dozen__" alt="<?php echo esc_attr__( 'An open dozen box filled with a colourful mix of glazed, filled, and cake donuts', 'sprinkle-box-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_dozen__"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'Mixed Dozen', 'sprinkle-box-lite' ); ?></figcaption></figure>
<!-- /wp:image -->
<!-- wp:image {"id":"__ID_filling__","sizeSlug":"large","linkDestination":"none","className":"ds-photo"} -->
<figure class="wp-block-image size-large ds-photo"><img src="__SRC_filling__" alt="<?php echo esc_attr__( 'A baker in a mask and gloves piping filling into fresh donuts behind the counter', 'sprinkle-box-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_filling__"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'Filling station', 'sprinkle-box-lite' ); ?></figcaption></figure>
<!-- /wp:image -->
<!-- wp:image {"id":"__ID_matcha__","sizeSlug":"large","linkDestination":"none","className":"ds-photo"} -->
<figure class="wp-block-image size-large ds-photo"><img src="__SRC_matcha__" alt="<?php echo esc_attr__( 'Close-up of a matcha coconut donut with toasted coconut flakes on a green-glazed ring', 'sprinkle-box-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_matcha__"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'Matcha Coconut', 'sprinkle-box-lite' ); ?></figcaption></figure>
<!-- /wp:image -->
<!-- wp:image {"id":"__ID_exterior__","sizeSlug":"large","linkDestination":"none","className":"ds-photo"} -->
<figure class="wp-block-image size-large ds-photo"><img src="__SRC_exterior__" alt="<?php echo esc_attr__( 'A plate of chocolate-glazed and pink sprinkle donuts with a cup of tea, a hand reaching in', 'sprinkle-box-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_exterior__"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'Tea and donuts', 'sprinkle-box-lite' ); ?></figcaption></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:buttons {"className":"ds-center"} -->
<div class="wp-block-buttons ds-center">
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://instagram.example/dotsdonuts"><?php echo esc_html__( 'Follow on Instagram →', 'sprinkle-box-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</section>
<!-- /wp:group -->
<?php
echo sprinkle_box_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
