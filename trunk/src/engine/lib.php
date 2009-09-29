<?php


function page_draw($title, $body){
	// Draw completed page, output to client side
	// View Themes here
	global $CONFIG;
	
	$vars = array();
	
	if ($title != '') {
		$title = ": " . $title;
	}
	$vars['title'] = $CONFIG['title'] . $title;
	
	$header   = view_theme('header', array());
	$footer   = view_theme('footer', array());
	$content  = view_theme('content', array('body' => $body));
	$sidebar  = view_theme('sidebar', array());
	
	$vars['body'] = $header.$content.$sidebar.$footer;
	// Chú ý thứ tự gọi phải là content -> siderbar

	$pageview  = view_theme('canvas', $vars);

	echo $pageview;
	
	shutdown();
}

function view_theme($viewname, $vars = array()){
	global $CONFIG;
	
	$file = "themes/".$CONFIG['theme']."/".$viewname.".php";
	
	$value = "";
	if(is_file($file))
		$value .= include( dirname(__FILE__) . $file);
	
	return $value;
}

function shutdown(){
	//Save all $CONFIG values
	
	// Close connection
	close_connection();
}
function view($viewname, $vars = array()){
	global $CONFIG;
	
	$file = "views/".$viewname.".php";
	
	$value = "";
	if(is_file($viewname))
		$value = include( dirname(__FILE__) . $file);
	
	if (isset($CONFIG['extend'][$viewname]) && is_array($CONFIG['extend'][$viewname]) && count($CONFIG['extend'][$viewname]) >0 ) {
		foreach ($CONFIG['extend'][$viewname] as $view) {
			$value .= $view;
		}
	}
	return $value;
}

function forward($url = NULL){
	global $CONFIG;
	
	
	if($url == NULL)
		$url = $CONFIG['root'];
	else {
		// Find "http://" or "https://"
		$pos = strpos($url, "http://");
		if ($pos === false) 
			$pos = strpos($url, "https://");
		
		if ($pos === false || $pos > 0)
			$url = $CONFIG['root'].$url;
	}
	
	header('Location:'.$url);	
}

function extend($viewname, $value="") {
	global $CONFIG;
	
	if (!isset($CONFIG['extend']))
		$CONFIG['extend'] = array();
	if (!isset($CONFIG['extend'][$viewname]))
		$CONFIG['extend'][$viewname] = array();
	
	$CONFIG['extend'][$viewname][] = $value;
}


?>