<?php
include_once("Vu/_vu_thumb.php");
include_once("engine/start.php");
$admin=@is_admin_login();
//if (!isset($admin) || $admin==false){
//	$note="<div align='center'><b>Bạn chưa đăng nhập hoặc không đủ quyền hạn để vào trang này</b></div>";
//	page_draw('Edit Event',$note);
//}
//else{
	$eid = @$_GET['eid'];
	//$eid = 8;
	
	$old_Event=get_data("SELECT name,title,headline,content,image FROM event WHERE eid='{$eid}'","event" );
	foreach($old_Event as $value){
		$old_name =$value->get('name');
		$old_title =$value->get('title');
		$old_headline =$value->get('headline');
		$old_content =$value->get('content');
		$old_image =$value->get('image');
		
	} 
	if (@$_GET['act']== "do"){			
		$Event = new BKITEvent;
	 	if ($_FILES["imageedit"]["error"] > 0){
	   		$thumb_link=$old_image;
	 	}
	 	else{
				$img_link="upload/images/".$_FILES["imageedit"]["name"];
				$thumb_link=thumb_create($_FILES["imageedit"]["type"],$_FILES["imageedit"]["tmp_name"],150,150,$_FILES["imageedit"]["name"]);    		
		}
		$Event->set("eid",$eid);
		$Event->set("name",$_POST['name']);
		$Event->set("title",$_POST['title']);
		$Event->set("headline",$_POST['headline']);
		$Event->set("content",$_POST['contentf']);
		$Event->set("image_name",$thumb_link);
		$Event->save();	
		$success="<p align='center'>Thay đổi đã được cập nhật</p>";
		page_draw("Edit Event",$success);		
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
	    <form action="EditEvent.php?eid=$eid&act=do" method="post" enctype="multipart/form-data" name="EditEvent" id="CreateEvent">
	      <table width="323" height="92" >
	        <tr>
	          <td width="49" height="23">Name</td>
	          <td width="258"><input type="text" name="name" id="name" value="$old_name"></td>
	        </tr>
	        <tr>
	          <td height="27">Title</td>
	          <td><input type="text" name="title" id="title" value="$old_title"></td>
	        </tr>
	        <tr>
	          <td height="50">Image</td>
	          <td>
	          		<p><img src="upload/images/$old_image" width="200" height="150" /></p>
	          		<p><input type="file" name="imageedit" id="imageedit" value="fgsdfgsdfgdfg"> Chọn ảnh mới</p>
	          </td>
	        </tr>
	      </table>
	      <table width="323" height="92">
	        <tr>
	          <td><p>Headline</p>
	          <textarea name="headline" id="headline" cols="45" rows="5" >$old_headline</textarea>
	          </td>
	          
	        </tr>
	        <tr>
	          <td><p>Content</p>          
	            <p>
	              <textarea name="contentf" id="contentf" cols="45" rows="5" >$old_content</textarea>
	            </p>
	            <p>
	              <input type="submit" name="submit" value="Submit">
	              <input type="reset" name="reset" value="Reset">
	            </p></td>
	        </tr>
	      </table>
	      </form>
	      <p>&nbsp;</p>
	    </div>
	    <script language="JavaScript" type="text/javascript">
	    	var frmvalidator = new Validator("EditEvent");
	    	frmvalidator.addValidation("name","req","Please enter your Name");
	    	frmvalidator.addValidation("title","req","Please enter your title");
	    	frmvalidator.addValidation("image","req","Please enter your image");
	  	    frmvalidator.addValidation("headline","req","Please enter your headline");
	  	    frmvalidator.addValidation("contentf","req","Please enter your Content");	    	
	    </script>
EOT;
		page_draw('Edit Event',$form);  		
	}
//}
	