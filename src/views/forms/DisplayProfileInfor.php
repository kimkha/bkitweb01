<?php
		foreach($obj->_vinh_convertArray() as $key => $value)
		$$key = $value;

		$html = <<<EOT

<form action="Confirm.php" method="post" name="frmMain">
<table width="778" border="0">
  <tr>
    <td width="284" height="95" valign="top"><fieldset>
      <legend>Thông Tin Cá Nhân</legend>
      <p>
        <legend>Thông Tin Cá Nhân</legend>
      <p>
        <label><strong>Nguyện Vọng</strong></label>
      </p>
      <p>$expectation</p>
      <p><strong>Sở Thích:</strong></p>
      <p>$hobby)</p>
      <table width="275" border="1" align="left">
        <tr>
          <td width="103" nowrap="nowrap"><div align="right">Họ tên</div></td>
          <td width="162"> $name </td>
        </tr>
        <tr>
          <td nowrap="nowrap"><div align="right">Ngày Sinh:</div></td>
          <td> $birthday </td>
        </tr>
        <tr>
          <td nowrap="nowrap"><div align="right">Giới Tính:</div></td>
          <td> $sex </td>
        </tr>
        <tr>
          <td nowrap="nowrap"><div align="right">Sinh Viên Khóa:</div></td>
          <td> $courseyear </td>
        </tr>
        <tr>
          <td nowrap="nowrap"><div align="right">Địa Chỉ Liên Lạc</div></td>
          <td> $address </td>
        </tr>
        <tr>
          <td nowrap="nowrap"><div align="right">Số Điện Thoại</div></td>
          <td> $phone </td>
        </tr>
        <tr>
          <td nowrap="nowrap"><div align="right">YahooID</div></td>
          <td> $yahooid </td>
        </tr>
        <tr>
          <td nowrap="nowrap"><div align="right">Email:</div></td>
          <td> $email </td>
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
              <td><table width="219" border="0">
                <tr>
                  <td width="50"><label>
                    <input name="PhotoshopSkill" type="radio" value="1" checked="checked" />
                    1</label></td>
                  <td width="51"><label>
                    <input type="radio" name="PhotoshopSkill" value="2"/>
                    2</label></td>
                  <td width="52"><label>
                    <input type="radio" name="PhotoshopSkill" value="3"/>
                    3</label></td>
                  <td width="48"><label>
                    <input type="radio" name="PhotoshopSkill" value="4"/>
                    4</label></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td><div align="right">HTML/CSS:</div></td>
              <td><table width="219" border="0">
                <tr>
                  <td width="50"><label>
                    <input name="HTMLSkill" type="radio" id="HTMLSkill" value="1" checked="checked" />
                    1</label></td>
                  <td width="51"><label>
                    <input type="radio" name="HTMLSkill" value="2"/>
                    2</label></td>
                  <td width="52"><label>
                    <input type="radio" name="HTMLSkill" value="3"/>
                    3</label></td>
                  <td width="48"><label>
                    <input type="radio" name="HTMLSkill" value="4"/>
                    4</label></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td><div align="right">JavaScript:</div></td>
              <td><table width="219" border="0">
                <tr>
                  <td width="50"><label>
                    <input name="JVScriptSkill" type="radio" value="1" checked="checked" />
                    1</label></td>
                  <td width="51"><label>
                    <input type="radio" name="JVScriptSkill" value="2"/>
                    2</label></td>
                  <td width="52"><label>
                    <input type="radio" name="JVScriptSkill" value="3"/>
                    3</label></td>
                  <td width="48"><label>
                    <input type="radio" name="JVScriptSkill" value="4"/>
                    4</label></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td><div align="right">Flash, Sliverlight, Air:</div></td>
              <td><table width="219" border="0">
                <tr>
                  <td width="50"><label>
                    <input name="FlashSkill" type="radio" value="1" checked="checked" />
                    1</label></td>
                  <td width="51"><label>
                    <input type="radio" name="FlashSkill" value="2" />
                    2</label></td>
                  <td width="52"><label>
                    <input type="radio" name="FlashSkill" value="3" />
                    3</label></td>
                  <td width="48"><label>
                    <input type="radio" name="FlashSkill" value="4" />
                    4</label></td>
                </tr>
              </table></td>
            </tr>
          </table>
        </div>
 
      </fieldset>
    <fieldset><legend>Lập Trình Web</legend>
      <div id="skill2" style="text-align: center; margin: 3px; padding: 3px; float: left;">
        <table width="400" border="0" cellspacing="0">
          <tr>
            <td width="172"><div align="right">PHP:</div></td>
            <td width="224"><table width="219" border="0">
              <tr>
                <td width="50"><label>
                  <input name="PHPSkill" type="radio" value="1" checked="checked" />
                  1</label></td>
                <td width="51"><label>
                  <input type="radio" name="PHPSkill" value="2" />
                  2</label></td>
                <td width="52"><label>
                  <input type="radio" name="PHPSkill" value="3" />
                  3</label></td>
                <td width="48"><label>
                  <input type="radio" name="PHPSkill" value="4" />
                  4</label></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><div align="right">ASP.NET:</div></td>
            <td><table width="219" border="0">
              <tr>
                <td width="50"><label>
                  <input name="ASPSkill" type="radio" value="1" checked="checked" />
                  1</label></td>
                <td width="51"><label>
                  <input type="radio" name="ASPSkill" value="2" />
                  2</label></td>
                <td width="52"><label>
                  <input type="radio" name="ASPSkill" value="3" />
                  3</label></td>
                <td width="48"><label>
                  <input type="radio" name="ASPSkill" value="4" />
                  4</label></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><div align="right">JSP:</div></td>
            <td><table width="219" border="0">
              <tr>
                <td width="50"><label>
                  <input name="JSPSkill" type="radio" value="1" checked="checked" />
                  1</label></td>
                <td width="51"><label>
                  <input type="radio" name="JSPSkill" value="2" />
                  2</label></td>
                <td width="52"><label>
                  <input type="radio" name="JSPSkill" value="3" />
                  3</label></td>
                <td width="48"><label>
                  <input type="radio" name="JSPSkill" value="radio" />
                  4</label></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><div align="right">Google Apps Engine:</div></td>
            <td><table width="219" border="0">
              <tr>
                <td width="50" height="24"><label>
                  <input name="GAESkill" type="radio" value="1" checked="checked" />
                  1</label></td>
                <td width="51"><label>
                  <input type="radio" name="GAESkill" value="2"/>
                  2</label></td>
                <td width="52"><label>
                  <input type="radio" name="GAESkill" value="3"/>
                  3</label></td>
                <td width="48"><label>
                  <input type="radio" name="GAESkill" value="4"/>
                  4</label></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><div align="right">MySQL:</div></td>
            <td><table width="219" border="0">
              <tr>
                <td width="50"><label>
                  <input name="MySQLSkill" type="radio" value="1" checked="checked" />
                  1</label></td>
                <td width="51"><label>
                  <input type="radio" name="MySQLSkill" value="2"/>
                  2</label></td>
                <td width="52"><label>
                  <input type="radio" name="MySQLSkill" value="3"/>
                  3</label></td>
                <td width="48"><label>
                  <input type="radio" name="MySQLSkill" value="4"/>
                  4</label></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td height="30"><div align="right">MS SQL Server:</div></td>
            <td><table width="219" border="0">
              <tr>
                <td width="50"><label>
                  <input name="MSSQLSkill" type="radio" value="1" checked="checked" />
                  1</label></td>
                <td width="51"><label>
                  <input type="radio" name="MSSQLSkill" value="2" />
                  2</label></td>
                <td width="52"><label>
                  <input type="radio" name="MSSQLSkill" value="3" />
                  3</label></td>
                <td width="48"><label>
                  <input type="radio" name="MSSQLSkill" value="4" />
                  4</label></td>
              </tr>
            </table></td>
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
EOT;

	return $html;

?>
