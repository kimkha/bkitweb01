<?php

  $DB = array(
  	'Info' => NULL, // Info of connection config
  	'resource' => NULL, // resource link to database
  	'selected' => NULL, // Selected table
  	'prefix' => '', // Table prefix to insert into SQL query
  );
  
  
  function get_connection_config()
  {  
        require('config.php');
        return $DBInfo;
  }
  function start_connection()
    {
        global $DB;
        $DB['Info'] = get_connection_config();      //get database config
        foreach ($DB['Info'] as $key => $value)     //parse array to vars
        {
            $$key = $value;
        }
       
        $DB['resource'] = mysql_connect($host, $username, $password);  //ding, ding
        if (!$DB['resource'])
        {
            die('Can not connect to database. Error code:' . mysql_error());
        }
        
      $DB['selected'] = mysql_select_db($DB['Info']['database_name'], $DB['resource']);  //select bkitweb database
      
      //else
      //   return $DB;
    }
  function get_dataclass($classType)
  {
      if (is_string($classType) && ($classType === 'user' || $classType === 'event'))
      {
          switch ($classType)
          {
              case 'user':
                    require_once('user.php');
                    $user = new BKITUser();
                    //set value, blah blah
                    return $user;
                    break;
              case 'event':
                    require_once('event.php');
                    $event = new BKITEvent;
                    //set value, blah blah  
                    return $event;
                    break; 
          }  
      }
      else
      {
          trigger_error('Invalid Input. Must be user or event.', E_WARNING);
      }
      
  }
  function close_connection()
    {
        global $DB;
        if (isset($DB['resource']))
        {
            mysql_close($DB['resource']);
        }
    }
  function db_query($query)
  {
      global $DB;
      
      //if success, run query
      if ($DB['selected'])
      {
          //$clearQuery = mysql_real_escape_string(trim($query),$DB['resource']);
          $clearQuery = $query;
          return mysql_query($clearQuery);
      }  
  }
  function get_data($query, $datatype)
  {
      $query_result = db_query($query); //get resources from db
      
      $bkit_object_array = array(); //array of object for each result row
      if ($query_result)
      {
          while ($row = mysql_fetch_assoc($query_result))
          {
                $bkit_object = get_dataclass($datatype);
               
               //set object atrribute
                foreach ($row as $key => $value)       
                {
                    $bkit_object->set($key, $value);
                }
                array_push($bkit_object_array, $bkit_object);
          }
      }
      return $bkit_object_array;
  }
  //start_connection();
//  $old_Event=get_data("SELECT name,title,headline,content,image FROM event WHERE eid='{eid}'","event");
//  echo $old_Event->get('name');
?>
