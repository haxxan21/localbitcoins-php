<?php

namespace Localbitcoin\Endpoints\Traits;

trait Trades{

	public function Feedback($username,$feedback,$msg='') {
		if (!empty($msg))
			$res = $this->Query('/api/feedback/{username}/',array('feedback'=>$feedback,'msg'=>$msg),'',array('{username}'),array($username));
		else
			$res = $this->Query('/api/feedback/{username}/',array('feedback'=>$feedback),'',array('{username}'),array($username));
		return $res;
	}

	public function ContactRelease($contact_id) {
		return $this->Query('/api/contact_release/{contact_id}/',array('contact_id'=>$contact_id),'',array('{contact_id}'),array($contact_id));
	}

	public function ContactReleasePin($contact_id,$pincode) {
		return $this->Query('/api/contact_release_pin/{contact_id}/',array('pincode'=>$pincode),'',array('{contact_id}'),array($contact_id));
	}

	public function ContactMarkAsPaid($contact_id) {
		return $this->Query('/api/contact_mark_as_paid/{contact_id}/','','',array('{contact_id}'),array($contact_id));
	}

	public function ContactMessages($contact_id) {
		return $this->Query('/api/contact_messages/{contact_id}/','','',array('{contact_id}'),array($contact_id));
	}

	public function ContactMessagePost($contact_id,$msg,$document='') {
		if (!empty($document))
			$res = $this->Query('/api/contact_message_post/{contact_id}/',array('msg'=>$msg,'document'=>'@'.realpath($document)),'',array('{contact_id}'),array($contact_id));
		else
			$res = $this->Query('/api/contact_message_post/{contact_id}/',array('msg'=>$msg,),'',array('{contact_id}'),array($contact_id));			
		return $res;		
	}

	public function ContactDispute($contact_id,$topic='') {
		if (!empty($topic))
			$res = $this->Query('/api/contact_dispute/{contact_id}/',array('topic'=>$topic),'',array('{contact_id}'),array($contact_id));
		else
			$res = $this->Query('/api/contact_dispute/{contact_id}/','','',array('{contact_id}'),array($contact_id));
		return $res;		
	}

	public function ContactCancel($contact_id) {
		return $this->Query('/api/contact_cancel/{contact_id}/','','',array('{contact_id}'),array($contact_id));
	}

	public function ContactFund($contact_id) {
		return $this->Query('/api/contact_fund/{contact_id}/','','',array('{contact_id}'),array($contact_id));		
	}

	public function ContactMarkRealName($contact_id,$confirmation_status,$id_confirmed) {
		return $this->Query('/api/contact_mark_realname/{contact_id}/',array('confirmation_status'=>$confirmation_status,'id_confirmed'=>$id_confirmed),'',array('{contact_id}'),array($contact_id));	
	}

	public function ContactMarkIdentified($contact_id) {
		return $this->Query('/api/contact_mark_identified/{contact_id}/','','',array('{contact_id}'),array($contact_id));		
	}

	public function ContactCreate($ad_id,$amount,$message='') {
		if (!empty($message))
			$res = $this->Query('/api/contact_create/{ad_id}/',array('amount'=>$amount,'message'=>$message),'',array('{ad_id}'),array($ad_id));
		else
			$res = $this->Query('/api/contact_create/{ad_id}/',array('amount'=>$amount),'',array('{ad_id}'),array($ad_id));
		return $res;		
	}

	public function ContactInfo($contact_id='')	{
		if (strpos($contact_id,',')!==false)
			$res = $this->Query('/api/contact_info/','',array('contacts'=>$contact_id));
		else
			$res = $this->Query('/api/contact_info/{contact_id}/','','',array('{contact_id}'),array($contact_id));
		return $res;		
    }
    
}