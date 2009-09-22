<?php
// Em chưa hiểu cái Nguyên lý của anh Kha nên có gì code lại sau !!! Giờ em code tiếp bên event.php

require_once('start.php');
function page_draw($title, $content){
	// Draw completed page, output to client side
	// View Themes here
	global $CONFIG;
	$dir = $CONFIG['theme'];
	$canvas  = view_theme($dir."canvas.php",$string);
	$footer  = view_theme($dir."footer.php",$string);
	$header  = view_theme($dir."header.php",$string);
	$sidebar = view_theme($dir."sidebar.php",$string);
	$content = view_theme($dir."content.php",$string);
	//Arrange the components AND Echo HTML string to client.
	shutdown();
}

function view_theme($viewname, $vars){
	global $vars;
	if(file_exists($viewname))
		$value = require_once($viewname);
}
function shutdown(){
	//Save all $CONFIG values
	close_connection();
}
function view($viewname, $vars){
	if(file_exists($viewname))
		require_once($viewname);
	
	//$vars['object']
	//$vars['viewtype']
}

function forward($url =  NULL){
	global $CONFIG;
	if($url == NULL)
		header('Location:'.$CONFIG['root']); 
	else if(!(strstr($url,"http://") ||  !strstr($url,"https://")))
		$url = $CONFIG['root'].$url;
	header('Location:'.$url);	
}



?>