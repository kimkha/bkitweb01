<?php
////////////////////Create thumbnail image function////////////////////////
include_once("Vu/_vu_thumb.php");
include_once("engine/start.php");
$user=@is_user_login();
echo "</br>";
//if (!isset($user) || $user==false){
//	$note='<p align="center">Chỉ có thành viên mới được viết bài</p>
//		   <p align="center">Vui lòng <a href="#">đăng nhập</a> hoặc <a href="#">đăng ký</a></p>';
//	page_draw('Create Event',$note);
//}
//else{
if (@$_GET['act']== "do"){
			
	$Event = new BKITEvent;
 	if ($_FILES["image"]["error"] > 0){
   		echo "Image Upload error";
 	}
 	else{			
		$img_link="upload/images/".$_FILES["image"]["name"];
		$thumb_link=thumb_create($_FILES["image"]["type"],$_FILES["image"]["tmp_name"],150,150,$_FILES["image"]["name"]);    		   	
	}
	$Event->set("name",$_POST['name']);
	$Event->set("title",$_POST['title']);
	$Event->set("headline",$_POST['headline']);
	$Event->set("content",$_POST['content']);
	$Event->set("image_name",$thumb_link);
	$Event->save();
	$success="<p align='center'>Bài viết đã được gữi đi</p>";
	page_draw("Create Event",$success);	
			
}
else
{
	
	
    $JS1='<script type="text/javascript" src="gen_validatorv31.js"></script>';
   	$JS2='<script type="text/javascript" src="jscripts/tiny_mce/tiny_mce.js"></script>';
    $JS3='<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount",

		// Theme options
		theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "bullist,numlist,|,undo,redo,|,link,unlink,image,|,forecolor,backcolor",
		theme_advanced_buttons3 : "",
		theme_advanced_buttons4 : "",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : false,

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
	</script>';
	extend('metatags',$JS1);
	extend('metatags',$JS2);
	extend('metatags',$JS3);
    
	$form=<<<EOT
    <div class="CreateEvent">
    <form action="CreateEvent.php?act=do" method="post" enctype="multipart/form-data" name="CreateEvent" id="CreateEvent" >
      <table width="323" height="92" >
        <tr>
          <td width="49" height="23">Name</td>
          <td width="258"><input type="text" name="name" id="name"></td>
        </tr>
        <tr>
          <td height="27">Title</td>
          <td><input type="text" name="title" id="title"></td>
        </tr>
        <tr>
          <td height="29">Image</td>
          <td><input type="file" name="image" id="image"></td>
        </tr>
      </table>
      <table width="323" height="92">
        <tr>
          <td><p>Headline</p>
          <textarea name="headline" id="headline" cols="45" rows="5"></textarea>
          </td>
          
        </tr>
        <tr>
          <td><p>Content</p>          
            <p>
              <textarea name="contentf" id="contentf" cols="45" rows="5"></textarea>
            </p>
            <p>
              <input type="submit" name="submit" value="Submit">
              <input type="reset" name="reset" value="Reset">
            </p></td>
        </tr>
      </table>
      </form>
    </div>
	    <script language="JavaScript" type="text/javascript">
	    	var frmvalidator = new Validator("CreateEvent");
	    	frmvalidator.addValidation("name","req","Please enter your Name");
	    	frmvalidator.addValidation("title","req","Please enter your title");
	    	frmvalidator.addValidation("image","req","Please enter your image");
	  	    frmvalidator.addValidation("headline","req","Please enter your headline");
	  	    frmvalidator.addValidation("contentf","req","Please enter your Content");	    	
	    </script>
EOT;
	page_draw('Create Event',$form); 		
}
//}
	