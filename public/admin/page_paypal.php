<?php
 
$pp = new SimplePayPal();
 
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_what']) && trim($_POST['update_what']) == 'settings') 
{
	if (empty($_POST['button_type'])) 
	{
		$smarty->assign('error', 'Button Type is required.');
	} 
	elseif (empty($_POST['button_image'])) 
	{
		$smarty->assign('error', 'Button Image is required.');
	} 
	elseif (empty($_POST['currency_code'])) 
	{
		$smarty->assign('error', 'Currency Code is required.');
	} 
	elseif (empty($_POST['return_url'])) 
	{
		$smarty->assign('error', 'Return URL is required.');
	}
	else 
	{
 
		$data = array('button_type' => $_POST['button_type'],
					  'button_image' => $_POST['button_image'],
					  'currency_code' => $_POST['currency_code'],
					  'return_url' => $_POST['return_url'],
					  'is_active' => $_POST['is_active'],
					  'first_post_only' => $_POST['first_post_only']);
 
		$pp->updatesettings($data);
 
		unset($_POST['button_type']);
		unset($_POST['button_image']);
		unset($_POST['currency_code']);
		unset($_POST['return_url']);
		unset($_POST['is_active']);
		unset($_POST['first_post_only']);
 
		$smarty->assign('success', 'PayPal Settings has been updated!');
 
	}
}
 
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_what']) && trim($_POST['update_what']) == 'types') 
{
 
	foreach ($_POST['amount'] as $k1 => $v1) {
		$pp->updatetypeamount($k1,$v1);
	}
 
	foreach ($_POST['paypal_button_id'] as $k2 => $v2) {
		$pp->updatetypebutton($k2,$v2);
	}
 
	$smarty->assign('type_success', 'PayPal Setting for Job Types has been updated!');
 
}
 
$smarty->assign('current_category', 'paypal');
$smarty->assign('paypal', $pp->showsettings());	
$smarty->assign('types', get_types());
$html_title = 'PayPal Settings / ' . SITE_NAME;
$template = 'paypal.tpl';
?>