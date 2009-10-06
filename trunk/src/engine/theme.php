<?php
function get_theme(){
	if(isset($_COOKIE["theme_user_set"])){
		return $_COOKIE["theme_user_set"];
	}
	
	if (isset($_COOKIE["theme_admin_set"])){
		return $_COOKIE["theme_admin_set"];
	}
	
	return "default";
} 

function set_theme($name = "default", $uid=0){
	setcookie("theme_admin_set", $name);
	if ($uid != 0)
		setcookie("theme_user_set", $name);
}

function choose_theme($name = "default"){
	global $CONFIG;
	$CONFIG['theme'] = $name;
}

function view_theme($viewname, $vars = array()){
	global $CONFIG;
	
	$file = "themes/".$CONFIG['theme']."/".$viewname.".php";
	
	//$path = str_replace("\\","/",dirname(__FILE__)) ."/";
	$path = "";

	$value = "";
	if(is_file($file))
		$value .= include($path. $file);
	
	return $value;
}

?>