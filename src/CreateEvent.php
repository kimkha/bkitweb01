<?php
////////////////////Create thumbnail image function////////////////////////
function thumb_create($image_type,$src_img,$max_w,$max_h,$thumb_name){
	//Thumb's path
	$path_image='upload/images/'.$thumb_name;
	// Get original size
	list($width, $height) = getimagesize($src_img);
	// Get ratio
	$src_ratio=$max_w/$max_h;
	if (($width/$height)>$src_ratio){
		$ratio=$width/$max_w;
	}
	else {
		$ratio=$height/$max_h;
	}
	//Get new size
	$new_width=$width/$ratio;
	$new_height=$height/$ratio;
	//The value define the right position
	$x_begin=($max_w-$new_width)/2;
	$y_begin=($max_h-$new_height)/2;
	// Resample
	$image_p = imagecreatetruecolor($max_w, $max_h);
	
	//////////////JPG image////////////////
	if ($image_type=="image/jpeg"||$image_type=="image/jpg"){
		$image = imagecreatefromjpeg($src_img);//Greate an image
		imagecopyresampled($image_p, $image, $x_begin, $y_begin, 0, 0, $new_width, $new_height, $width, $height);										//Change the 2 first value
		imagejpeg($image_p,'upload/images/'.$thumb_name,100);//Change thumbnail image location here	
	}
	
	
	/////////////GIF Image//////////////////
	if ($image_type=="image/gif"){
		$image = imagecreatefromgif($src_img);//Greate an image
		imagecopyresampled($image_p, $image, $x_begin, $y_begin, 0, 0, $new_width, $new_height, $width, $height);										//Change the 2 first value
		imagegif($image_p,'upload/images/'.$thumb_name,100);//Change thumbnail image location here	
	}
	
	
//	//////////////PNG image//////////////////Not finished yet
//	if ($image_type=="image/png"){
//		$image = imagecreatefrompng($src_img);//Greate an image
//		imagecopyresampled($image_p, $image, $x_begin, $y_begin, 0, 0, $new_width, $new_height, $width, $height);										//Change the 2 first value
//		imagepng($image_p,'upload/images/'.$thumb_name,100);//Change thumbnail image location here	
//	}
//	
//	/////////////BMP image///////////////////Not finished yet
//	if ($image_type=="image/bmp"){
//		$image = imagecreatefromwbmp($src_img);//Greate an image
//		imagecopyresampled($image_p, $image, $x_begin, $y_begin, 0, 0, $new_width, $new_height, $width, $height);										//Change the 2 first value
//		imagewbmp($image_p,'upload/images/'.$thumb_name,100);//Change thumbnail image location here	
//	}
	return $path_image;
}
////////////////////Create thumbnail image function////////////////////////
include("engine/lib.php");
include("engine/db.php");
include("engine/event.php");
include("engine/user.php");
get_connection_config();
start_connection();

if (@$_GET['act']== "do"){
			
	$Event = new BKITEvent;
 	if ($_FILES["image"]["error"] > 0){
   		echo "<script language='javascript'>alert('Image upload fall');</script>";
 	}
 	else{
 		if (file_exists("image/" . $_FILES["image"]["name"])){
   			echo "<script language='javascript'>alert('Image already exist');</script>";
   		}
    	else{
			$img_link="upload/images/".$_FILES["image"]["name"];
			$thumb_link=thumb_create($_FILES["image"]["type"],$_FILES["image"]["tmp_name"],200,150,$_FILES["image"]["name"]);    		
    	}
	}
	$Event->set("name",$_POST['name']);
	$Event->set("title",$_POST['title']);
	$Event->set("headline",$_POST['headline']);
	$Event->set("content",$_POST['content']);
	$Event->set("image",$thumb_link);
	$Event->save();
			
}
else
{
	?>
	<html>
	<head>
    
	<script type="text/javascript" src="jscripts/tiny_mce/tiny_mce.js"></script>
	
	<!-- Form validate -->
    <script type="text/javascript">
	function validate(){
	var name=document.getElementById("name").value;
	var title=document.getElementById("title").value;
	var image=document.getElementById("image").value;
	var headline=document.getElementById("headline").value;
	var content=document.getElementById("content").value;
	var submitOK="true";
	if (name==null||name==""){
		alert("Please enter your name!");
		submitOK="false";
	}
	if (title==null||title==""){
		alert("Please enter your title!");
		submitOK="false";
	}
	if (image==null||image==""){
		alert("Please enter your image!");
		submitOK="false";
	}	
	if (headline==null||headline==""){
		alert("Please enter your headline!");
		submitOK="false";
	}

	if (content==null||content==""){
		alert("Please enter your content!");
		submitOK="false";
	}
	if (submitOK=="false"){
		return false;
		}
	}
	</script>
	<!-- TinyMCE Editor -->
    <script type="text/javascript">
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
		theme_advanced_resizing : true,

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
	</script>  
      
    <!-- TinyMCE Editor -->
	</head>
	<body>
    <div class="CreateEvent">
    <form action="CreateEvent.php?act=do" method="post" enctype="multipart/form-data" name="CreateEvent" id="CreateEvent" onSubmit="return validate()">
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
              <textarea name="content" id"content" cols="45" rows="5"></textarea>
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
	</body>
	</html>
	<!-- HTML code -->
	<?php 		
}
	