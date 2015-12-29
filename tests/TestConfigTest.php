<?php

/**
 * Title: ABN AMRO - iDEAL Easy - Config test test
 * Description:
 * Copyright: Copyright (c) 2005 - 2014
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_AbnAmro_IDealEasy_TestConfigTest extends PHPUnit_Framework_TestCase {
	public function test_config() {
		$config = new Pronamic_WP_Pay_Gateways_AbnAmro_IDealEasy_TestConfig();

		$expected = 'https://internetkassa.abnamro.nl/ncol/test/orderstandard.asp';

		$url = $config->get_payment_server_url();

		$this->assertEquals( $expected, $url );
	}
}
