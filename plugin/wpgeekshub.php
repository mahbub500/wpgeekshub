<?php
/**
 * Plugin Name:       WpGeeksHub Main Boiler Plate
 * Plugin URI:        https://mahbubv.com/
 * Description:       This is test plug in by mahbub
 * Version:           0.9
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Mahbub Rahman
 * Author URI:        http://wpgeekshub.com/
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

use Wpgeekshub\Plugin\Deactivator;


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
		$this->define();

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

		require_once( dirname( __FILE__ ) . '/vendor/autoload.php' );
	}

	/**
	 * Define variables and constants
	 * 
	 * @access private
	 * 
	 * @uses get_plugin_data
	 * @uses plugin_basename
	 */

	private function define() {

		/**
		 * Define some constants
		 * 
		 * @since 0.9
		 */
		define( 'WP_GEEKS_HUB', __FILE__ );
		define( 'WP_GEEKS_HUB_DIR', dirname( WP_GEEKS_HUB ) );
		define( 'WP_GEEKS_HUB_ASSET', plugins_url( 'assets', WP_GEEKS_HUB ) );
		define( 'WP_GEEKS_HUB_DEBUG', apply_filters( 'wp-geeksgub_debug', true ) );

		/**
		 * The plugin data
		 * 
		 * @since 0.9
		 * @var $plugin
		 */
		$this->plugin								= get_plugin_data( WP_GEEKS_HUB );
		$this->plugin['basename']		= plugin_basename( WP_GEEKS_HUB );
		$this->plugin['file']				= WP_GEEKS_HUB;
		$this->plugin['server']			= apply_filters( 'wp-geeksgub_server', 'https://codexpert.io/dashboard' );
		$this->plugin['min_php']		= '5.6';
		$this->plugin['min_wp']			= '4.0';
		$this->plugin['doc_id']			= 1960;
		$this->plugin['icon']			= WP_GEEKS_HUB_ASSET . '/img/icon.png';
		// $this->plugin['depends']		= [ 'woocommerce/woocommerce.php' => 'WooCommerce' ];
		
		/**
		 * Pro version info
		 * 
		 * Applicable if this plugin has a pro version
		 */
		// $this->plugin['item_id']				= 11;
		// $this->plugin['beta']					= true;
		// $this->plugin['updatable']			= true;
		// $this->plugin['license']				= new License( $this->plugin );
		// $this->plugin['license_page']	= admin_url( 'admin.php?page=wp-geeksgub' );
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

		// $admin = new Admin();
		// // $admin->activate( 'install' );
		// $admin->action( 'admin_footer', 'modal' );

		/**
			 * Shows a popup window asking why a user is deactivating the plugin
			 * 
			 * @package Wpgeekshub\Plugin
			 * 
			 * @author Wpgeekshub <hi@wpgeekshub.io>
			 */
			$deactivator = new Deactivator( $this->plugin );


		else : // !is_admin() ?

		// $front = new Front();
		// $front->action( 'wp_head', 'head' );

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