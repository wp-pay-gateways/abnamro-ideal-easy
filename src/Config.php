<?php

/**
 * Title: ABN AMRO - iDEAL Easy config
 * Description:
 * Copyright: Copyright (c) 2005 - 2018
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.4
 * @since 1.0.0
 */
class Pronamic_WP_Pay_Gateways_AbnAmro_IDealEasy_Config extends Pronamic_WP_Pay_Gateways_Ogone_OrderStandardEasy_Config {
	/**
	 * Get the default Ogone e-Commerce form action URL.
	 *
	 * @since 1.0.4
	 * @return string
	 */
	protected function get_default_form_action_url() {
		$is_utf8 = strcasecmp( get_bloginfo( 'charset' ), 'UTF-8' ) === 0;

		if ( $is_utf8 ) {
			return 'https://internetkassa.abnamro.nl/ncol/prod/orderstandard_utf8.asp';
		}

		return 'https://internetkassa.abnamro.nl/ncol/prod/orderstandard.asp';
	}

	public function get_payment_server_url() {
		return 'https://internetkassa.abnamro.nl/ncol/prod/orderstandard.asp';
	}
}
