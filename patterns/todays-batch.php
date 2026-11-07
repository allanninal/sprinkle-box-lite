<?php
/**
 * Title: Today's batch
 * Slug: sprinkle-box-lite/todays-batch
 * Categories: sprinkle-box-lite
 * Description: Today's items as cards with tags and prices.
 * Keywords: menu, products, cards, today
 * Viewport Width: 1400
 *
 * @package sprinkle-box-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","backgroundColor":"surface-2","className":"ds-section is-style-texture-sprinkles"} -->
<section class="wp-block-group has-surface-2-background-color has-background alignfull ds-section is-style-texture-sprinkles" id="todays-batch">
<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
<p class="has-text-align-center is-style-eyebrow"><?php echo esc_html__( 'Baked fresh this morning', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Today\'s Batch', 'sprinkle-box-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","className":"ds-lede"} -->
<p class="has-text-align-center ds-lede"><?php echo esc_html__( 'We bake in small batches throughout the day so everything stays fresh. These are what\'s in the case right now. Once they\'re gone, they\'re gone.', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"14rem"},"className":"ds-cards"} -->
<div class="wp-block-group ds-cards">
<!-- wp:group {"layout":{"type":"constrained"},"className":"ds-card"} -->
<div class="wp-block-group ds-card">
<!-- wp:list {"className":"is-style-chips ds-card__tags"} -->
<ul class="wp-block-list is-style-chips ds-card__tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'classic', 'sprinkle-box-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'fan fave', 'sprinkle-box-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"ds-card__head"} -->
<div class="wp-block-group ds-card__head">
<!-- wp:heading {"level":3,"className":"ds-card__name"} -->
<h3 class="wp-block-heading ds-card__name"><?php echo esc_html__( 'Strawberry Sprinkle', 'sprinkle-box-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ds-card__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color ds-card__price"><?php echo esc_html__( '$3.50', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"ds-card__desc"} -->
<p class="ds-card__desc"><?php echo esc_html__( 'Strawberry glaze, rainbow nonpareils, a hint of vanilla. Our #1 seller — every single day.', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"ds-card"} -->
<div class="wp-block-group ds-card">
<!-- wp:list {"className":"is-style-chips ds-card__tags"} -->
<ul class="wp-block-list is-style-chips ds-card__tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'classic', 'sprinkle-box-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'fan fave', 'sprinkle-box-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"ds-card__head"} -->
<div class="wp-block-group ds-card__head">
<!-- wp:heading {"level":3,"className":"ds-card__name"} -->
<h3 class="wp-block-heading ds-card__name"><?php echo esc_html__( 'Maple Bacon Twist', 'sprinkle-box-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ds-card__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color ds-card__price"><?php echo esc_html__( '$4.50', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"ds-card__desc"} -->
<p class="ds-card__desc"><?php echo esc_html__( 'Yeast-raised twist, pure maple glaze, house-cured candied bacon crumble. Sweet-salty perfection.', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"ds-card"} -->
<div class="wp-block-group ds-card">
<!-- wp:list {"className":"is-style-chips ds-card__tags"} -->
<ul class="wp-block-list is-style-chips ds-card__tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'new', 'sprinkle-box-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'seasonal', 'sprinkle-box-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"ds-card__head"} -->
<div class="wp-block-group ds-card__head">
<!-- wp:heading {"level":3,"className":"ds-card__name"} -->
<h3 class="wp-block-heading ds-card__name"><?php echo esc_html__( 'Blueberry Birthday Cake', 'sprinkle-box-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ds-card__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color ds-card__price"><?php echo esc_html__( '$4.00', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"ds-card__desc"} -->
<p class="ds-card__desc"><?php echo esc_html__( 'Blueberry-glazed ring loaded with birthday cake sprinkles and a vanilla cream swirl. Tastes like a party.', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"ds-card"} -->
<div class="wp-block-group ds-card">
<!-- wp:list {"className":"is-style-chips ds-card__tags"} -->
<ul class="wp-block-list is-style-chips ds-card__tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'seasonal', 'sprinkle-box-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"ds-card__head"} -->
<div class="wp-block-group ds-card__head">
<!-- wp:heading {"level":3,"className":"ds-card__name"} -->
<h3 class="wp-block-heading ds-card__name"><?php echo esc_html__( 'Matcha Coconut', 'sprinkle-box-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ds-card__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color ds-card__price"><?php echo esc_html__( '$4.25', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"ds-card__desc"} -->
<p class="ds-card__desc"><?php echo esc_html__( 'Ceremonial grade matcha glaze, toasted coconut flakes, white chocolate drizzle. Bright and earthy.', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"ds-card"} -->
<div class="wp-block-group ds-card">
<!-- wp:list {"className":"is-style-chips ds-card__tags"} -->
<ul class="wp-block-list is-style-chips ds-card__tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'seasonal', 'sprinkle-box-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"ds-card__head"} -->
<div class="wp-block-group ds-card__head">
<!-- wp:heading {"level":3,"className":"ds-card__name"} -->
<h3 class="wp-block-heading ds-card__name"><?php echo esc_html__( 'Lemon Poppy', 'sprinkle-box-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ds-card__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color ds-card__price"><?php echo esc_html__( '$4.00', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"ds-card__desc"} -->
<p class="ds-card__desc"><?php echo esc_html__( 'Lemon curd-filled, poppy seed crumble, bright yellow glaze. Sunday special sold every day this week.', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"ds-card"} -->
<div class="wp-block-group ds-card">
<!-- wp:list {"className":"is-style-chips ds-card__tags"} -->
<ul class="wp-block-list is-style-chips ds-card__tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'classic', 'sprinkle-box-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"ds-card__head"} -->
<div class="wp-block-group ds-card__head">
<!-- wp:heading {"level":3,"className":"ds-card__name"} -->
<h3 class="wp-block-heading ds-card__name"><?php echo esc_html__( 'Boston Cream', 'sprinkle-box-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ds-card__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color ds-card__price"><?php echo esc_html__( '$4.25', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"ds-card__desc"} -->
<p class="ds-card__desc"><?php echo esc_html__( 'Vanilla pastry cream-filled, dark chocolate ganache, one little candle on top (kidding — but we\'d put one on there).', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"ds-card"} -->
<div class="wp-block-group ds-card">
<!-- wp:list {"className":"is-style-chips ds-card__tags"} -->
<ul class="wp-block-list is-style-chips ds-card__tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'classic', 'sprinkle-box-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"ds-card__head"} -->
<div class="wp-block-group ds-card__head">
<!-- wp:heading {"level":3,"className":"ds-card__name"} -->
<h3 class="wp-block-heading ds-card__name"><?php echo esc_html__( 'Cinnamon Sugar Old Fashioned', 'sprinkle-box-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ds-card__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color ds-card__price"><?php echo esc_html__( '$3.00', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"ds-card__desc"} -->
<p class="ds-card__desc"><?php echo esc_html__( 'Dense, crisp-edged cake donut tossed in cinnamon sugar. The original. The legend. The one your grandpa eats.', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"ds-card"} -->
<div class="wp-block-group ds-card">
<!-- wp:list {"className":"is-style-chips ds-card__tags"} -->
<ul class="wp-block-list is-style-chips ds-card__tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'new', 'sprinkle-box-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"ds-card__head"} -->
<div class="wp-block-group ds-card__head">
<!-- wp:heading {"level":3,"className":"ds-card__name"} -->
<h3 class="wp-block-heading ds-card__name"><?php echo esc_html__( 'Hot Honey Glazed', 'sprinkle-box-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ds-card__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color ds-card__price"><?php echo esc_html__( '$4.00', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"ds-card__desc"} -->
<p class="ds-card__desc"><?php echo esc_html__( 'Warm wildflower honey glaze, pinch of Calabrian chilli, finishing flake salt. Surprisingly addictive.', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:buttons {"className":"ds-center"} -->
<div class="wp-block-buttons ds-center">
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="__PAGE_menu__"><?php echo esc_html__( 'See the full menu', 'sprinkle-box-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</section>
<!-- /wp:group -->
<?php
echo sprinkle_box_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
