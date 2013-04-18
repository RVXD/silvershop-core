<?php
/**
 * Order administration interface, based on ModelAdmin
 * @package shop
 * @subpackage cms
 */
class OrdersAdmin extends ModelAdmin{

	static $url_segment = 'orders';
	static $menu_title = 'Orders';
	static $menu_priority = 1;

	public static $managed_models = array(
		'Order' => array(
			'title' => 'Orders'
		)
	);

	function init() {
		parent::init();
		Requirements::javascript(SHOP_DIR."/javascript/EcommerceModelAdminExtensions.js");
	}

}
