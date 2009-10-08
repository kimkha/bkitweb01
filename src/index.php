<?php
	
	/**
	 * BKITWEB Human Resource Tool
	 * 
	 * @author BKITWeb
	 * @package bkitweb-01
	 * @link http://www.bkitweb.com
	 * @copyright The GNU General Public License (version 3)
	 */
	
	// Include all functions and run at fisrt
	include_once("engine/start.php");
	
	$example_meta = '<meta name="description" content="Site Description Here" />';
	extend('metatags', $example_meta);
	
	$body = "";
	
	$check = 0;
	//Check Event : 0
	//Check User : 1
	
	if($check == 0){
		$event = new BKITEvent();
	
		$iEvent = get_events();
		if(!empty($iEvent))
			foreach($iEvent as $key => $value)
				$body .= view("event",array('object'=>$value,'viewtype'=>'short'));
		
		//Test: change 'short' to 'full'
	}
	else if($check == 1){
		
		$obj = new BKITUser();
		$obj->set('firstname','hungvinh');
		
		$body = view("user",array('object'=>NULL,'viewtype'=>'REGISTER'));
	}
	// Draw the page and view it.
	page_draw('Homepage', $body);
	
?>