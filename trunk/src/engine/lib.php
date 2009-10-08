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
	
	$sidebar = view('sidebar',array());

	$header   = view_theme('header', array());
	$footer   = view_theme('footer', array());
	$content  = view_theme('content', array('body' => $body));
	$sidebar  = view_theme('sidebar', array('sidebar' => $sidebar));
	
	$vars['body'] = $header.$content.$sidebar.$footer;
	// Chú ý thứ tự gọi phải là content -> siderbar

	$pageview  = view_theme('canvas', $vars);

	echo $pageview;
	
	shutdown();
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
	if(is_file($file))
		$value = include($file);
	
	if (isset($CONFIG['extend'][$viewname]) && is_array($CONFIG['extend'][$viewname]) && count($CONFIG['extend'][$viewname]) >0 ) {
		foreach ($CONFIG['extend'][$viewname] as $key => $view) {
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

function extend($viewname, $value="", $piority = 501) {
	global $CONFIG;
	
	if (!isset($CONFIG['extend']))
		$CONFIG['extend'] = array();
	if (!isset($CONFIG['extend'][$viewname]))
		$CONFIG['extend'][$viewname] = array();
	
	while (isset($CONFIG['extend'][$viewname][$piority]) && $CONFIG['extend'][$viewname][$piority] != "") {
		$piority++;
	}
	$CONFIG['extend'][$viewname][$piority] = $value;
	
	ksort($CONFIG['extend'][$viewname]);
}

function get_root() {
	$host = 'http://'.$_SERVER['HTTP_HOST'];
	$directory = dirname($_SERVER['SCRIPT_NAME']);
	$root = $directory == '/' ? $host.'/' : $host.$directory.'/';
	return $root;
}

function get_input($name, $default = '') {
	if (isset($_GET[$name]))
		return $_GET[$name];
	
	if (isset($_POST[$name]))
		return $_POST[$name];
	
	return $default;
}


?>