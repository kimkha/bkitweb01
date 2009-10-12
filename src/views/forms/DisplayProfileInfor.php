<?php
		foreach($obj->_vinh_convertArray() as $key => $value)
		$$key = $value;
        $skill_value = array();
        foreach ($obj->get('skills') as $key => $skill)
        {
            $skill_value[$skill->key] = $skill->value['level'];
        }
		$html = <<<EOT

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="DisplayProfileInfor.php?user={$obj->get('uid')}" method="post" name="frmMain">
<table width="778" border="0">
  <tr>
    <td width="284" height="95" valign="top"><fieldset>
      <legend>Thông Tin Cá Nhân</legend>
      <p>
        <label><strong>Nguyện Vọng</strong></label>
      </p>
      <textarea name="txtExpectation" id="txtExpectation" cols="85" rows="5">$expectation</textarea>
      <p><strong>Sở Thích:</strong></p>
      <textarea name="txtExpectation" id="txtHobby" cols="85" rows="5">$hobby</textarea>
      <table width="275" border="1" align="left">
        <tr>
          <td width="103" nowrap="nowrap"><div align="right">Họ tên</div></td>
          <td width="162"> <input name="txtName" type="text" id="txtName" value="$name" size="30" /> </td>
        </tr>
        <tr>
          <td nowrap="nowrap"><div align="right">Ngày Sinh:</div></td>
          <td> <input name="txtBirthday" type="text" id="txtName" value="$birthday" size="30" /> </td>
        </tr>
        <tr>
          <td nowrap="nowrap"><div align="right">Giới Tính:</div></td>
          <td>
              <input type="text" name="radSex" value="$sex" id="radSex_1" />
          </td>
        </tr>
        <tr>
          <td nowrap="nowrap"><div align="right">Sinh Viên Khóa:</div></td>
          <td> 
              <input name="lstCourse" type="text" id="txtName" value="$courseyear" size="30" />
               </td>
        </tr>
        <tr>
          <td nowrap="nowrap"><div align="right">Địa Chỉ Liên Lạc</div></td>
          <td> <input name="txtAddress" type="text" id="txtName" value="$address" size="30" /> </td>
        </tr>
        <tr>
          <td nowrap="nowrap"><div align="right">Số Điện Thoại</div></td>
          <td><input name="txtPhone" type="text" id="txtName" value="$phone" size="30" />  </td>
        </tr>
        <tr>
          <td nowrap="nowrap"><div align="right">YahooID</div></td>
          <td> <input name="txtYahoo" type="text" id="txtName" value="$yahooid" size="30" /> </td>
        </tr>
        <tr>
          <td nowrap="nowrap"><div align="right">Email:</div></td>
          <td> <input name="txtEmail" type="text" id="txtName" value="$email" size="30" /> </td>
        </tr>
      </table>
    </fieldset></td>
    <td width="484" valign="top"><fieldset>
      <legend>Kỹ Năng Chuyên Môn</legend>
      <ul>
        <li>1: Chưa biết</li>
        <li>2: Căn bản</li>
        <li>3: Khá </li>
        <li>4: Tốt </li>
      </ul>
      <fieldset>
        <legend>Thiết Kế Web</legend>
        <div id="skill1" style="margin: 3px; padding: 3px; float: left;">
          <table width="400" border="0">
            <tr>
              <td width="169"><div align="right">Kỹ Năng CorelDraw, PTS</div></td>
              <td>
                    <input type="text" name="PhotoshopSkill" value="$skill_value[1]"/>
              </td>
            </tr>
            <tr>
              <td><div align="right">HTML/CSS:</div></td>
              <td>
                    <input type="text" name="HTMLSkill" value="$skill_value[2]"/>
              </td>
            </tr>
            <tr>
              <td><div align="right">JavaScript:</div></td>
              <td>
                    <input type="text" name="JVScriptSkill" value="$skill_value[3]"/>
              </td>
            </tr>
            <tr>
              <td><div align="right">Flash, Sliverlight, Air:</div></td>
              <td>
                    <input type="text" name="FlashSkill" value="$skill_value[4]" />
              </td>
            </tr>
          </table>
        </div>
 
      </fieldset>
    <fieldset><legend>Lập Trình Web</legend>
      <div id="skill2" style="text-align: center; margin: 3px; padding: 3px; float: left;">
        <table width="400" border="0" cellspacing="0">
          <tr>
            <td width="172"><div align="right">PHP:</div></td>
            <td width="224">
                  <input type="text" name="PHPSkill" value="$skill_value[5]" />
            </td>
          </tr>
          <tr>
            <td><div align="right">ASP.NET:</div></td>
            <td>
                  <input type="text" name="ASPSkill" value="$skill_value[6]" />
            </td>
          </tr>
          <tr>
            <td><div align="right">JSP:</div></td>
            <td>
                  <input type="text" name="JSPSkill" value="$skill_value[7]" />
            </td>
          </tr>
          <tr>
            <td><div align="right">Google Apps Engine:</div></td>
            <td>
                  <input type="text" name="GAESkill" value="$skill_value[8]"/>
            </td>
          </tr>
          <tr>
            <td><div align="right">MySQL:</div></td>
            <td>
                  <input type="text" name="MySQLSkill" value="$skill_value[9]"/>
            </td>
          </tr>
          <tr>
            <td height="30"><div align="right">MS SQL Server:</div></td>
            <td>
                  <input type="text" name="MSSQLSkill" value="$skill_value[10]" />
            </td>
          </tr>
        </table>
      </div>
    </fieldset>  
    </fieldset></td>
  </tr>
  <tr>
    <td height="96" valign="top"><div align="center">
      <table width="290" border="0">
        <tr>
          <td width="87"><input type="submit" name="btnSave" id="btnSave" value="Save" /></td>
          <td width="137" align="right" valign="top"><input type="submit" name="btnDelete" id="btnDelete" value="Delete" /></td>
        </tr>
      </table>
    </div></td>
    <td width="484" valign="top"><div class="status1" id="status1">
      <label>
        <input type="radio" name="UserStatus" value="radio" id="UserStatus_0" />
        Approve</label>
      <input type="radio" name="UserStatus" value="radio" id="UserStatus_1" />
      Waitting
  <input type="radio" name="UserStatus" value="radio" id="UserStatus_2" />
      Deny</div>
      <div class="status2" id="status2">
        <input type="radio" name="ActiveStatus" value="radio" id="ActiveStatus_0" />
        Approve
  <input type="radio" name="ActiveStatus" value="radio" id="ActiveStatus_1" />
      Deny</div></td>
  </tr>
</table>
</form>
</body>
</html>
EOT;

	return $html;

?>
