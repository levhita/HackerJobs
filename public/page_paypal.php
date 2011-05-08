<?php
	$j = new Job($id);
	// if auth code used, check it and allow activating
	if (($extra != '' && $extra == $j->GetAuth()))
	{
		if ( !isset($_POST['item_number']) || ($_POST['item_number'] !=  $id ) ) {
	      redirect_to(BASE_URL);
		  exit;
		}
				
	    $activator = $j->Activate();
		
	    $vali = new Postman();
		$vali->MailPostActivatedToUser($j->GetInfo());
		
		$_SESSION['status'] = $translations['jobs']['activated_success'];	
		redirect_to(BASE_URL . URL_JOB .'/' . $id . '/');
		exit;
	}
	else
	{
		redirect_to(BASE_URL);
		exit;
	}
?>