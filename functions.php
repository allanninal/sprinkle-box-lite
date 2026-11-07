<?php
/**
 * Sprinkle Box Lite — theme bootstrap.
 *
 * The free edition of Sprinkle Box, made by tools/build-lite.mjs from the paid
 * build. Edit the generator, not this file.
 *
 * @package sprinkle-box-lite
 */

defined( 'ABSPATH' ) || exit;

define( 'SPRINKLE_BOX_LITE_VERSION', '1.0.0' );
define( 'SPRINKLE_BOX_LITE_DIR', get_template_directory() );
define( 'SPRINKLE_BOX_LITE_URI', get_template_directory_uri() );

require SPRINKLE_BOX_LITE_DIR . '/inc/setup.php';
require SPRINKLE_BOX_LITE_DIR . '/inc/media.php';
require SPRINKLE_BOX_LITE_DIR . '/inc/food.php';
require SPRINKLE_BOX_LITE_DIR . '/inc/lite.php';
require SPRINKLE_BOX_LITE_DIR . '/inc/updater.php';
