<?php
function get_theme(){
	if(isset($_COOKIE["theme_user_set"])){
		return $_COOKIE["theme_user_set"];
	}
	elseif (isset($_COOKIE["theme_admin_set"])){
		return $_COOKIE["theme_admin_set"];
	}
	else {
		return "default";
	}
} 

function set_theme($name="default",$uid=0){
	if ($uid == 0) setcookie("theme_admin_set",$name);
	else setcookie("theme_user_set",$name);
}

function choose_theme($name="default"){
	global $CONFIG;
	$CONFIG['theme']="../themes/".$name."/";
}

function view_theme($position,$vars){
	global $CONFIG;
	include $CONFIG['theme'].$position.".php"; 
}
?>