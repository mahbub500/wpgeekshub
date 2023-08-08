<?php
/**
 * All admin facing functions
 */
namespace Wpgeekshub\Plugin;
use Wpgeekshub\Plugin\Base;
use Codexpert\LearnDashPlus\Helper;


class Admin extends Base{

	public $plugin;

	/**
	 * Constructor function
	 */
	public function __construct(  ) {
		$this->plugin	= 'Admin';
	}
}