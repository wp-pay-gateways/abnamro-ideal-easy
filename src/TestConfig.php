<?php

/**
 * Title: ABN AMRO - iDEAL Easy config test
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_AbnAmro_IDealEasy_TestConfig extends Pronamic_WP_Pay_Gateways_AbnAmro_IDealEasy_Config {
	public function get_payment_server_url() {
		return 'https://internetkassa.abnamro.nl/ncol/test/orderstandard.asp';
	}
}
