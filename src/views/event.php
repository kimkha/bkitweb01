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
	 

	 foreach($obj->_convertArray() as $key => $value)
			$$key = $value;

	 if(is_admin_login() == true)
	 	$admincp = "| <a href=\"EditEvent.php?id=".$eid."\">Edit <a href=\"DeletetEvent.php?id=".$eid."\">Delete</a>";
 	else
 		$admincp = "| <a href=\"EditEvent.php?id=".$eid."\">Edit <a href=\"DeletetEvent.php?id=".$eid."\">Delete</a>";
	 
	 switch($type){
	 	case 'short':
				$output = <<<EOT
		<div id="featured" class="clear">						
			<div class="image-block">
              <img src="$thumb" alt="featured"/>
 	 		</div>			
			
			<div class="text-block">
			
				<h2><a href="Events.php?view=$eid"><B>[$name]</B> $title </a></h2>
			
				<p class="post-info">Viết lúc $time $admincp</p>
				
				<p>$headline</p>
				<p><a href="Events.php?view=$eid" >Read More</a></p>
								
			</div>								
		</div>	
EOT;
	
			break;
		case 'full':
			$output = <<<EOT
		<div id="featured" class="clear">									
			
			<div class="content-block">
			
				<h2><a href="Events.php?view=$eid"><B>[$name]</B> $title </a></h2>
			
				<p class="post-info">Viết lúc $time $admincp</p>
				
				<p>$content</p>
				
								
			</div>								
		</div>				
EOT;
			break;	
		case 'title':
			$output= <<<EOT
			<li><a href="Events.php?view=$eid"><B>[$name]</B> $title</a></li>
EOT;
			break;
 	
	 }
 

	
	return $output;
?>