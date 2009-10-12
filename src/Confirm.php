<?php
    include('engine/start.php');
    if (isset($_POST['btnSubmit']))
    {
        $user_info = new BKITUser();
        $user_info->set('hobby',$_POST['txtHobby']);
        $user_info->set('firstname',$_POST['txtName']);
       	$user_info->set('birthday',strtotime($_POST['txtBirthday']));
        $user_info->set('expectation',$_POST['txtExpectation']);
		$user_info->set('sex',$_POST['radSex']);
		$user_info->set('courseyear',$_POST['lstCourse']);
		$user_info->set('address',$_POST['txtAddress']);
		$user_info->set('phone',$_POST['txtPhone']);
		$user_info->set('yahooid',$_POST['txtYahoo']);
		$user_info->set('email',$_POST['txtEmail']);
		$skills_name = array("PhotoshopSkill", "HTMLSkill", "JVScriptSkill", "FlashSkill", "PHPSkill", "ASPSkill", "JSPSkill"
                                    , "GAESkill", "MySQLSkill", "MSSQLSkill");
        $skills_array = array();
        for ($i = 0;  $i < 10; $i++)
        {
            $skill = new BKITUserSkill();
            $skill->key = $i + 1;
            $skill->value['level'] = (int)$_POST[$skills_name[$i]];
            $skill->value['skillname'] = (int)$_POST[$skills_name[$i]];
            array_push($skills_array,$skill);
        }
        
        $user_info->set('skills',$skills_array);
        
        if ($_POST['btnSubmit'] == 'Register')
        {
        $vars = array('object' => $user_info, 'viewtype' => 'CONFIRM');
        $html = view('user',$vars);
        }
        else 
        {
            start_connection();
            $user_info->save();
            echo mysql_error();
            //var_dump($_POST);
            //var_dump($user_info);
        }
        page_draw('Homepage', $html);
    }
?>

