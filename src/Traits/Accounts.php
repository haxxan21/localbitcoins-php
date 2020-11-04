<?php 

namespace Localbitcoin\Endpoints\Traits;

trait Account
{

    public function Info($username) {
		return $this->Query('/api/account_info/{username}/','','',array('{username}'),array($username));
	}

	public function Dashboard($pagination='') {
		if (!empty($pagination))
			$res = $this->Query('/api/dashboard/','',$pagination);
		else
			$res = $this->Query('/api/dashboard/');
		return $res;
	}

	public function DashboardReleased($pagination='') {
		if (!empty($pagination))
			$res = $this->Query('/api/dashboard/released/','',$pagination);
		else
			$res = $this->Query('/api/dashboard/released/');
		return $res;
	}

	public function DashboardCanceled($pagination='') {
		if (!empty($pagination))
			$res = $this->Query('/api/dashboard/canceled/','',$pagination);
		else
			$res = $this->Query('/api/dashboard/canceled/');
		return $res;
	}

	public function DashboardClosed($pagination='')	{
		if (!empty($pagination))
			$res = $this->Query('/api/dashboard/closed/','',$pagination);
		else
			$res = $this->Query('/api/dashboard/closed/');
		return $res;
	}

	public function Logout() {
		return $this->Query('/api/logout/');
	}

	public function Myself() {
		return $this->Query('/api/myself/');
	}

	public function Notifications() {
		return $this->Query('/api/notifications/');
	}

	public function NotificationsMarkAsRead($notification_id) {
		return $this->Query('/api/notifications/mark_as_read/{notification_id}/','','',array('{notification_id}'),array($notification_id));
	}

	public function Pincode($pincode) {
		return $this->Query('/api/pincode/',array('pincode'=>$pincode));
	}

	public function RealNameVerifiers($username) {
		return $this->Query('/api/real_name_verifiers/{username}/','','',array('{username}'),array($username));
	}

	public function RecentMessages($after='') {
		if (!empty($after))
			$res = $this->Query('/api/recent_messages/','',array('after'=>$after));
		else
			$res = $this->Query('/api/recent_messages/');
		return $res;
    }
}