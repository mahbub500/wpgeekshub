<?php
/**
 * All admin facing functions
 */
namespace Wpgeekshub\Plugin;
use Wpgeekshub\Plugin\Base;
use Wpgeekshub\Classes\Helper;
// use Codexpert\Plugin\Helper;


class Front extends Base{

	public $plugin;

	/**
	 * Constructor function
	 */
	public function __construct(  ) {
		$this->plugin	= 'Front';
	}

	public function head() {
		$test = [
				'Awal', 'maruf', 'nanu'
			];
		// Helper::pri( $test );
	}
}