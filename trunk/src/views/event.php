<?php
	/**
	 * Get Event and return a html string
	 * 
	 * @param $viewname array('object'=> $object 
	 * 						 'viewtype' => $viewtype)
	 * @return $output : html string
	 */
	 $obj = new BKITEvent();
	 $obj  = $vars['object'];
	 $type = $vars['viewtype'];
	 
	 $output = '';
	 
	 $eid 		= $obj->get('eid');
	 $name		= $obj->get('name');
	 $title		= $obj->get('title');
	 $headline 	= $obj->get('headline');
	 $time		= $obj->get('time_updated');
	 $content	= $obj->get('content');
	 
	 switch($type){
	 	case 'short':
				$output = <<<EOT
				<div class="post">
				<h2><a href="event.php?id=$eid"><B>[$name]</B> $title </a></h2>
					
				<p class="post-info">Posted by <a href="">$eid</a></p>
				
				<p>$headline</p>
							
						
				<p class="postmeta">		
				<a href="event.php?id=$eid" class="readmore">Read more</a> |				
				<span class="date">$time</span>	
				</p>
				</div>
EOT;
	
			break;
		case 'full':
			$output = <<<EOT
			<div class="post">
			<h2><a href="event.php?id=$eid"><B>[$name]</B> $title</a></h2>
				
			<p class="post-info">Posted by <a href="">$eid</a></p>
			<p><b>$headline<b/></p>
			<p>$content</p>
						
					
			<p class="postmeta">						
			<span class="date">Viết vào lúc $time</span>	
			</p>
			</div>			
EOT;
			break;	
		case 'title':
			$output= <<<EOT
			<li><a href="event.php?id=$eid"><B>[$eid]</B> $title</a></li>
EOT;
			break;
 	
	 }
 

	
	return $output;
?>