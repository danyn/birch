<?php
require 'birch-settings/init.php';
require 'storefront-settings/init.php';
require 'hooked-templates/init.php';
require 'shortcodes/init.php';
require 'cmb/init.php';




class Birch_Layered_Nav extends  WC_Widget_Layered_Nav{
		public function __construct() {
		$this->widget_cssclass    = 'woocommerce widget_layered_nav';
		$this->widget_description = __( 'Shows a custom attribute in a widget which lets you narrow down the list of products when viewing product categories.', 'woocommerce' );
		$this->widget_id          = 'birch_layered_nav';
		$this->widget_name        = __( 'Birch Layered Nav', 'woocommerce' );
		WC_Widget::__construct();
	}
	
}
add_action( 'widgets_init', function(){
	register_widget( 'Birch_Layered_Nav' );
});  