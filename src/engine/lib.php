<?php

require_once('start.php');
function page_draw($title, $varss){
	// Draw completed page, output to client side
	// View Themes here
	global $CONFIG;

	$vars['title'] = $title;
	$header   = view_theme('header', $varss);
	$footer   = view_theme('footer', $varss);
	$content  = view_theme('content', $varss);
	$sidebar  = view_theme('sidebar', $varss);
	$vars['body'] = $header.$content.$sidebar.$footer;
	// Chú ý thứ tự gọi phải là content -> siderbar

	$pageview  = view_theme('canvas',$vars);

	echo $pageview;
	shutdown();
}

function view_theme($viewname, $cpt){
	global $CONFIG;
	global $vars;
	$dir = "themes/".$CONFIG['theme']."/".$viewname.".php";
	$vars = $cpt;
	if(is_file($dir))
	$value = include_once($dir);
	return $value;
}
function shutdown(){
	//Save all $CONFIG values
	close_connection();
}
function view($viewname, $vars){
	if(file_exists($viewname))
		require_once($viewname);
	// Em không hiểu hàm này
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