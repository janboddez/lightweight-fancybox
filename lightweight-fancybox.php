<?php
/**
 * Plugin Name: Lightweight Fancybox
 * Description: A very lightweight Fancybox plugin for WordPress.
 * Author: Jan Boddez
 * Author URI: https://janboddez.be/
 * License: GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Version: 0.1
 * GitHub Plugin URI: https://github.com/janboddez/lightweight-fancybox
 */

/* Prevents this script from being loaded directly. */
defined( 'ABSPATH' ) or exit;

/**
 * Main plugin class.
 *
 * @since 0.1
 */
class Lightweight_Fancybox {
	/**
	 * Registers the main callback function.
	 *
	 * @since 0.1
	 */
	public function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
	}

	/**
	 * Enqueus scripts and stylesheets.
	 *
	 * @since 0.1
	 */
	public function enqueue_scripts() {
		wp_enqueue_style( 'fancybox-style', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css', array(), '3.3.5' );
		wp_enqueue_script( 'fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js', array( 'jquery' ), '3.3.5', true );
		wp_enqueue_script( 'lightweight-fancybox', plugin_dir_url( __FILE__ ) . 'assets/js/lightweight-fancybox.js', array( 'jquery', 'fancybox' ), false, true );
	}
}

new Lightweight_Fancybox();
