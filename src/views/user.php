<?php
	if(is_array($obj))
		$obj = array();
	else
		$obj = new BKITUser();
	
	$obj = $vars['object'];
	$type = $vars['viewtype'];
	
	if(isset($vars['extend']['status'])
		$status = $vars['extend']['status'];
		
	if(isset($vars['extend']['page'])
		$page = $vars['extend']['page'];
		
	if(isset($vars['extend']['pageview'])
		$page = $vars['extend']['pageview'];			
	
	$output ="Lỗi";
	
	if($obj == NULL)
		$output = include_once('forms/Register.php');
	else {
		switch($type){
			case 'PROFILE':
				$output = include_once('forms/Profile.php');
				break;
			case 'CONFIRM':
				$output = include_once('forms/Confirm.php');
				break;
			case 'DISPLAYPROFILEINFOR':
				$output = include_once('forms/DisplayProfileInfor.php');
				break;	
			case 'LISUSER':
				$output = include_once('forms/ListUser.php');
				break;
			default:
				$output = '';
		}
	}
		
		
		
	return $output;	
?>