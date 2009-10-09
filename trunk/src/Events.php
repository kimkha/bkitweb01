<?php
include_once("engine/start.php");
$admin=@is_admin_login();
$event_number=db_query("SELECT COUNT(`eid`) FROM `event` ");
$count=mysql_result($event_number, 0);

	$page=@$_GET['page'];
	$view_num =  $_GET['view'];
	
	if(isset($view_num)){
		$view_num =  $_GET['view'];
		$event_to_view = get_event($view_num);
		$body = "";
		foreach($event_to_view as $value){
			$body .= view("event",array('object'=>$value,'viewtype'=>'full'));
		}
		
		page_draw('Home',$body);
	}
	
	
	
	
	else{
	
	if(!isset($page) || $page==null) {$page=1;}
	$limit_event=3;
	$offset_event=$limit_event*$page+1;
	$Events = new BKITEvent();
	$list_Event = get_events("time_created ASC",$limit_event,$offset_event,0,0);
	$body="";
	foreach ($list_Event as $value){
		$image=$value->get('image');
		$value->set('image_name',$image);
		$body .= view("event",array('object'=>$value,'viewtype'=>'short'));
	}
	$body .="</br><p align='center'>";
	
	$paging_number=4;
	$start;
	$end;
	$limit_paging = ((int)($count/$limit_event));
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
