<?php
include_once("engine/start.php");
$eid = @$_GET['eid'];
if ($_GET['act']=="do"){
	$Events = new BKITEvent;
	$Events->set('eid',$eid);
	$Events->delete();
	$htmls="<p align='center'>Bài viết đã được xóa</p>";
	page_draw("Events",$htmls);	
}
else{
$html=<<<EOT
'<form  name="form1" method="post" action="DeleteEvent.php?eid=$eid&act=do">
  <p align="center">Bạn có thực sự muốn xóa bài viết không</p>	
  <p align="center"><input type="submit" name="button" id="button" value="    Có    ">
  <a href="Events.php"><input type="button" name="button" id="button" value=" Không " ></a></p>
</form>'
EOT;
page_draw("Events",$html);
}
