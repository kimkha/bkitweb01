<?php
include_once("engine/start.php");
$admin=@is_admin_login();


	$page=@$_GET['page'];
	$view_num =  $_GET['view'];
	
	if(isset($view_num)){
		
		$view_num =  $_GET['view'];
		$event_to_view = get_event($view_num);
		$body = "";
		$previous_events_num = 5;
		$next_events_num = 5;
		foreach($event_to_view as $value){
//			if ($value->get('time_updated')!=0) $view_time=$value->get('time_updated');
//			else $view_time = $value->get('time_created');
//			$before = db_query("SELECT COUNT(`eid`) FROM `event` WHERE `time_created`<{$view_time} ");
//			$after = db_query("SELECT COUNT(`eid`) FROM `event` WHERE `time_created`>{$view_time} ");
//			$before_num = mysql_result($before, 0);
//			$after_num = mysql_result($after, 0);
//			if ($before_num < $previous_events) $previous_events_num = $before_num;
//			if ($after_num < $next_events) $next_events_num = $after_num;
//
			$body .= view("event",array('object'=>$value,'viewtype'=>'full'));
		}
//				$body .="Các bài mới hơn: </br>";
//		$previous_events = get_events("time_created ASC",$previous_events_num,0,$view_time,0);
//		foreach ($previous_events as $values){
//			$body .= view("event",array('object'=>$values,'viewtype'=>'title'));	
//		}
		

		$body .="Các bài viết gần đây:  </br>";
		$related_events_number = 10;
		$related_events = get_events("time_created DESC",$related_events_number,0,0,0);
		foreach ($related_events as $values){
			$body .= view("event",array('object'=>$values,'viewtype'=>'title'));		
		}
		$body .= "<p align='center'><a href='Events.php'>Xem tất cả...</a></p>";
		
		page_draw('Home',$body);
	}
	
	
	
	
	else{
		$event_number=db_query("SELECT COUNT(`eid`) FROM `event` ");
		$count=mysql_result($event_number, 0);
	
		if(!isset($page) || $page==null) {$page=1;}
		$limit_event=5;
		$offset_event=$limit_event*$page-5;
		$paging_number=5;
		$start;
		$end;
		if ((int)($count/$limit_event+1)==($count/$limit_event+1)){
			$limit_paging = ((int)($count/$limit_event));
		}
		else $limit_paging = ((int)($count/$limit_event+1));
		
//		$Events = new BKITEvent();
		$list_Event = get_events("time_created DESC",$limit_event,$offset_event,0,0);
		$body="";
		foreach ($list_Event as $value){
			$image=$value->get('image');
			$value->set('image_name',$image);
			$body .= view("event",array('object'=>$value,'viewtype'=>'short'));
		}
		$body .="</br><p align='center'>";
		
		
		if ($limit_paging<$paging_number){
			$start=1;
			$end=$limit_paging;
			for ($i=$start;$i<=$end;$i++){
				if ($i==$page){
					$body.=" [".$i."] ";
				}
				else $body.="<a href=Events.php?page=".$i."> ".$i." </a>";
			}
		}
		else{
			$start=1;
			$end=$limit_paging;
			if ($page > (($end-$start)/2)){
				$start=$start+1;
				$end=$end+1;
				if ($end >= $limit_paging) $end=$limit_paging;
			}
			else{
				$start=$start-1;
				if ($start <= 1) $start=1;
				$end=$end-1;
			}
			for ($i=$start;$i<=$end;$i++){
				if ($i==$page){
					$body.=" [".$i."] ";
				}
				else{
					if ($i==$start && $i!=1) $body.="<a href=Events.php?page=".$i."> Previous </a>";
					else if ($i==$end && $i!=$limit_paging) $body.="<a href=Events.php?page=".$i."> Next </a>";
					else $body.="<a href=Events.php?page=".$i."> ".$i." </a>";
				}
			} 	
		}
		$body.="</p>";
		page_draw('Homepage', $body);
		
		
	}
	echo $limit_paging."</br></br></br></br></br>";
