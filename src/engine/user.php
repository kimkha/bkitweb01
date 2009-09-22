<?php
class BKITUser
{
        private $uid;
        private $lastname;
        private $firstname;
        private $birthday ;
        private $sex;
        private $courseyear;
        private $address;
        private $phone;
        private $yahooid;
        private $email;
        private $time_created;
        private $time_updated;
        private $expectation;
        private $hobby;
        private $skills = array();
        private $status;
        function get($attr)
        {
            return $$name;
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
}
?>
