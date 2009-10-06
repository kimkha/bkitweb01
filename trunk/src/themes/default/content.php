<?php
	
	$body = $vars['body'];
	
	$html = <<<EOT
<div id="content-outer" class="clear"><div id="content-wrap">
<div id="content">

<div id="left">	

$body	

</div>
	
EOT;
	
	return $html;
?>