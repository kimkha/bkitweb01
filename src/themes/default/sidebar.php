<?php
	$sidebar = $vars['sidebar'];
	$html = <<<EOT
		<div id="right">
			<div class="sidemenu">	
				$sidebar	
			</div>
		</div>

	</div>
</div>
		
		</div>		
EOT;
	
	return $html;
?>