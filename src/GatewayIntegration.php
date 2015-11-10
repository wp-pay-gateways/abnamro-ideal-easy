<?php

class Pronamic_WP_Pay_Gateways_AbnAmro_IDealEasy_GatewayIntegration {
	public function __construct() {
		$this->id = 'abnamro-ideal-easy';
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_Ogone_OrderStandardEasy_ConfigFactory';
	}

	public function get_config_class() {
		return 'Pronamic_WP_Pay_Gateways_Ogone_OrderStandardEasy_Config';
	}

	public function get_gateway_class() {
		return 'Pronamic_WP_Pay_Gateways_Ogone_OrderStandardEasy_Gateway';
	}
}
