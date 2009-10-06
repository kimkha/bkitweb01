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

	$event = new BKITEvent();

	$event->set('eid','1');
	$event->set('title','Title');
	$event->set('name','NAME');
	$event->set('headline','This is a headline!');
	$event->set('time_updated','01011990');
	
	$body = view("event",array('object'=>$event,'viewtype'=>'full'));

	// Draw the page and view it.
	page_draw('Homepage', $body);
	
?>