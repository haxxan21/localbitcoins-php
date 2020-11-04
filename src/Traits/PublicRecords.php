<?php 

namespace Localbitcoin\Endpoints\Traits;

trait PublicRecords
{   

    public function BuyBitcoinsWithCash($arguments) {
		return $this->Query('/buy-bitcoins-with-cash/{location_id}/{location_slug}/.json','','',array('{location_id}','{location_slug}'),array($arguments['location_id'],$arguments['location_slug']));
	}

	public function SellBitcoinsForCash($arguments) {
		return $this->Query('/sell-bitcoins-for-cash/{location_id}/{location_slug}/.json','','',array('{location_id}','{location_slug}'),array($arguments['location_id'],$arguments['location_slug']));
	}

	public function BuyBitcoinsOnline($page=1,$arguments=array()) {
		if (!empty($arguments['countrycode']) && !empty($arguments['country_name']) && !empty($arguments['payment_method']))
			$res = $this->Query('/buy-bitcoins-online/{countrycode:2}/{country_name}/{payment_method}/.json','',array('page'=>$page),array('{countrycode:2}','{country_name}','{payment_method}'),array($arguments['countrycode'],$arguments['country_name'],$arguments['payment_method']));
		elseif (!empty($arguments['countrycode']) && !empty($arguments['country_name']))
			$res = $this->Query('/buy-bitcoins-online/{countrycode:2}/{country_name}/.json','',array('page'=>$page),array('{countrycode:2}','{country_name}'),array($arguments['countrycode'],$arguments['country_name']));
		elseif (!empty($arguments['currency'])&& !empty($arguments['payment_method']))
			$res = $this->Query('/buy-bitcoins-online/{currency:3}/{payment_method}/.json','',array('page'=>$page),array('{currency:3}','{payment_method}'),array($arguments['currency'],$arguments['payment_method']));
		elseif (!empty($arguments['currency']))
			$res = $this->Query('/buy-bitcoins-online/{currency:3}/.json','',array('page'=>$page),array('{currency:3}'),array($arguments['currency']));
		elseif (!empty($arguments['payment_method']))
			$res = $this->Query('/buy-bitcoins-online/{payment_method}/.json','',array('page'=>$page),array('{payment_method}'),array($arguments['payment_method']));
		else
			$res = $this->Query('/buy-bitcoins-online/.json','',array('page'=>$page));
		return $res;
	}

	public function SellBitcoinsOnline($page=1,$arguments=array()) {
		if (!empty($arguments['countrycode']) && !empty($arguments['country_name']) && !empty($arguments['payment_method']))
			$res = $this->Query('/sell-bitcoins-online/{countrycode:2}/{country_name}/{payment_method}/.json','',array('page'=>$page),array('{countrycode:2}','{country_name}','{payment_method}'),array($arguments['countrycode'],$arguments['country_name'],$arguments['payment_method']));
		elseif (!empty($arguments['countrycode']) && !empty($arguments['country_name']))
			$res = $this->Query('/sell-bitcoins-online/{countrycode:2}/{country_name}/.json','',array('page'=>$page),array('{countrycode:2}','{country_name}'),array($arguments['countrycode'],$arguments['country_name']));
		elseif (!empty($arguments['currency'])&& !empty($arguments['payment_method']))
			$res = $this->Query('/sell-bitcoins-online/{currency:3}/{payment_method}/.json','',array('page'=>$page),array('{currency:3}','{payment_method}'),array($arguments['currency'],$arguments['payment_method']));
		elseif (!empty($arguments['currency']))
			$res = $this->Query('/sell-bitcoins-online/{currency:3}/.json','',array('page'=>$page),array('{currency:3}'),array($arguments['currency']));
		elseif (!empty($arguments['payment_method']))
			$res = $this->Query('/sell-bitcoins-online/{payment_method}/.json','',array('page'=>$page),array('{payment_method}'),array($arguments['payment_method']));
		else
			$res = $this->Query('/sell-bitcoins-online/.json','',array('page'=>$page));
		return $res;
	}

	public function Bitcoinaverage() {
		return $this->Query('/bitcoinaverage/ticker-all-currencies/');
	}

	public function ClosedTrades($currency='USD',$since='') {
		if (!empty($since))
			$res = $this->Query('/bitcoincharts/{currency}/trades.json','',array('since'=>$since),array('{currency}'),array($currency));
		else
			$res = $this->Query('/bitcoincharts/{currency}/trades.json','','',array('{currency}'),array($currency));
		return $res;
	}

	public function Orderbook($currency='USD') {
		return $this->Query('/bitcoincharts/{currency}/orderbook.json','','',array('{currency}'),array($currency));
    }
}