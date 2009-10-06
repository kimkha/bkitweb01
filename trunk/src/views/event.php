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
	 $thumb		= $obj->getThumb();
	 
	 switch($type){
	 	case 'short':
				$output = <<<EOT
		<div id="featured" class="clear">						
			<div class="image-block">
              <img src="$thumb" alt="featured"/>
 	 		</div>			
			
			<div class="text-block">
			
				<h2><a href="event.php?id=$eid"><B>[$name]</B> $title </a></h2>
			
				<p class="post-info">Posted by <a href="index.php">hungvinh</a> | Viết lúc $time</a></p>
				
				<p>$headline</p>
				<p><a href="event.php?id=$eid" >Read More</a></p>
								
			</div>								
		</div>	
EOT;
	
			break;
		case 'full':
			$output = <<<EOT
		<div id="featured" class="clear">									
			
			<div class="content-block">
			
				<h2><a href="event.php?id=$eid"><B>[$name]</B> $title </a></h2>
			
				<p class="post-info">Posted by <a href="index.php">hungvinh</a> | Viết lúc $time</a></p>
				
				<p>$content</p>
				<p><a href="event.php?id=$eid" >Read More</a></p>
								
			</div>								
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