<?php
	/* ------------------------------------------------------
	 * BKIT WEB HUMAN RESOURCE TOOL
	--------------------------------------------------------- */ 
	
	// Include all functions and run at fisrt
	include_once("engine/start.php");
	include_once("engine/db.php");
	include_once("engine/lib.php");
	// Load All Template
	$title = $CONFIG['title'];
	$body['sidebar'] = "";
	$body['content'] = "This is the first page -               vinh";
	
	// Draw the page and view it.
	page_draw($title, $body);
	
?>