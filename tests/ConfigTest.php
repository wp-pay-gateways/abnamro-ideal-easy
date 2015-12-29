<?php

/**
 * Title: ABN AMRO - iDEAL Easy - Config test
 * Description:
 * Copyright: Copyright (c) 2005 - 2014
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_AbnAmro_IDealEasy_ConfigTest extends PHPUnit_Framework_TestCase {
	public function test_config() {
		$config = new Pronamic_WP_Pay_Gateways_AbnAmro_IDealEasy_Config();

		$expected = 'https://internetkassa.abnamro.nl/ncol/prod/orderstandard.asp';

		$url = $config->get_payment_server_url();

		$this->assertEquals( $expected, $url );
	}
}
