<?php
    include('engine/start.php');

	$body = view("user",array('object'=>NULL,'viewtype'=>'REGISTER'));
	page_draw('Register', $body);
?>
