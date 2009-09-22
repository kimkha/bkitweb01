<?php
// Code by hungvjnh
class BKITEvent{
	private $eid;
	private $name;
	private $title;
	private $headline;
	private $content;
	private $image;
	private $time_created;
	private $time_updated;
	
	function get($name){
		return $this->$name;
	}

	function set($name, $value){
		if($this->$name = $value)
			return true;
		else 
			return false;
	}

	function save(){
		global $DB;
		$sql = "SELECT * FROM ".$DB['table_prefix']."event WHERE `eid` = {$this->eid} LIMIT 1;";
		$yes = db_query($sql);
		if($yes == false || !$yes)
			$do = "INSERT INTO ".$DB['table_prefix']."event (`name`, `title`, `headline`, `content`, `image`, `time_created`, `time_updated`) VALUE ('{$this->name}','{$this->title}','{$this->headline}','{$this->content}','{$this->image}',now(),'');";
		else 
			$do = "UPDATE ".$DB['table_prefix']."event SET `title` = '{$this->title}', `name` = '{$this->name}', `headline` = '{$this->headline}', `content` = '{$this->content}', `image` = '{$this->image}', `time_updated` = NOW() WHERE eid = '{$this->eid}' ;";

		$check = db_query($do) or die(mysql_error());
		if($check == false || !$check)
			return false;
		else 
			return $this->eid;
	}
	/*
	-	delete(): Delete this event in database
	o	Return: 
			false: if error
			int: eid of deleted row
	*/
	function delete(){
		$sql = "DELETE * FROM ".$DB['table_prefix']."event WHERE eid = '{$this->eid}'";
		if(db_query($sql) == false)
			return false;
		else 
			return $this->eid;
	}	
}
/*
	-	get_event(eid): Get BKITEvent object by eid
	o	Param:
			eid: <int> eid of event to get
	o	Return:
			false: if error
			BKITEvent: if succeed

*/
function get_event($eid){
		global $DB;
		$sql = "SELECT * FROM ".$DB['table_prefix']."event WHERE eid = '{$eid}' LIMIT 1;";
		if(get_data($sql,'event') == false)
			return false;
		else {
			$Event = get_data($sql,'event');
		}
		return $Event;
}
/*
-	get_events(order_by, limit, offset, min_time_created, max_time_created): Get list of BKITEvent object
	o	Param:
			order_by: <string> Order list by. Default: “time_created ASC”
			limit: <int> Numbers of list. Default: 10
			offset: <int> List start at. Default: 0
			min_time_created: <int> Unix time, time_created of BKITEvent must be greater than. Default: 0
			max_time_created: <int> Unix time, time_created of BKITEvent must be less than. Default: 0 (unlimited) 
	o	Return:
			false: if error
			Array of BKITEvent objects if success
*/
function get_events($order_by, $limit, $offset = 0, $min_time_created = 0, $max_time_created = 0){
		global $DB;
		if($min_time_created == 0 && $max_time_created == 0)
			$sql = "SELECT * FROM ".$DB['table_prefix']."event ORDER BY {$order_by} LIMIT {$limit} OFFSET {$offset};";
		else
			$sql = "SELECT * FROM ".$DB['table_prefix']."event WHERE (`time_create` > {$min_time_created} AND `time_create` < {$max_time_created}) ORDER BY {$order_by} LIMIT {$limit} OFFSET {$offset};";
		
		if(get_data($sql,'event') == false)
			return false;
		else {
			$events  = array();
			while($Event = get_data($sql,'event'))
				array_push($events,$Event);
		}
	return $events;	
}
?>