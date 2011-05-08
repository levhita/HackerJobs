<?php
/**
 * jobber job board platform
 *
 * @author	RedJumpsuit <myredjumpsuit@gmail.com>
 * @web		http://www.redjumpsuit.net
 * 
 * Very simple PayPal integration for jobberBase - strictly no IPN :)
 */
 
class SimplePayPal
{
 
	function __construct()
	{ }
 
	// update paypal settings
	public function updatesettings($data)
	{
		global $db;
 
		$sql = 'UPDATE '.DB_PREFIX.'paypal_settings
					SET 
						button_type = "'. trim($data['button_type']) .'",
						button_image = "'. trim($data['button_image']) .'",	
						currency_code = "'. trim($data['currency_code']) .'", 		
						return_url = "'. trim($data['return_url']) .'", 
						is_active = '. $data['is_active'] .', 	
						first_post_only = '. $data['first_post_only'] .' 
					WHERE id = 1';
 
		if ($db->query($sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
 
	// update paypal amount
	public function updatetypeamount($id,$amount=0)
	{
		global $db;
 
		if (empty($amount))
		{
			$amount = 0;
		}
 
		$sql = 'UPDATE '.DB_PREFIX.'types
					SET 
						amount = '. $amount .'					
					WHERE id = '. $id ;
 
		if ($db->query($sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
 
	// update paypal amount
	public function updatetypebutton($id,$button='')
	{
		global $db;
 
		if (empty($button))
		{
			$button = '';
		}
		$sql = 'UPDATE '.DB_PREFIX.'types
					SET 
						paypal_button_id = "'. trim($button) .'"					
					WHERE id = '. $id ;
 
		if ($db->query($sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
 
	// show paypal settings
	public function showsettings()
	{
		global $db;
		$pp = array();
 
		$sql = 'SELECT * FROM '.DB_PREFIX.'paypal_settings';
		$result = $db->query($sql);
		$row = $result->fetch_assoc();
 
		$pp['button_type'] = $row['button_type'];
		$pp['button_image'] = $row['button_image'];
		$pp['currency_code'] = $row['currency_code'];
		$pp['return_url'] = $row['return_url'];
		$pp['is_active'] = $row['is_active'];
		$pp['first_post_only'] = $row['first_post_only'];
 
		if (isset($pp))
		{
			return $pp;
		}
	}
 
}
?>