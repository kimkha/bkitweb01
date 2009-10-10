<?php
    include_once('engine/start.php');
    //var_dump($_POST);
    $max_user = (int)$_POST['MAX_USER'];
    if ($_POST['type'] == 'Waiting')
    {
        for ($i = 0 ; $i < $max_user; $i++)
        {
            $bkit_user = null;
            if (isset($_POST["$i"]) && $_POST["$i"] != 'Waiting')
            {
                $bkit_user = get_user((int)$_POST["hidUserID$i"]);
                if (!is_null($bkit_user))
                {
                    $bkit_user->set('status', strtolower($_POST["$i"]));
                    $bkit_user->save();
                }
            }
            
            if (isset($_POST["chkEvent$i"]))
            {
                $event_id = $_POST["eventID"];
                if (!is_null($bkit_user))
                     $bkit_user = get_user((int)$_POST["hidUserID$i"]);
                
                if (!is_bool($bkit_user))
                {
                    db_query("INSERT INTO user_event VALUES ({$bkit_user->get(uid)}, $event_id)");
                }
                
            }
        }
            
    }
    else if ($_POST['type'] == 'Approved')
    {
         for ($i = 0 ; $i < $max_user; $i++)
         {
            $bkit_user = null;
            if (isset($_POST["$i"]) && $_POST["$i"] != 'Approve')
            {
                $bkit_user = get_user((int)$_POST["hidUserID$i"]);
                if (!is_null($bkit_user))
                {
                    $bkit_user->set('status', strtolower($_POST["$i"]));
                    $bkit_user->save();
                }
            }
        }
    }
    else if ($_POST['type'] == 'Deny')
    {
         for ($i = 0 ; $i < $max_user; $i++)
         {
            $bkit_user = null;
            if (isset($_POST["$i"]) && $_POST["$i"] != 'Deny')
            {
                $bkit_user = get_user((int)$_POST["hidUserID$i"]);
                if (!is_null($bkit_user))
                {
                    $bkit_user->set('status', strtolower($_POST["$i"]));
                    $bkit_user->save();
                }
            }
        }
    }
?>
