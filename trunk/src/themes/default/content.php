<?php
	
	$content = $vars['content'];
	
	$html = <<<EOT

<div id="left">			
	/*
	<div class="entry">
		<h3><a href="index.html">Aliquam Risus Justo</a></h3>
			<p>	
			</p>
			<p><a class="more-link" href="index.html">continue reading</a></p>
		</div>
	*/
	<div class="post">
			
		<h2><a href="index.html">Một bài viết mẫu</a></h2>
			
		<p class="post-info">Posted by <a href="index.html">admin</a> | Filed under <a href="index.html">templates</a>, <a href="index.html">internet</a>  </p>
				
		<p>$content</p>
			
		<p>Nội dung mẫu 2</p>			
				
		<p class="postmeta">		
		<a href="index.html" class="readmore">Read more</a> |
		<a href="index.html" class="comments">Comments (3)</a> |				
		<span class="date">April 20, 2009</span>	
		</p>
	</div>	
				
				 
				
</div>
	
EOT;
	
	return $html;
?>