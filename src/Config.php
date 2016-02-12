<?php

/**
 * Title: ABN AMRO - iDEAL Easy config
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.1
 * @since 1.0.0
 */
class Pronamic_WP_Pay_Gateways_AbnAmro_IDealEasy_Config extends Pronamic_WP_Pay_Gateways_Ogone_OrderStandardEasy_Config {
	public function get_payment_server_url() {
		return 'https://internetkassa.abnamro.nl/ncol/prod/orderstandard.asp';
	}
}
