<?php

class Pronamic_WP_Pay_Gateways_AbnAmro_IDealEasy_Integration extends Pronamic_WP_Pay_Gateways_Ogone_OrderStandardEasy_Integration {
	public function __construct() {
		$this->id       = 'abnamro-ideal-easy';
		$this->name     = 'ABN AMRO - iDEAL Easy';
		$this->url      = 'https://internetkassa.abnamro.nl/';
		$this->provider = 'abnamro';
	}
}
