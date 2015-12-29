<?php

/**
 * Title: ABN AMRO - iDEAL Easy integration test
 * Description:
 * Copyright: Copyright (c) 2005 - 2015
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_AbnAmro_IDealEasy_IntegrationTest extends PHPUnit_Framework_TestCase {
	public function test_config() {
		$integration = new Pronamic_WP_Pay_Gateways_AbnAmro_IDealEasy_Integration();

		$expected = 'Pronamic_WP_Pay_Gateways_AbnAmro_IDealEasy_ConfigFactory';

		$class = $integration->get_config_factory_class();

		$this->assertEquals( $expected, $class );
		$this->assertTrue( class_exists( $class ) );
	}
}
