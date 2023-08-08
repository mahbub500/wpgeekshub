<?php
/**
 * Plugin Name:       Test plugin by mahbub
 * Plugin URI:        https://mahbubv.com/
 * Description:       This is test plug in by mahbub
 * Version:           1.1.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Mahbub Rahman
 * Author URI:        https://mahubb.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */
/**
 * if accessed directly, exit.
 */
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

use Wpgeekshub\TestPhp\Admin;
use Wpgeekshub\TestPhp\Front;


final class Plugin{
	/**
	 * Plugin instance
	 * 
	 * @access private
	 * 
	 * @var Plugin
	 */
	private static $_instance;

	private function __construct() {
		/**
		 * Includes required files
		 */
		$this->include();

		/**
		 * Defines contants
		 */
		// $this->define();

		/**
		 * Runs actual hooks
		 */
		$this->hook();
	}

	/**
	 * Includes files
	 * 
	 * @access private
	 * 
	 * @uses composer
	 * @uses psr-4
	 */
	private function include() {

		/**
		 * Define some constants
		 * 
		 * @since 0.9
		 */
		define( 'TEST_PLUGIN', __FILE__ );
		define( 'TEST_PLUGIN_DIR', dirname( TEST_PLUGIN ) );
		define( 'TEST_PLUGIN_ASSET', plugins_url( 'assets', TEST_PLUGIN ) );
		define( 'TEST_PLUGIN_DEBUG', apply_filters( 'learndash-plus_debug', true ) );

		/**
		 * The plugin data
		 * 
		 * @since 0.9
		 * @var $plugin
		 */
		// $this->plugin					= get_plugin_data( TEST_PLUGIN );
		$this->plugin['basename']		= plugin_basename( TEST_PLUGIN );
		$this->plugin['file']			= TEST_PLUGIN;

		require_once( dirname( __FILE__ ) . '/vendor/autoload.php' );
	}

	/**
	 * Hooks
	 * 
	 * @access private
	 * 
	 * Executes main plugin features
	 *
	 * To add an action, use $instance->action()
	 * To apply a filter, use $instance->filter()
	 * To register a shortcode, use $instance->register()
	 * To add a hook for logged in users, use $instance->priv()
	 * To add a hook for non-logged in users, use $instance->nopriv()
	 * 
	 * @return void
	 */
	private function hook() {
		if( is_admin() ) : // is_admin

		$admin = new Admin();
		// $admin->activate( 'install' );
		$admin->action( 'admin_footer', 'modal' );


		else : // !is_admin() ?
		$front = new Front();
		$front->action( 'wp_head', 'head' );

		endif;
	}


	/**
	 * Instantiate the plugin
	 * 
	 * @access public
	 * 
	 * @return $_instance
	 */
	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}
}


Plugin::instance();
 ?>