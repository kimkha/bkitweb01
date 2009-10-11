<?php
    include_once('engine/start.php');
    $user_id = (int)$_GET['user'];
    $bkit_user = get_user($user_id);
    if (isset($_POST['btnSave']))
    {
        $bkit_user->set('hobby',$_POST['txtHobby']);
        $bkit_user->set('firstname',$_POST['txtName']);
        $bkit_user->set('birthday',strtotime($_POST['txtBirthday']));
        $bkit_user->set('expectation',$_POST['txtExpectation']);
        $bkit_user->set('sex',$_POST['radSex']);
        $bkit_user->set('courseyear',$_POST['lstCourse']);
        $bkit_user->set('address',$_POST['txtAddress']);
        $bkit_user->set('phone',$_POST['txtPhone']);
        $bkit_user->set('yahooid',$_POST['txtYahoo']);
        $bkit_user->set('email',$_POST['txtEmail']);
        $skills_name = array("PhotoshopSkill", "HTMLSkill", "JVScriptSkill", "FlashSkill", "PHPSkill", "ASPSkill", "JSPSkill"
                                    , "GAESkill", "MySQLSkill", "MSSQLSkill");
        $skills_array = array();
        for ($i = 0;  $i < 10; $i++)
        {
            $skill = new BKITUserSkill();
            $skill->key = $i;
            $skill->value['level'] = (int)$_POST[$skills_name[$i]];
            $skill->value['skillname'] = (int)$_POST[$skills_name[$i]];
            array_push($skills_array,$skill);
        }
        
        $bkit_user->set('skills',$skills_array); 
        if (is_int($bkit_user->save()))
            echo 'Save succesfull';
    } else if (isset($_POST['btnDelete']))
    {
        $result = db_query("DELETE FROM profile WHERE uid = {$bkit_user->get('uid')}");
        if ($result != false)
            echo 'Delete succesfull';
    }
    else 
    {
        $vars = array('object' => $bkit_user, 'viewtype' => 'DISPLAYPROFILEINFOR');
        $html = view('user', $vars);
        echo $html;
    }
    
?>