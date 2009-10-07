<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
    include('engine/start.php');
    if (isset($_POST['btnRecovery']))
    {
        start_connection();
        $user = get_data("SELECT * FROM profile WHERE email = '".mysql_escape_string($_POST['txtEmail'])."'", 'user');
        if (count($user) > 0)
            {
                //send mail, don finish
                echo "Check mail di";
            }
        else 
            echo "Email chưa được đăng kí";
        close_connection();
    }
    else
    {
?>
<form id="form1" name="form1" method="post" action="ForgetPassword.php">
  <label>Email
    <input type="text" name="txtEmail" id="txtEmail" />
  </label>

<input type="submit" name="btnRecovery" id="btnRecovery" value="Recovery" />
</form>
<?php
    }
?>
</body>
</html>