<?php
	/**
	 * Get Event and return a html string
	 * 
	 * @param $viewname array('object'=> $object 
	 * 						 'viewtype' => $viewtype)
	 * @return $output : html string
	 */
	 $obj  = $vars['object'];
	 $type = $vars['viewtype'];
	 
	 $output = '';
	 switch($type){
	 	case 'short':
			$output .= <<<EOT
			<div class="post">
			<h2><a href="event.php?id=$obj->get('eid')"><B>[$obj->get('name')]</B> $obj->get('title')</a></h2>
				
			<p class="post-info">Posted by <a href="">$obj->get('name')</a></p>
			
			<p>$obj->get('headline')</p>
						
					
			<p class="postmeta">		
			<a href="event.php?id=$obj->get('eid')" class="readmore">Read more</a> |				
			<span class="date">$obj->get('time_updated')</span>	
			</p>
			</div>
EOT;
			break;
		case 'full':
			$output .= <<<EOT
			<div class="post">
			<h2><a href="event.php?id=$obj->get('eid')"><B>[$obj->get('name')]</B> $obj->get('title')</a></h2>
				
			<p class="post-info">Posted by <a href="">$obj->get('name')</a></p>
			<p><b>$obj->get('headline')<b/></p>
			<p>$obj->get('content')</p>
						
					
			<p class="postmeta">						
			<span class="date">$obj->get('time_updated')</span>	
			</p>
			</div>			
EOT;
			break;	
		case 'title':
			$output.= <<<EOT
			<li><a href="event.php?id=$obj->get('eid')"><B>[$obj->get('name')]</B> $obj->get('title')</a></li>
EOT;
			break;
 	
	 }
 

	
	return $output;
?>