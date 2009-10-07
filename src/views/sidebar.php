<?php
	$levelUser = $vars['viewtype'];
	$user = $vars['object'];
	if($levelUser == 0){
		$html = <<<EOT
	<ul>				
		<li><a href="index.php">Home</a></li>
		<li><a href="Event.php">Event</a></li>
		<li><a href="Register.php">Register</a></li>
	</ul>
	    <form id="form1" method="post" action="Login.php">
		<b>Đăng nhập</b>
	  <p>Email:</p>
	      <input name="email" type="text" id="email" style="width:135px;" />
	  <p>Password:</p>
	      <p>
	      <input name="password" type="password" id="password" style="width:135px;" />
</p>
	      <p>
	        <input type="checkbox" name="repassword" id="repassword" />
	        Remember me
	      </p>
	      <p><a href="ForgetPassword.php">Bạn quên mật khẩu?</a></p>
	      <input type="submit" name="btnLogin" id="btnLogin" value="Login" />
	  </form>
EOT;

	}
	else {
		$html = <<<EOT
	<ul>				
		<li><a href="index.php">Home</a></li>
		<li><a href="Event.php">Event</a></li>
		<li><a href="Profile.php">Profile</a></li>
		<li><a href="ChangePassword.php">Change Password</a></li>
		<li>$user <a href="Logout.php">(Logout)</a></li>
	</ul>
EOT;
		if($levelUser == 777){
			$html .=<<<EOT
	<fieldset>
	  <legend>Manage Event</legend>
	  <p><a href="ListEvent.php">List Event</a></p>
	  <p><a href="CreateEvent.php">Create Event</a></p>
	</fieldset>
	<fieldset>
	  <legend>Manage User</legend>
	  <p><a href="ListUser.php?type=waiting">Waiting List</a></p>
	  <p><a href="ListUser.php?type=approve">Approve List</a></p>
	  <p><a href="ListUser.php?type=deny">Deny List</a></p>
	</fieldset>
EOT;

		}

	}
	return $html;
?>