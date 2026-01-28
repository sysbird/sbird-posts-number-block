<?php
/**
 * Plugin Name:       sBird Posts Number Block
 * Description:       Example block scaffolded with Create Block tool.
 * Version:           0.1.0
 * Requires at least: 6.7
 * Requires PHP:      7.4
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       sbird-posts-number-block
 *
 * @package CreateBlock
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Registers the block and assets from the build directory.
 */
function sbird_posts_number_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'sbird_posts_number_block_init' );
