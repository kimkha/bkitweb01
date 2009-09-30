<?php
include_once('db.php');
//include_once('start.php');
error_reporting(0);
class BKITUserSkill
{
    public $key;
    public $value = array('skillname' => 'd', 'level' => 0, 'skillcategory' => 'd');
}
class BKITUser
{
        private $uid;
        private $lastname = '';
        private $firstname = '';
        private $birthday = '' ;
        private $sex = '';
        private $courseyear = '';
        private $address = '';
        private $phone = '';
        private $yahooid = '';
        private $email = '';
        private $time_created = '';
        private $time_updated = '';
        private $expectation = '';
        private $hobby = '';
        private $skills = array();
        private $status = 'waitting';
        function get($attr)
        {  
            return $this->$attr;
        }
        function set($attr, $value)
        {
            $this->$attr = $value;      
        }
        function approve()
        {
             if ($this->status != 'deny')
                $this->status = 'approve';
             //send a email to victim, don't finished.   
                
        } 
        function deny()
        {
             if ($this->status == 'waiting')
                $this->status = 'deny';
             //send a email to victim, don't finished.         
        } 
        function save()
        {
            include_once('db.php');
            //Check whether user is exist in database
            $self = get_data("SELECT * FROM profile WHERE uid = ".var_export($this->uid, true),'user');  
            
            $query = '';   //query string
            $result;       //query result
            global $DB;
            if (count($self) == 0) //if do not exist in database
            {
                $query = "INSERT INTO profile VALUES ("    . var_export($this->uid, true) . ", "
                                                           . var_export($this->firstname, true) . ", "
                                                           . var_export($this->lastname, true) . ", "
                                                           . var_export($this->birthday, true) . ", "
                                                           . var_export($this->sex, true) . ", "
                                                           . var_export($this->courseyear, true) . ", "
                                                           . var_export($this->address, true) . ", "
                                                           . var_export($this->phone, true) . ", "
                                                           . var_export($this->yahooid, true) . ", "
                                                           . var_export($this->email, true) . ", "
                                                           . var_export($this->expectation, true) . ", "
                                                           . var_export($this->hobby, true) . ", "
                                                           . var_export($this->status, true) . ", "
                                                           . var_export($this->time_created, true) . ", "
                                                           . var_export($this->time_updated, true) . "); ";
               foreach ($this->skills as $key => $value)
               {
                    $query = $query."INSERT INTO user_skill VALUES (" .   var_export($this->uid, true) . ", " 
                                                                       .   var_export($value->key, true) . ", "     
                                                                       .   var_export($value->value['level'], true) . ");";
                    $result = $result & db_query($query);
               } 
                 
               if ($result)
               {
                   return mysql_insert_id($DB['resource']);
               }                                                                                       
            }
            else
            {
                $query = "UPDATE profile SET " ."uid = "           . var_export((int)$this->uid, true) . ", "
                                                ."firstname = "     . var_export($this->firstname, true) . ", "
                                                ."lastname = "      . var_export($this->lastname, true) . ", "
                                                ."birthday = "      . var_export($this->birthday, true) . ", "
                                                ."sex = "           . var_export($this->sex, true) . ", "
                                                ."courseyear = "    . var_export($this->courseyear, true) . ", "
                                                ."address = "       . var_export($this->address, true) . ", "
                                                ."phone = "         . var_export($this->phone, true) . ", "
                                                ."yahooid = "       . var_export($this->yahooid, true) . ", "
                                                ."email = "         . var_export($this->email, true) . ", "
                                                ."expectation = "   . var_export($this->expectation, true) . ", "
                                                ."hobby = "         . var_export($this->hobby, true) . ", "
                                                ."status = "        . var_export($this->status, true) . ", "
                                                ."time_created = "  . var_export($this->time_created, true) . ", "
                                                ."time_updated = "  . var_export($this->time_updated, true)
                                                ." WHERE uid = " . var_export((int)$this->uid, true) . ";";
                $result = db_query($query);
                foreach ($this->skills as $key => $value)
               {
                    $query = "UPDATE user_skill SET uid = "    .   var_export((int)$this->uid, true) . ", " 
                                                        ."sid = "      .   var_export($value->key, true) . ", "     
                                                        ."level ="     .   var_export($value->value['level'], true)
                                                        ." WHERE uid = " .   var_export((int)$this->uid, true) . " AND " 
                                                        ."sid = "       .   var_export($value->key, true). ";"; 
                   $result = $result & db_query($query);                                          
               }
                if ($result) 
                {
                    return $this->uid;
                }  
            }
        return FALSE;    
        }
        function delete()
        {
            include_once('db.php');
            $query = "DELETE FROM profile WHERE uid = ".var_export($this->uid, true);
            $result = db_query($query);
            
            $query = "DELETE FROM user_skill WHERE uid = ".var_export($this->uid, true);
            $result = db_query($query);
            if ($result)
                return $this->uid;
            else return FALSE;
        }
}
    
    
    
    
    function get_user($by_user_id)
    {
        $query = "SELECT * FROM profile WHERE uid = $by_user_id";
        $result = get_data($query,'user');
        return $result; 
    }
    function get_users($status = 'all', $order_by = 'time_created ASC', $limit = 10, $offset = 0, $min_time_created = 0, $max_time_created = 0)
    {
        $query = "SELECT * FROM profile WHERE 1 ";
        
        //
        if ($status != 'all')
            $query = $query."AND status = '".mysql_real_escape_string($status)."'";
        
        if ($min_time_created != 0 && is_int($min_time_created) )
            $query = $query." AND time_created >= $min_time_created ";
            
        if ($max_time_created != 0 && is_int($max_time_created) )
            $query = $query."AND time_created <= $max_time_created ";
            
        $query = $query."ORDER BY ".mysql_real_escape_string($order_by);
        
        if (is_int($limit) && is_int($offset))
            $query = $query." LIMIT $offset, $limit ";
        $result = get_data($query,'user');
        
        
    }
    function __user__is_valid_email($email)
    {
        $eregs = array();
        $result = ereg("^[a-zA-Z0-9._-]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+", $email, $eregs);
        $is_email = (strlen($eregs[0]) > 0) ? TRUE:FALSE;
        return $is_email;
    }
    function __user__is_valid_md5_password($password)
    {
        $eregs = array();
        $result = ereg("^[a-z0-9]{32}", $password, $eregs);
        $is_md5_password = (strlen($eregs[0]) > 0) ? TRUE:FALSE;
        return $is_md5_password;
    }
    function is_admin_login()
    {
        
        $is_email = __user__is_valid_email($_COOKIE['user_email']);
        $is_md5_password = __user__is_valid_md5_password($_COOKIE['user_password']);
        
        if (!$is_email || !$is_md5_password) 
            return FALSE;
        
        $user = get_data("SELECT * FROM profile WHERE email = '".$_COOKIE['user_email']."'",'user');
        if (count($user) == 0)
        {
            trigger_error('This email do not exist in database', E_WARNING);
            return FALSE; 
        }
        
        
        //check pass
        $user_pass_db = db_query("SELECT * FROM user WHERE uid = ".$user[0]->get('uid'));
        $user_info = mysql_fetch_assoc($user_pass_db);
        if ($user_info['password'] != $_COOKIE['user_password'])
        {
            trigger_error('Wrong password', E_WARNING);
            return FALSE;
        }
        
        $is_admin = $user_info['role'] == 'admin' ? TRUE:FALSE;
        return $is_admin;
    } 
    function get_user_login()
    {
        $is_email = __user__is_valid_email($_COOKIE['user_email']);
        $is_md5_password = __user__is_valid_md5_password($_COOKIE['user_password']);
       
        if (!$is_email || !$is_md5_password) 
            return FALSE;
            
        
        //get user info from database
        $user = get_data("SELECT * FROM profile WHERE email = '".$_COOKIE['user_email']."'",'user');
        if (count($user) == 0)
            return FALSE; 
        
        
        //check pass
        $user_pass_db = db_query("SELECT password FROM user WHERE uid = ".$user[0]->get('uid'));
        $user_pass = mysql_fetch_assoc($user_pass_db);
        if ($user_pass['password'] != $_COOKIE['user_password'])
            return FALSE;
        
        //if everything is oke, return BKITUser object
        return $user[0];    
    }
    function is_user_login()
    {
        $is_email = __user__is_valid_email($_COOKIE['user_email']);    
        $is_md5_password = __user__is_valid_md5_password($_COOKIE['user_password']);
        
        
        if (!$is_email || !$is_md5_password) 
            return FALSE;
             
        //get user info from database
        $user = get_data("SELECT * FROM profile WHERE email = '".$_COOKIE['user_email']."'",'user');
        if (count($user) == 0)
            return FALSE; 
        
        
        //check pass
        $user_pass_db = db_query("SELECT password FROM user WHERE uid = ".$user[0]->get('uid'));
        $user_pass = mysql_fetch_assoc($user_pass_db);
        if ($user_pass['password'] != $_COOKIE['user_password'])
            return FALSE;
        
        //if everything is oke, return true
        return TRUE;     
    }
    function login($email,$password)
    {
        $is_email = __user__is_valid_email($email);
        
        if (!$is_email)
        {
            trigger_error('Invalid Email.', E_WARNING);
            return FALSE;
        }
        
        $is_md5_password =  __user__is_valid_md5_password($password);
        if (!$is_md5_password)
        {
            trigger_error('Invalid Password.', E_WARNING);
            return FALSE;
        }
        
        //get user info from database
        $user = get_data("SELECT * FROM profile WHERE email = '$email'",'user');
        if (count($user) == 0)
        {
            trigger_error('This email do not exist in database', E_WARNING);
            return FALSE; 
        }
        
        
        //check pass
        $user_pass_db = db_query("SELECT password FROM user WHERE uid = ".$user[0]->get('uid'));
        $user_pass = mysql_fetch_assoc($user_pass_db);
        if ($user_pass['password'] != $password)
        {
            trigger_error('Wrong password', E_WARNING);
            return FALSE;
        }
        
        //save login info to cookie
        setcookie('user_email',$email, time() + 60 * 60 * 24 * 7, '/');
        setcookie('user_password', $password, time() + 60 * 60 * 24 * 7, '/');
        
        //add login user to $CONFIG
        global $CONFIG;
        array_push($CONFIG['user'], $user[0]);
        
        return $user;
    } 
    function logout()
    {
        if (is_user_login())
        {    
            //remove from $CONFIG
            global $CONFIG; 
            foreach ($CONFIG['user'] as $key => $value)
            {
                $bkit_user = get_user_login();
                
                if ($bkit_user->get('uid') == $value->get('uid'))
                    unset($CONFIG['user'][$key]);
            }
            
            //clear cookie
            setcookie('user_email');
            setcookie('user_password');
        }
    }
    start_connection();
    $t = get_user(2);
    $a = new BKITUser();
    $a->set('uid',1);
    $a->delete();
    $t1 = new BKITUserSkill();
    $t1->key = 9;
    $t1->value['level'] = 1;
    
    $t2 = new BKITUserSkill(); 
    $t2->key = 10;
    $t2->value['level'] = 2;
    $as =  $t[0]->get('skills');
    array_push($as, $t1);
    array_push($as, $t2);
    $t[0]->set('skills', $as);
    $t[0]->save();
    //login('kyo.cooro@gmail.com','8768f1ff177d8341bcc40a7210af50e9');
//    $result = get_; //'kyo.cooro@gmail.com','8768f1ff177d8341bcc40a7210af50e9');
//    logout();
   // $result = get_user_login();
?>
