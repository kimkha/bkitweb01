<?php

require_once('start.php');
function page_draw($title, $varss){
	// Draw completed page, output to client side
	// View Themes here
	global $CONFIG;
	// $vars['content'], $vars['sidebar']
	$varss['title'] = $title;
	$header   = view_theme('header', $varss);
	$footer   = view_theme('footer', $varss);
	$content  = view_theme('content', $varss);
	$sidebar  = view_theme('sidebar', $varss);
	$varss['body'] = $header.$footer.$content.$sidebar;
	$pageview  = view_theme('canvas',$varss);

	echo $pageview;
	//Arrange the components AND Echo HTML string to client.
	shutdown();
	// Load canvas.php ->header -> footer -> content -> sidebar
}

function view_theme($viewname, $cpt){
	global $CONFIG;
	global $vars;
	$dir = "themes/".$CONFIG['theme']."/".$viewname.".php";
	$vars = $cpt;
	return require_once($dir);
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