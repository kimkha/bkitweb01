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
	
	$body = "This is the first page -               vinh";
	
	$example_meta = '<meta name="description" content="Site Description Here" />';
	extend('metatags', $example_meta);
	
	// Draw the page and view it.
	page_draw('Homepage', $body);
	
?>