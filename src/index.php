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
	
	$check = 1;
	//Check Event : 0
	//Check User : 1
	
	if($check == 0){
		// Đặt ID của bài giới thiệu BkitWeb tại đây
		$idname = 35;
		$bkitweb = get_event($idname);
		if(!empty($bkitweb))
			foreach($bkitweb as $key => $value)
				$body .= view("event",array('object'=>$value,'viewtype'=>'short'));
		
		// Hiển thị bài viết
		$iEvent = get_events("time_created ASC",5);
		if(!empty($iEvent))
			foreach($iEvent as $key => $value)
				$body .= view("event",array('object'=>$value,'viewtype'=>'short'));
		
		//Test: change 'short' to 'full'
	}
	else if($check == 1){
		
		$obj = new BKITUser();
		$obj->set('firstname','hungvinh');
		
		$body = view("user",array('object'=>$obj,'viewtype'=>'CONFIRM'));
	}
	// Draw the page and view it.
	page_draw('Homepage', $body);
	
?>