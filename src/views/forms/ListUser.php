<?php
	// Truyền vào các biến $extend, $users[10], include("ListUser.php");
    
                             
	if($status == 'Waiting' ){
				
		$html = <<<EOT
<form action="ListUserSaveAction.php" method="post" id="frmMain">
<table width="671" border="1">
  <tr>
    <td width="58">#</td>
    <td width="161">Fullname</td>
    <td width="165">Submition Day</td>
    <td width="259">Action</td>
    <td width="259">{$users[count($users) - 1]->get('name')}</td>
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
            <input name="hidUserID$i" type="hidden" id="hidUserID1" value="{$users[$i]->get('uid')}">
      </p>
     </td>
     <td width="259"><input type="checkbox" name="chkEvent$i" id="checkbox"></td>
  </tr>
EOT;
            }
		// End
        $prev_page = $page - 1;
        $next_page = $page + 1;
		$html .= <<<EOT
</table>
<p>
  <input type="submit" name="btnSave" id="btnSave" value="Save" />
  <input name="type" type="hidden" id="type" value="Waiting" />
  <input name="MAX_USER" type="hidden" id="p" value="$max_user" />
  <input name="eventID" type="hidden" id="p" value="{$users[count($users) - 1]->get('eid')}" />
</p>

<p>
<a href="ListUser.php?type=$type&p={$prev_page}">Trước </a>
$page
<a href="ListUser.php?type=$type&p={$next_page}">Sau </a>
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
      <input name="hidUserID$i" type="hidden" id="hidUserID1" value="{$users[$i]->get('uid')}">
     </td>
  </tr>
EOT;
            }
		// End
        $prev_page = $page - 1;
        $next_page = $page + 1;
		$html .= <<<EOT
</table>
<p>
  <input type="submit" name="btnSave" id="btnSave" value="Save" />
  <input name="type" type="hidden" id="type" value="Approved" />
  <input name="MAX_USER" type="hidden" id="p" value="$max_user" />
   
</p>

<p>
<a href="ListUser.php?type=$type&p={$prev_page}">Trước </a>
$page
<a href="ListUser.php?type=$type&p={$next_page}">Sau </a>
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
      <input name="hidUserID$i" type="hidden" id="hidUserID1" value="{$users[$i]->get('uid')}">
     </td>
  </tr>
EOT;
            }
		// End
        $prev_page = $page - 1;
        $next_page = $page + 1;
		$html .= <<<EOT
</table>
<p>
  <input type="submit" name="btnSave" id="btnSave" value="Save" />
  <input name="type" type="hidden" id="type" value="Deny" />
  <input name="MAX_USER" type="hidden" id="p" value="$max_user" />
</p>

<p>
<a href="ListUser.php?type=$type&p={$prev_page}">Trước </a>
$page
<a href="ListUser.php?type=$type&p={$next_page}">Sau </a>
</p>
</form>
EOT;
      		
	}

	return $html;
?>