<?php
	// Truyền vào các biến $extend, $users[10], $page

                             
	if($status == 'Waiting' ){
				
		$html = <<<EOT
<form action="ListUserSaveAction.php" method="post" id="frmMain">
<table width="671" border="1">
  <tr>
    <td width="58">#</td>
    <td width="161">Fullname</td>
    <td width="165">Submition Day</td>
    <td width="259">Action</td>
  </tr> 
EOT;

		// Begin: Các dòng dữ liệu user
        for ($i = 0; $i < count($users); $i++){
            $submition_day = date("d.m.y",$users[$i]->get('time_created'));
            
            $html .=<<<EOT
    <tr>
    <td width="58">$i</td>
    <td width="161">{$users[$i]->get('firstname')} {$users[$i]->get('lastname')}</td>
    <td width="165">$submition_day</td>
    <td width="259">
	 		<label>
	          <input type="radio" name="$i" value="Approve" id="1_0" />
	          Approve</label>
	        <label>
	          <input type="radio" name="$i" value="Deny" id="1_1" />
	          Deny</label>
	        <label>
	          <input type="radio" name="$i" value="Waiting" id="1_2" checked = "checked"/>
	          Waiting</label>
      </p>
     </td>
  </tr>
EOT;
            }
		// End
		$html .= <<<EOT
</table>
<p>
  <input type="submit" name="btnSave" id="btnSave" value="Save" />
  <input name="type" type="hidden" id="type" value="waiting" />
  <input name="p" type="hidden" id="p" value="<?php echo $page; ?>" />
</p>

<p>
$pageview
</p>
</form>
EOT;
       
	}
	else if($status == 'Approved'){
				
		$html = <<<EOT
<form action="ListUserSaveAction.php" method="post" id="frmMain">
<table width="671" border="1">
  <tr>
    <td width="58">#</td>
    <td width="161">Fullname</td>
    <td width="165">Submition Day</td>
    <td width="259">Action</td>
  </tr> 
EOT;

		// Begin: Các dòng dữ liệu user
        for ($i = 0; $i < count($users); $i++){
            $submition_day = date("d.m.y",$users[$i]->get('time_created'));
            
            $html .=<<<EOT
    <tr>
    <td width="58">$i</td>
    <td width="161">{$users[$i]->get('firstname')} {$users[$i]->get('lastname')}</td>
    <td width="165">$submition_day</td>
    <td width="259">
        <label>
          <input type="radio" name="$i" value="Approve" id="1_0" checked = "checked"/>
          Approve</label>
        <label>
          <input type="radio" name="$i" value="Deny" id="1_1" />
          Deny</label>
      </p>
     </td>
  </tr>
EOT;
            }
		// End
		$html .= <<<EOT
</table>
<p>
  <input type="submit" name="btnSave" id="btnSave" value="Save" />
  <input name="type" type="hidden" id="type" value="Approved" />
  <input name="p" type="hidden" id="p" value="<?php echo $page; ?>" />
</p>

<p>
$pageview
</p>
</form>
EOT;
       
	}
	else if($status == 'Deny'){
				
		$html = <<<EOT
<form action="ListUserSaveAction.php" method="post" id="frmMain">
<table width="671" border="1">
  <tr>
    <td width="58">#</td>
    <td width="161">Fullname</td>
    <td width="165">Submition Day</td>
    <td width="259">Action</td>
  </tr> 
EOT;

		// Begin: Các dòng dữ liệu user
        for ($i = 0; $i < count($users); $i++){
            $submition_day = date("d.m.y",$users[$i]->get('time_created'));
            
            $html .=<<<EOT
    <tr>
    <td width="58">$i</td>
    <td width="161">{$users[$i]->get('firstname')} {$users[$i]->get('lastname')}</td>
    <td width="165">$submition_day</td>
    <td width="259">
        <label>
          <input type="radio" name="$i" value="Approve" id="1_0"/>
          Approve</label>
        <label>
          <input type="radio" name="$i" value="Deny" id="1_1"  checked = "checked" />
          Deny</label>
      </p>
     </td>
  </tr>
EOT;
            }
		// End
		$html .= <<<EOT
</table>
<p>
  <input type="submit" name="btnSave" id="btnSave" value="Save" />
  <input name="type" type="hidden" id="type" value="Deny" />
  <input name="p" type="hidden" id="p" value="<?php echo $page; ?>" />
</p>

<p>
$pageview
</p>
</form>
EOT;
      		
	}

	return $html;
?>