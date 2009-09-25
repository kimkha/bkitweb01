<?php
/* ----------------------------------------------
 * Load $title và $body
 * $title = Tiêu đề trang web
 * $body  = Nội dung trang web
 * ----------------------------------------------*/
	$title = $vars['title'];
	$body = $vars['body'];
	$dir = "themes/".$CONFIG['theme']."/";
	$html = <<<EOT

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<title>$title</title>

<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
<meta name="author" content="BkitWeb" />
<meta name="description" content="Site Description Here" />
<meta name="keywords" content="keywords, here" />
<meta name="robots" content="index, follow, noarchive" />
<meta name="googlebot" content="noarchive" />

<link rel="stylesheet" type="text/css" media="screen" href="{$dir}css/screen.css" />

</head>

<body>
<div id="wrap">

$body			
		
</div>
</body>
</html>

EOT;
	
	return $html;
?>