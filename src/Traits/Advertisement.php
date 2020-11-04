<?php 

namespace Localbitcoin\Endpoints\Traits;

trait Advertisment
{

    public function Ads($optional='') {
        if (!empty($optional))
            $res = $this->Query('/api/ads/','',$optional);
        else
            $res = $this->Query('/api/ads/');
        return $res;
    }

    public function AdGet($ad_id) {
        if (strpos($ad_id,',')!==false)
            $res = $this->Query('/api/ad-get/','',array('ads'=>$ad_id));
        else
            $res = $this->Query('/api/ad-get/{ad_id}/','','',array('{ad_id}'),array($ad_id));
        return $res;
    }

    public function AdEdit($ad_id,$arguments) {
        return $this->Query('/api/ad/{ad_id}/',$arguments,'',array('{ad_id}'),array($ad_id));
    }

    public function AdCreate($arguments) {
        return $this->Query('/api/ad-create/',$arguments);
    }

    public function AdDelete($ad_id) {
        return $this->Query('/api/ad-delete/{ad_id}/','','',array('{ad_id}'),array($ad_id));
    }

    public function PaymentMethods($countrycode='') {
        if (!empty($countrycode))
            $res = $this->Query('/api/payment_methods/{countrycode}/','','',array('{countrycode}'),array($countrycode));
        else
            $res = $this->Query('/api/payment_methods/');
        return $res;
    }

    public function Countrycodes() {
        return $this->Query('/api/countrycodes/');
    }

    public function Currencies() {
        return $this->Query('/api/currencies/');
    }

    public function Places($arguments) {
        return $this->Query('/api/places/','',$arguments);
    }

}