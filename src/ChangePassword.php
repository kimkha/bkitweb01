<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
    include_once('engine/start.php');
    if (isset($_POST['btnChange']))
    {
        start_connection();
        if ($user = get_user_login())
        {
            
            if (!is_bool($user))
            {
                $query_result = db_query('SELECT * FROM user WHERE uid = '.$user->get('uid'));
                if (mysql_num_rows($query_result) > 0)
                {
                    $row = mysql_fetch_assoc($query_result);
                    if (md5($_POST['txtOldPass']) == $row['password'])
                    {
                        $result = db_query("UPDATE user SET password = '".md5($_POST['txtNewPass'])."' WHERE uid = {$user->get('uid')}");
                        if (!result) 
                            echo "Không thể đổi pass. Thử lại sau.";    
                    }
                }
            }
        }
        
    }
    else
    {
?>
<form id="form1" name="form1" method="post" action="ChangePassword.php">
  <p>
    <label>Mật khẩu cũ
      <input type="password" name="txtOldPass" id="txtOldPass" tabindex="1"/>
    </label>
  </p>
  <p>
    <label>Mật khẩu mới
      <input type="password" name="txtNewPass" id="txtNewPass" tabindex="2"/>
    </label>
  </p>
  <p>
    <label>Nhập lại mật khẩu mới
      <input type="password" name="txtVerifyPass" id="txtVerifyPass" tabindex="3"/>
    </label>
  </p>
  <p>
    <label>
      <input type="submit" name="btnChange" id="btnChange" value="Change" tabindex="4" />
    </label>
  </p>
</form>
<?php
    }
?>
</body>
</html>