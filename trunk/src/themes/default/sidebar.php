<?php
	$sidebar = $vars['sidebar'];

	$html = <<<EOT
		<div id="right">
			<div class="sidemenu">	
				<h3>Menu</h3>
				<ul>				
					<li><a href="index.php">Home</a></li>
					<li><a href="#">Login</a></li>
					<li><a href="#">Register</a></li>
				</ul>	
			</div>
			$sidebar
		</div>

	</div>
</div>
		
		</div>		
EOT;
	
	return $html;
?>