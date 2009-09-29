<?php

// include all libraries
	include_once ( "db.php" );
	include_once ( "lib.php" );
	include_once ( "user.php" );
	include_once ( "event.php" );
	include_once ( "theme.php" );
	include_once ( "mail.php" );

// Init data connection
	start_connection();

// Init $CONFIG
	global $CONFIG;
	$CONFIG = array(
		'root' => 'http://localhost/_project/_project1/src/',
		'title' => 'Human Resource Website',
		'theme' => 'default',
		'user' => array(),
	);


?>
