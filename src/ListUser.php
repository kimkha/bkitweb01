<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php 
	include('engine/user.php');
    define('MAX_USER', 10);
	var_dump($_GET);
	if ($_GET['type'] == 'Waiting')
	{
		$page = 1;
        if (isset($_GET['p']))
            $page = (int)$_GET['p'];
        start_connection();
        $page_status = array(-2 => true, 
                             -1 => true,
                             0 => false,
                             1 => false,
                             2 => false,
                             3 => false,
                             4 => false);
         
        for ($i = 0; $i < 5; $i++)
        {
            $users = get_users('waiting', 'time_created ASC', MAX_USER, ($page + $i - 1 ) * MAX_USER, null, null);
            if (count($users) > 0)
                $page_status[$i] = true;
            else
                break;
        }
        $users = get_users('waiting', 'time_created ASC', MAX_USER, ($page - 1 ) * MAX_USER, null, null);    
?>	

<form action="ListUserSaveAction.php" method="post" id="frmMain">
<table width="671" border="1">
  <tr>
    <td width="58">#</td>
    <td width="161">Fullname</td>
    <td width="165">Submition Day</td>
    <td width="259">Action</td>
  </tr>
  <?php
        for ($i = 0; $i < count($users); $i++)
        {
            $submition_day = date("d.m.y",$users[$i]->get('time_created'));
            $html = <<<HEREDOC
    <tr>
    <td width="58">$i</td>
    <td width="161">{$users[$i]->get('firstname')} {$users[$i]->get('lastname')}</td>
    <td width="165">$submition_day</td>
    <td width="259">
        <label>
          <input type="radio" name="$i" value="Approve" id="1_0" />
          Approve</label>
        <label>
          <input type="radio" name="$i" value="Deny" id="1_1" />
          Deny</label>
        <label>
          <input type="radio" name="$i" value="Waiting" id="1_2" checked = "checked"/>
          Waiting</label>
      </p>
     </td>
  </tr>
HEREDOC;
        echo $html;
        }
  ?>
</table>
<p>
  <input type="submit" name="btnSave" id="btnSave" value="Save" />
  <input name="type" type="hidden" id="type" value="waiting" />
  <input name="p" type="hidden" id="p" value="<?php echo $page; ?>" />
</p>

<p>
<?php
    $begin = 0;
    if ($page > 2 || ($page <= 2 && !$page_status[4]))
        $begin = -2;
    for ($i = $begin; $i - $begin < 5; $i++)
    {
        if ($page_status[$i])
        {
            $page_index =  $page + $i;
            if ($page_index > 0)
                echo "<a href='ListUser.php?type=Waiting&p=$page_index'>$page_index</a> ";
        }         
    }
?></p>
</form>


<?php
    }
    elseif ($_GET['type'] == 'Approved')
    	{
        $page = 1;
        if (isset($_GET['p']))
            $page = (int)$_GET['p'];
        start_connection();
        $page_status = array(-2 => true, 
                             -1 => true,
                             0 => false,
                             1 => false,
                             2 => false,
                             3 => false,
                             4 => false);
         
        for ($i = 0; $i < 5; $i++)
        {
            $users = get_users('approve', 'time_created ASC', MAX_USER, ($page + $i - 1 ) * MAX_USER, null, null);
            if (count($users) > 0)
                $page_status[$i] = true;
            else
                break;
        }
        $users = get_users('approve', 'time_created ASC', MAX_USER, ($page - 1 ) * MAX_USER, null, null); 
?>
<form action="ListUserSaveAction.php" method="post" id="frmMain">
<table width="671" border="1">
  <tr>
    <td width="58">#</td>
    <td width="161">Fullname</td>
    <td width="165">Submition Day</td>
    <td width="259">Action</td>
  </tr>
  <?php
        for ($i = 0; $i < count($users); $i++)
        {
            $submition_day = date("d.m.y",$users[$i]->get('time_created'));
            $html = <<<HEREDOC
    <tr>
    <td width="58">$i</td>
    <td width="161">{$users[$i]->get('firstname')} {$users[$i]->get('lastname')}</td>
    <td width="165">$submition_day</td>
    <td width="259">
        <label>
          <input type="radio" name="$i" value="Approve" id="1_0" checked = "checked"/>
          Approve</label>
        <label>
          <input type="radio" name="$i" value="Deny" id="1_1" />
          Deny</label>
      </p>
     </td>
  </tr>
HEREDOC;
        echo $html;
        }
  ?>
</table>
<p>
  <input type="submit" name="btnSave" id="btnSave" value="Save" />
  <input name="type" type="hidden" id="type" value="approve" />
  <input name="p" type="hidden" id="p" value="<?php echo $page; ?>" />
</p>

<p>
<?php
    $begin = 0;
    if ($page > 2 || ($page <= 2 && !$page_status[4]))
        $begin = -2;
    for ($i = $begin; $i - $begin < 5; $i++)
    {
        if ($page_status[$i])
        {
            $page_index =  $page + $i;
            if ($page_index > 0)
                echo "<a href='ListUser.php?type=Approve&p=$page_index'>$page_index</a> ";
        }         
    }
?></p>
</form>
	<?php
		}
        elseif ($_GET['type'] == 'Deny')
        {
        $page = 1;
        if (isset($_GET['p']))
            $page = (int)$_GET['p'];
        start_connection();
        $page_status = array(-2 => true, 
                             -1 => true,
                             0 => false,
                             1 => false,
                             2 => false,
                             3 => false,
                             4 => false);
         
        for ($i = 0; $i < 5; $i++)
        {
            $users = get_users('deny', 'time_created ASC', MAX_USER, ($page + $i - 1 ) * MAX_USER, null, null);
            if (count($users) > 0)
                $page_status[$i] = true;
            else
                break;
        }
        $users = get_users('deny', 'time_created ASC', MAX_USER, ($page - 1 ) * MAX_USER, null, null); 
?>
<form action="ListUserSaveAction.php" method="post" id="frmMain">
<table width="671" border="1">
  <tr>
    <td width="58">#</td>
    <td width="161">Fullname</td>
    <td width="165">Submition Day</td>
    <td width="259">Action</td>
  </tr>
  <?php
        for ($i = 0; $i < count($users); $i++)
        {
            $submition_day = date("d.m.y",$users[$i]->get('time_created'));
            $html = <<<HEREDOC
    <tr>
    <td width="58">$i</td>
    <td width="161">{$users[$i]->get('firstname')} {$users[$i]->get('lastname')}</td>
    <td width="165">$submition_day</td>
    <td width="259">
        <label>
          <input type="radio" name="$i" value="Approve" id="1_0" />
          Approve</label>
        <label>
          <input type="radio" name="$i" value="Deny" id="1_1" checked = "checked"/>
          Deny</label>
      </p>
     </td>
  </tr>
HEREDOC;
        echo $html;
        }
  ?>
</table>
<p>
  <input type="submit" name="btnSave" id="btnSave" value="Save" />
  <input name="type" type="hidden" id="type" value="deny" />
  <input name="p" type="hidden" id="p" value="<?php echo $page; ?>" />
</p>

<p>
<?php
    $begin = 0;
    if ($page > 2 || ($page <= 2 && !$page_status[4]))
        $begin = -2;
    for ($i = $begin; $i - $begin < 5; $i++)
    {
        if ($page_status[$i])
        {
            $page_index =  $page + $i;
            if ($page_index > 0)
                echo "<a href='ListUser.php?type=Deny&p=$page_index'>$page_index</a> ";
        }         
    }
    
}
?></p>
</form>
</body>
</html>