<?php
	$obj = new BKITUser();
	
	$obj = $vars['object'];
	$type = $vars['viewtype'];
	
	$output ="L?i";
	
	if($obj == NULL)
		$output = include_once('forms/Register.php');
	else {
		switch($type){
			case 'profile':
				$output = include_once('forms/Profile.php');
				break;
			case 'confirm':
				$output = include_once('forms/Confirm.php');
				break;
			case 'displayprofileinfor':
				$output = include_once('forms/DisplayProfileInfor.php');
				break;	
		}
	}
		
		
		
	return $output;	
?>