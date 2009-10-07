<?php
	if(is_user_login() == FALSE){
		$html = <<<EOT
	<ul>				
		<li><a href="index.php">Home</a></li>
		<li><a href="Event.php">Event</a></li>
		<li><a href="Register.php">Register</a></li>
	</ul>
	<fieldset>
	  <legend>Login</legend>
	    <form id="form1" method="post" action="Login.php">
	  <p>Email:</p>
	      <input type="text" name="email" id="email" />
	  <p>Password:</p>
	      <p>
	      <input type="password" name="password" id="password" />
	      </p>
	      <p>
	        <input type="checkbox" name="repassword" id="repassword" />
	        Remember me
	      </p>
	      <p><a href="ForgetPassword.php">B?n quên m?t kh?u?</a></p>
	      <input type="submit" name="btnLogin" id="btnLogin" value="Login" />
	  </form>
	</fieldset>
EOT;

	}
	else {
		$user = get_user_login();
		$html = <<<EOT
	<ul>				
		<li><a href="index.php">Home</a></li>
		<li><a href="Event.php">Event</a></li>
		<li><a href="Profile.php">Profile</a></li>
		<li><a href="ChangePassword.php">Change Password</a></li>
		<li>$user <a href="Logout.php">(Logout)</a></li>
	</ul>
EOT;
		if(is_admin_login() == TRUE){
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