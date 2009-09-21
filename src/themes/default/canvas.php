<?php
	
	$title = $vars['title'];
	$body = $vars['body'];
	
	$html = <<<EOT

<html>
<head>
	<title>$title</title>
</head>
<body>
	$body
</body>
</html>
	
EOT;
	
	return $html;
?>