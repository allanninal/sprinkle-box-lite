<?php
/**
 * Title: Full menu
 * Slug: sprinkle-box-lite/menu-full
 * Categories: sprinkle-box-lite
 * Description: The whole menu by category, with descriptions and prices.
 * Keywords: menu, prices, products, categories
 * Viewport Width: 1400
 *
 * @package sprinkle-box-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"align":"full","className":"ds-section"} -->
<div class="wp-block-group alignfull ds-section" id="menu">
<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
<p class="has-text-align-center is-style-eyebrow"><?php echo esc_html__( 'Always fresh, always rotating', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'The Menu', 'sprinkle-box-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","className":"ds-lede"} -->
<p class="has-text-align-center ds-lede"><?php echo esc_html__( 'We rotate over 60 flavours throughout the year. Prices below are per donut unless noted.', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"default"},"tagName":"section","className":"ds-menu-section"} -->
<section class="wp-block-group ds-menu-section">
<!-- wp:heading {"level":3,"className":"ds-menu-cat"} -->
<h3 class="wp-block-heading ds-menu-cat"><?php echo esc_html__( 'Glazed &amp; Frosted', 'sprinkle-box-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ds-menu-intro"} -->
<p class="ds-menu-intro"><?php echo esc_html__( 'Yeast-raised rings in our signature glazes. Light, pillowy, and glazed while still warm.', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"15rem"},"className":"ds-cards"} -->
<div class="wp-block-group ds-cards">
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
<h3 class="wp-block-heading ds-card__name"><?php echo esc_html__( 'Classic Glaze', 'sprinkle-box-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ds-card__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color ds-card__price"><?php echo esc_html__( '$2.75', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"ds-card__desc"} -->
<p class="ds-card__desc"><?php echo esc_html__( 'Our foundational ring: vanilla-tinged glaze, impossibly soft interior. The benchmark.', 'sprinkle-box-lite' ); ?></p>
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
<h3 class="wp-block-heading ds-card__name"><?php echo esc_html__( 'Strawberry Sprinkle', 'sprinkle-box-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ds-card__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color ds-card__price"><?php echo esc_html__( '$3.50', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"ds-card__desc"} -->
<p class="ds-card__desc"><?php echo esc_html__( 'Pink strawberry glaze, rainbow nonpareils. The most photographed donut on the block.', 'sprinkle-box-lite' ); ?></p>
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
<h3 class="wp-block-heading ds-card__name"><?php echo esc_html__( 'Chocolate Frosted', 'sprinkle-box-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ds-card__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color ds-card__price"><?php echo esc_html__( '$3.25', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"ds-card__desc"} -->
<p class="ds-card__desc"><?php echo esc_html__( 'Rich cocoa frosting, no sprinkles required (though we\'ll add them if you ask nicely).', 'sprinkle-box-lite' ); ?></p>
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
<h3 class="wp-block-heading ds-card__name"><?php echo esc_html__( 'Maple Bar', 'sprinkle-box-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ds-card__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color ds-card__price"><?php echo esc_html__( '$3.50', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"ds-card__desc"} -->
<p class="ds-card__desc"><?php echo esc_html__( 'Pillow-soft bar, pure Grade A maple glaze. A Portland essential.', 'sprinkle-box-lite' ); ?></p>
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
<h3 class="wp-block-heading ds-card__name"><?php echo esc_html__( 'Blueberry Glazed', 'sprinkle-box-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ds-card__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color ds-card__price"><?php echo esc_html__( '$3.75', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"ds-card__desc"} -->
<p class="ds-card__desc"><?php echo esc_html__( 'Fresh blueberry glaze from Oregon-grown berries. Floral and fruity.', 'sprinkle-box-lite' ); ?></p>
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
<p class="ds-card__desc"><?php echo esc_html__( 'Ceremonial matcha glaze, toasted coconut.', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"tagName":"section","className":"ds-menu-section"} -->
<section class="wp-block-group ds-menu-section">
<!-- wp:heading {"level":3,"className":"ds-menu-cat"} -->
<h3 class="wp-block-heading ds-menu-cat"><?php echo esc_html__( 'Filled Donuts', 'sprinkle-box-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ds-menu-intro"} -->
<p class="ds-menu-intro"><?php echo esc_html__( 'Pillowy rounds stuffed to the brim. Every one is filled to order at the counter — no sad hollow bites.', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"15rem"},"className":"ds-cards"} -->
<div class="wp-block-group ds-cards">
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
<p class="ds-card__desc"><?php echo esc_html__( 'Vanilla custard, dark chocolate ganache top. A classic for a reason.', 'sprinkle-box-lite' ); ?></p>
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
<h3 class="wp-block-heading ds-card__name"><?php echo esc_html__( 'Lemon Curd', 'sprinkle-box-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ds-card__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color ds-card__price"><?php echo esc_html__( '$4.00', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"ds-card__desc"} -->
<p class="ds-card__desc"><?php echo esc_html__( 'House-made lemon curd, powdered sugar, lemon zest. Tart and sunshine-bright.', 'sprinkle-box-lite' ); ?></p>
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
<h3 class="wp-block-heading ds-card__name"><?php echo esc_html__( 'Strawberry Jam', 'sprinkle-box-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ds-card__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color ds-card__price"><?php echo esc_html__( '$3.75', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"ds-card__desc"} -->
<p class="ds-card__desc"><?php echo esc_html__( 'Oregon strawberry jam, vanilla glaze, sprinkle finish. A childhood classic, upgraded.', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"ds-card"} -->
<div class="wp-block-group ds-card">
<!-- wp:list {"className":"is-style-chips ds-card__tags"} -->
<ul class="wp-block-list is-style-chips ds-card__tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'fan fave', 'sprinkle-box-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"ds-card__head"} -->
<div class="wp-block-group ds-card__head">
<!-- wp:heading {"level":3,"className":"ds-card__name"} -->
<h3 class="wp-block-heading ds-card__name"><?php echo esc_html__( 'Chocolate Hazelnut', 'sprinkle-box-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ds-card__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color ds-card__price"><?php echo esc_html__( '$4.50', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"ds-card__desc"} -->
<p class="ds-card__desc"><?php echo esc_html__( 'Loaded with chocolate-hazelnut spread, dusted in crushed hazelnuts and powdered sugar. Pure joy.', 'sprinkle-box-lite' ); ?></p>
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
<h3 class="wp-block-heading ds-card__name"><?php echo esc_html__( 'Pumpkin Spice Cream', 'sprinkle-box-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ds-card__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color ds-card__price"><?php echo esc_html__( '$4.50', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"ds-card__desc"} -->
<p class="ds-card__desc"><?php echo esc_html__( 'Spiced pumpkin pastry cream, cinnamon sugar exterior. Fall only — people literally cry when it\'s gone.', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ds-card__note"} -->
<p class="ds-card__note"><?php echo esc_html__( 'Back in September', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"tagName":"section","className":"ds-menu-section"} -->
<section class="wp-block-group ds-menu-section">
<!-- wp:heading {"level":3,"className":"ds-menu-cat"} -->
<h3 class="wp-block-heading ds-menu-cat"><?php echo esc_html__( 'Cake Donuts', 'sprinkle-box-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ds-menu-intro"} -->
<p class="ds-menu-intro"><?php echo esc_html__( 'Dense, tender, old-fashioned cake-style. Crisp edges, crumbly interior — the underrated hero of the donut world.', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"15rem"},"className":"ds-cards"} -->
<div class="wp-block-group ds-cards">
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
<h3 class="wp-block-heading ds-card__name"><?php echo esc_html__( 'Cinnamon Sugar', 'sprinkle-box-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ds-card__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color ds-card__price"><?php echo esc_html__( '$3.00', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"ds-card__desc"} -->
<p class="ds-card__desc"><?php echo esc_html__( 'Tossed hot in cinnamon sugar. The original. You cannot go wrong.', 'sprinkle-box-lite' ); ?></p>
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
<h3 class="wp-block-heading ds-card__name"><?php echo esc_html__( 'Chocolate Cake', 'sprinkle-box-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ds-card__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color ds-card__price"><?php echo esc_html__( '$3.25', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"ds-card__desc"} -->
<p class="ds-card__desc"><?php echo esc_html__( 'Deep cocoa cake, chocolate glaze, optional sprinkles. Intensely satisfying.', 'sprinkle-box-lite' ); ?></p>
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
<h3 class="wp-block-heading ds-card__name"><?php echo esc_html__( 'Buttermilk Old Fashioned', 'sprinkle-box-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ds-card__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color ds-card__price"><?php echo esc_html__( '$3.00', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"ds-card__desc"} -->
<p class="ds-card__desc"><?php echo esc_html__( 'Tangy buttermilk batter, plain glaze, ruffled edges. The purists\' pick.', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"ds-card"} -->
<div class="wp-block-group ds-card">
<!-- wp:list {"className":"is-style-chips ds-card__tags"} -->
<ul class="wp-block-list is-style-chips ds-card__tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'fan fave', 'sprinkle-box-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"ds-card__head"} -->
<div class="wp-block-group ds-card__head">
<!-- wp:heading {"level":3,"className":"ds-card__name"} -->
<h3 class="wp-block-heading ds-card__name"><?php echo esc_html__( 'Funfetti Cake', 'sprinkle-box-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ds-card__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color ds-card__price"><?php echo esc_html__( '$3.75', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"ds-card__desc"} -->
<p class="ds-card__desc"><?php echo esc_html__( 'Birthday cake batter with sprinkles baked in. Rainbow frosting on top. We believe every day is a birthday.', 'sprinkle-box-lite' ); ?></p>
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
<h3 class="wp-block-heading ds-card__name"><?php echo esc_html__( 'Apple Cider', 'sprinkle-box-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ds-card__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color ds-card__price"><?php echo esc_html__( '$3.50', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"ds-card__desc"} -->
<p class="ds-card__desc"><?php echo esc_html__( 'Reduced apple cider in the batter, cardamom sugar exterior. Autumn in every bite.', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"tagName":"section","className":"ds-menu-section"} -->
<section class="wp-block-group ds-menu-section">
<!-- wp:heading {"level":3,"className":"ds-menu-cat"} -->
<h3 class="wp-block-heading ds-menu-cat"><?php echo esc_html__( 'Weekly Specials', 'sprinkle-box-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ds-menu-intro"} -->
<p class="ds-menu-intro"><?php echo esc_html__( 'Rotating specials that change every Monday. Follow us on Instagram to see what drops this week.', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"15rem"},"className":"ds-cards"} -->
<div class="wp-block-group ds-cards">
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
<p class="ds-card__desc"><?php echo esc_html__( 'Wildflower honey, Calabrian chilli, finishing salt. This week\'s special — gone Saturday.', 'sprinkle-box-lite' ); ?></p>
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
<p class="ds-card__desc"><?php echo esc_html__( 'Blueberry glaze, birthday sprinkles, vanilla cream drizzle. New this week.', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"ds-card"} -->
<div class="wp-block-group ds-card">
<!-- wp:list {"className":"is-style-chips ds-card__tags"} -->
<ul class="wp-block-list is-style-chips ds-card__tags">
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
<p class="ds-card__desc"><?php echo esc_html__( 'Maple-glazed twist, house candied bacon crumble. A fan-favourite returning by popular demand.', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"ds-lede ds-allergens"} -->
<p class="ds-lede ds-allergens"><?php echo esc_html__( 'Our kitchen handles wheat, dairy, eggs, hazelnuts and coconut, so we cannot promise any item is free of them, even those marked vegan or gluten free. Please ask about allergens before you order.', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<?php
echo sprinkle_box_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
