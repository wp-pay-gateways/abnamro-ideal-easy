<?php

/**
 * Title: ABN AMRO - iDEAL Easy config factory
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.3
 * @since 1.0.0
 */
class Pronamic_WP_Pay_Gateways_AbnAmro_IDealEasy_ConfigFactory extends Pronamic_WP_Pay_Gateways_Ogone_OrderStandardEasy_ConfigFactory {
	public function __construct() {
		parent::__construct( 'Pronamic_WP_Pay_Gateways_AbnAmro_IDealEasy_Config', 'Pronamic_WP_Pay_Gateways_AbnAmro_IDealEasy_TestConfig' );
	}
}
