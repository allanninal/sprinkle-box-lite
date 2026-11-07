<?php
/**
 * Title: Menu board
 * Slug: sprinkle-box-lite/menu-board
 * Categories: sprinkle-box-lite
 * Viewport Width: 1400
 *
 * @package sprinkle-box-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"44rem"},"tagName":"section","align":"full","className":"is-style-menu-board ds-section"} -->
<section class="wp-block-group alignfull is-style-menu-board ds-section">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Always fresh, always rotating', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'The Menu', 'sprinkle-box-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"placeholder":"Order cut-off (filled in from WooCommerce > Settings > Shipping > Order ahead)","className":"is-style-order-cutoff"} -->
<p class="is-style-order-cutoff"></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__group"} -->
<div class="wp-block-group menu-board__group">
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html__( 'Glazed &amp; Frosted', 'sprinkle-box-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Classic Glaze', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$2.75', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'classic', 'sprinkle-box-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Strawberry Sprinkle', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$3.50', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'classic', 'sprinkle-box-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'fan fave', 'sprinkle-box-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Chocolate Frosted', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$3.25', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'classic', 'sprinkle-box-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Maple Bar', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$3.50', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'classic', 'sprinkle-box-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'fan fave', 'sprinkle-box-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Blueberry Glazed', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$3.75', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'seasonal', 'sprinkle-box-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Matcha Coconut', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$4.25', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'seasonal', 'sprinkle-box-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__group"} -->
<div class="wp-block-group menu-board__group">
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html__( 'Filled Donuts', 'sprinkle-box-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Boston Cream', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$4.25', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'classic', 'sprinkle-box-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Lemon Curd', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$4.00', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'classic', 'sprinkle-box-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Strawberry Jam', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$3.75', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'classic', 'sprinkle-box-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Chocolate Hazelnut', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$4.50', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'fan fave', 'sprinkle-box-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Pumpkin Spice Cream', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$4.50', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'seasonal', 'sprinkle-box-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__group"} -->
<div class="wp-block-group menu-board__group">
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html__( 'Cake Donuts', 'sprinkle-box-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Cinnamon Sugar', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$3.00', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'classic', 'sprinkle-box-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Chocolate Cake', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$3.25', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'classic', 'sprinkle-box-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Buttermilk Old Fashioned', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$3.00', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'classic', 'sprinkle-box-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Funfetti Cake', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$3.75', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'fan fave', 'sprinkle-box-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Apple Cider', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$3.50', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'seasonal', 'sprinkle-box-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__group"} -->
<div class="wp-block-group menu-board__group">
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html__( 'Weekly Specials', 'sprinkle-box-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Hot Honey Glazed', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$4.00', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'new', 'sprinkle-box-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Blueberry Birthday Cake', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$4.00', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'new', 'sprinkle-box-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'seasonal', 'sprinkle-box-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Maple Bacon Twist', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$4.50', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'fan fave', 'sprinkle-box-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"ds-lede ds-allergens"} -->
<p class="ds-lede ds-allergens"><?php echo esc_html__( 'Our kitchen handles wheat, dairy, eggs, hazelnuts and coconut, so we cannot promise any item is free of them, even those marked vegan or gluten free. Please ask about allergens before you order.', 'sprinkle-box-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html__( 'Fresh batches today', 'sprinkle-box-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:list {"className":"is-style-schedule"} -->
<ul class="wp-block-list is-style-schedule">
<!-- wp:list-item -->
<li><?php echo esc_html__( '7:00 AM · First batch: classic glaze, sprinkles and old fashioneds', 'sprinkle-box-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( '9:00 AM · Filled donuts: Boston cream, lemon curd and jam', 'sprinkle-box-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( '11:00 AM · Cake donuts: funfetti, chocolate and apple cider', 'sprinkle-box-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( '12:30 PM · Last fry: whatever is selling fastest', 'sprinkle-box-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</section>
<!-- /wp:group -->
<?php
echo sprinkle_box_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
