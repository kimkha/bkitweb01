<?php 
	include('engine/user.php');
    define('MAX_USER', 10);
	var_dump($_GET);
	
	$page = 1;
	if (isset($_GET['p']))
       $page = (int)$_GET['p'];
	start_connection();
 
	$page_status = 	   array(-2 => true, 
                             -1 => true,
                             0 => false,
                             1 => false,
                             2 => false,
                             3 => false,
                             4 => false);
                             
	$begin = 0;
 	if ($page > 2 || ($page <= 2 && !$page_status[4]))
  	$begin = -2;
  	$pageview ='';
	for ($i = $begin; $i - $begin < 5; $i++){
 		if ($page_status[$i]){
   			$page_index =  $page + $i;
      	if ($page_index > 0)
       		$pageview .= "<a href='ListUser.php?type=Waiting&p=$page_index'>$page_index</a> ";
       }         
   }


	if(isset($_GET['type'])) {
		$statustype = $_GET['type'];
		for ($i = 0; $i < 5; $i++){
		$users = get_users($statustype , 'time_created ASC', MAX_USER, ($page + $i - 1 ) * MAX_USER, null, null);
  		if (count($users) > 0)
  			$page_status[$i] = true;
  		else
    		break;
      	}
       $users = get_users($statustype , 'time_created ASC', MAX_USER, ($page - 1 ) * MAX_USER, null, null); 	
	        	
		$body = view('user',array('object'=>$users,'viewtype'=>'LISTUSER','extend'=>array('status'=>$statustype,'page'=>$page,'pageview' = $pageview)));
		
	}