<?php 

namespace Localbitcoin\Endpoints\Traits;

trait Merchants
{

    public function Invoices($pagination='') {
		if (!empty($pagination))
			$res = $this->Query('/api/merchant/invoices/','',$pagination);
		else
			$res = $this->Query('/api/merchant/invoices/');
		return $res;
	}

	public function NewInvoice($arguments) {
		return $this->Query('/api/merchant/new_invoice/',$arguments);
	}

	public function Invoice($id) {
		return $this->Query('/api/merchant/invoice/{invoice_id}/','','',array('{invoice_id}'),array($id));
	}

	public function DeleteInvoice($id) {
		return $this->Query('/api/merchant/delete_invoice/{invoice_id}/','','',array('{invoice_id}'),array($id));
    }

}