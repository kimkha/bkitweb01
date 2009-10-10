<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php 
	include('engine/start.php');
    define('MAX_USER', 10);
	var_dump($_GET);
    $page = 1;
    if (isset($_GET['p']))
        $page = (int)$_GET['p'];
    start_connection();
	if ($_GET['type'] == 'Waiting')
	{
        $users = get_users('waiting', 'time_created ASC', MAX_USER, ($page - 1 ) * MAX_USER, null, null);
        $event = get_data('SELECT * FROM event WHERE time_created = (SELECT MAX(time_created) FROM event);', 'event');
        $event = $event[0];
        $type = 'waiting';
    }
    else if ($_GET['type'] == 'Approved')
    {
        $users = get_users('approve', 'time_created ASC', MAX_USER, ($page - 1 ) * MAX_USER, null, null);
        $type = 'approve';
    }
    else if ($_GET['type'] == 'Deny')
    {
        $users = get_users('deny', 'time_created ASC', MAX_USER, ($page - 1 ) * MAX_USER, null, null);
        $type = 'deny';
    }
    
    $vars = array('object' => $users, 'viewtype' => 'LISTUSER', 'extend' => array("status" => $type, "page" => $_GET['p'], '                                                                                                            pageview' => $_GET['p'] ));
    $html = view('user', $vars);
    echo $html;  
?>
</body>
</html>