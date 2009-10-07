<?php
    include_once('engine/start.php');
    include_once('views/user.php');
    if ($bkit_user = get_user_login())
    {
		//var_dump($bkit_user);
		$vars = array('object' => $bkit_user, 'viewtype' => 'profile');
        $html = view('user',$vars);
        echo $html;

    }
?>
