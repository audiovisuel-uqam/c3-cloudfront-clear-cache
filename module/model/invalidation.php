<?php
/**
 * C3_Invalidation
 *
 * @author hideokamoto <hide.okamoto@digitalcube.jp>
 * @package Amimoto-plugin-dashboard
 * @since 4.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Controle Invalidation
 *
 * @class C3_Invalidation
 * @since 4.0.0
 */
class C3_Invalidation extends C3_Base {
	private static $instance;
	private static $text_domain;

	private function __construct() {
		self::$text_domain = C3_Base::text_domain();
	}

	/**
	 * Get Instance Class
	 *
	 * @return C3_Auth
	 * @since 4.0.0
	 * @access public
	 */
	public static function get_instance() {
		if ( ! isset( self::$instance ) ) {
			$c = __CLASS__;
			self::$instance = new $c();
		}
		return self::$instance;
	}

}