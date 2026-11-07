<?php
/**
 * Title: Our story
 * Slug: sprinkle-box-lite/story
 * Categories: sprinkle-box-lite
 * Description: The story behind the business, with a few key numbers.
 * Keywords: about, story, history, numbers
 * Viewport Width: 1400
 *
 * @package sprinkle-box-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","backgroundColor":"sky-bg","className":"ds-section"} -->
<section class="wp-block-group has-sky-bg-background-color has-background alignfull ds-section" id="story">
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column {"width":"58%"} -->
<div class="wp-block-column" style="flex-basis:58%">
<!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"sky-dark"} -->
<p class="has-sky-dark-color has-text-color is-style-eyebrow"><?php echo esc_html__( 'Meet Dot', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Born from a Saturday Experiment', 'sprinkle-box-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Dot started making donuts on Saturday mornings for her neighbours in 2017, armed with a secondhand fryer and a notebook full of ideas. By the fourth Saturday, there was a line around the block.', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'In 2019, she opened the shop at 742 NW Donut Row — a tiny corner spot with a pink awning, a hand-lettered menu board, and room for exactly nine bar stools. She\'s been sold out by 1 PM most days since.', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Dot\'s philosophy: use real butter, real fruit, real cream — and make every donut something you\'d genuinely be excited to eat. No tricks, no shortcuts, no sad day-old donuts.', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ds-founder"} -->
<p class="ds-founder"><?php echo esc_html__( 'Dot Nguyen — Founder &amp; Head Donut Maker', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"42%","className":"ds-story-stats"} -->
<div class="wp-block-column ds-story-stats" style="flex-basis:42%">
<!-- wp:group {"layout":{"type":"constrained"},"className":"ds-card ds-card\u002d\u002dstat"} -->
<div class="wp-block-group ds-card ds-card--stat">
<!-- wp:paragraph {"className":"ds-stat__value","textColor":"accent"} -->
<p class="has-accent-color has-text-color ds-stat__value"><?php echo esc_html__( '2019', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ds-stat__label"} -->
<p class="ds-stat__label"><?php echo esc_html__( 'Opened', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"ds-card ds-card\u002d\u002dstat"} -->
<div class="wp-block-group ds-card ds-card--stat">
<!-- wp:paragraph {"className":"ds-stat__value","textColor":"accent"} -->
<p class="has-accent-color has-text-color ds-stat__value"><?php echo esc_html__( '~1,400', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ds-stat__label"} -->
<p class="ds-stat__label"><?php echo esc_html__( 'Donuts / week', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"ds-card ds-card\u002d\u002dstat"} -->
<div class="wp-block-group ds-card ds-card--stat">
<!-- wp:paragraph {"className":"ds-stat__value","textColor":"accent"} -->
<p class="has-accent-color has-text-color ds-stat__value"><?php echo esc_html__( '60+', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ds-stat__label"} -->
<p class="ds-stat__label"><?php echo esc_html__( 'Flavours in rotation', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"ds-card ds-card\u002d\u002dstat"} -->
<div class="wp-block-group ds-card ds-card--stat">
<!-- wp:paragraph {"className":"ds-stat__value","textColor":"accent"} -->
<p class="has-accent-color has-text-color ds-stat__value"><?php echo esc_html__( '9 (intentionally)', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ds-stat__label"} -->
<p class="ds-stat__label"><?php echo esc_html__( 'Seats', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</section>
<!-- /wp:group -->
<?php
echo sprinkle_box_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
