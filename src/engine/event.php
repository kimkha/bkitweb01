<?php
class BKITEvent{
	
	private $eid;
	private $name;
	private $title;
	private $headline;//HTML of headline
	private $content;//HTML of full content
	private $image;//Full URL of image (this attributes is not inserted to database)
	private $image_name ;//filename of image. Image upload to ./upload/images/ folder
	private $time_created;
	private $time_updated;
	// 8 biến private
	
	//Get value of attribute by name..........[TESTED]
	function get($name){
		return $this->$name;
	}
	
	//Set value of attribute by name..........[TESTED]
	function set($name, $value){
		$this->$name = $value;
		return true;
	}

	//Save this event to database..........[TESTED]
	function save(){
		//[database] eid 	name 	title 	headline 	content 	image 	time_created 	time_updated
		global $DB;
		$yes	 = get_event($this->eid);

		if($yes == false)
			$do  = "INSERT INTO ".$DB['Info']['table_prefix']."event (`name`,
																	  `title`,
																	  `headline`,
																	  `content`,
																	  `image`,
																	  `time_created`)
																	VALUE ('{$this->name}',
																   '{$this->title}',
																   '{$this->headline}',
																   '{$this->content}',
																   '{$this->image_name}',
																   ".time().");";
		else 
			$do = "UPDATE ".$DB['Info']['table_prefix']."event SET `title` = '{$this->title}',
														   `name` = '{$this->name}',
														   `headline` = '{$this->headline}',
														   `content` = '{$this->content}',
														   `image` = '{$this->image_name}',
														   `time_updated` = ".time()."
														   WHERE eid = '{$this->eid}' ;";

		$check = db_query($do) or die(mysql_error());
		if($check)
			return $this->eid;
		else 
			return FALSE;
	}
	//delete(): Delete this event in database..........[TESTED]
	function delete(){
		global $DB;
		$sql = "DELETE FROM ".$DB['Info']['table_prefix']."event WHERE `eid` = '{$this->eid}'";
		$do = db_query($sql);
		if($do)
			return $this->eid;
		else 
			return FALSE;
	}	
}
//get_event(eid): Get BKITEvent object by eid..........[TESTED]
function get_event($eid){
		global $DB;
		$sql = "SELECT * FROM ".$DB['Info']['table_prefix']."event WHERE `eid` = '{$eid}' LIMIT 1;";
		$do =  get_data($sql,'event');
		if(count($do) == 0)
			return FALSE;
		else return $do;
}

//..........[TESTED]
function get_events($order_by = "time_created ASC", $limit = 10, $offset = 0, $min_time_created = 0, $max_time_created = 0){
		global $DB;
		$min		= mysql_real_escape_string($min_time_created);
		$max 		= mysql_real_escape_string($max_time_created);
		$order_by 	= mysql_real_escape_string($order_by);
		$offset		= mysql_real_escape_string($offset);
		$limit 		= mysql_real_escape_string($limit);
		
		$sql = "SELECT * FROM ".$DB['Info']['table_prefix']."event WHERE 1 ";
		
		if($min != 0)
			$sql = $sql."AND `time_created` >= {$min} ";
		if($max != 0)	 
			$sql = $sql."AND `time_created` <= {$max} ";
		
		$sql = $sql."ORDER BY {$order_by} LIMIT {$offset},{$limit}";

		$do = get_data($sql,'event');
		if($do == FALSE || count($do) == 0)
			return FALSE;		
	return $do;	
}
?>