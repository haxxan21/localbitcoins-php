<?php

namespace Localbitcoin\Endpoints\Traits;

trait Wallet{

	public function Infos() {
		return $this->Query('/api/wallet/');
	}

	public function Balance() {
		return $this->Query('/api/wallet-balance/');
	}

	public function Send($address,$amount) {
		return $this->Query('/api/wallet-send/',array('address'=>$address,'amount'=>$amount));
	}

	public function SendPin($address,$amount,$pincode) {
		return $this->Query('/api/wallet-send/',array('address'=>$address,'amount'=>$amount,'pincode'=>$pincode));
	}

	public function Addr() {
		return $this->Query('/api/wallet-addr/');
    }
    
}