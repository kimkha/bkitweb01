<?php
class BKITMail {
	//Variable
	var $from_address;//Email address of composer <string>
	var $from_name;   //Composer's name <string>
	var $to_address;  //Email address of receiver <string>
	var $to_name;     //Receiver's name <string>
	var $mid;         //Mid of template mail in database <int>
	var $template;    //Template of email, has some replacer to insert some value <string>
	var $replacement = array('key'=>'','value'=>''); //Pair of replacer and replacement <array>
	
	
	//Function
	function send(){                        //Sending mail
		$to=$this->to_address;              //Getting receiver's address      
		$subject = "BKITWeb's Announcement";//Getting the Subject of mail
		$message=$this->get_mailcontent();  //Getting the content of mail
		mail($to,$subject,$message);        //Sending mail function
	}
	
	
	//Function load_template($mid); ----Built later----
	//Function save_template();     ----Built later----

	
	function load_template_from_file($template_file){       //Loading template  
		$f=fopen($template_file,"r");                       //Opening email template file in read-only mode
		$this->template = file_get_contents($template_file);//Getting the content of template and putting it into $template variable
		fclose($f);                                         //Closing template file  
	}
	
	
	function save_template_from_file($template_file){       //Saving current template
		$f=fopen($template_file,"w");                       //Opening email template or creating a new one if it does not exist in write mode 
		file_put_contents($template_file,$this->template);  //Putting the content of template into template file
		fclose($f);                                         //Closing template file  
	}
	
	
	function get_mailcontent(){	                               //Getting email's content
		$key=$this->replacement['key'];                        //Getting part(s) of string that is replaced
		$value=$this->replacement['value'];                    //Getting replacecement(s)
		$mailcontent=str_replace($key,$value,$this->template); //Treating the template and giving new string
		return $mailcontent;                                   //Returning mail content 
	}
}

?>