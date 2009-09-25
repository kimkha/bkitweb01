<?php
	$sidebar = $vars['sidebar'];

	$html = <<<EOT

			<div id="right">
							
				<div class="sidemenu">	
					<h3>Sidebar Menu</h3>
					<ul>				
						<li><a href="index.html">Home</a></li>
						<li><a href="index.html#TemplateInfo">TemplateInfo</a></li>
						<li><a href="style.html">Style Demo</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="archives.html">Archives</a></li>
						<li><a href="http://www.styleshout.com/">More Free Templates</a></li>	
						<li><a href="http://www.4templates.com/?aff=ealigam">Premium Templates</a></li>	
					</ul>	
				</div>
				$sidebar;
				
				<h3>Search</h3>
			
				<form id="quick-search" action="index.html" method="get" >
					<p>
					<label for="qsearch">Search:</label>
					<input class="tbox" id="qsearch" type="text" name="qsearch" value="type and hit enter..." title="Start typing and hit ENTER" />
					<input class="btn" alt="Search" type="image" name="searchsubmit" title="Search" src="images/search.gif" />
					</p>
				</form>	
		
		
		</div>		
EOT;
	
	return $html;
?>