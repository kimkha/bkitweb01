<?php
	
	$content = $vars['content'];
	
	$html = <<<EOT

<div id='main-content'>
	$content
</div>
	
EOT;
	
	return $html;
?>