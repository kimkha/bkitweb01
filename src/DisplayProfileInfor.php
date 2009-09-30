<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
#ActiveStatus {
	height: 21px;
	width: 400px;
	border: thin inset #06C;
}
#status1 {
	margin: 2px;
	padding: 2px;
	float: left;
	border: thin solid #03C;
}
#status2 {
	margin: 2px;
	padding: 2px;
	float: left;
	border: thin solid #03C;
}
#skill1 {
	margin: 3px;
	padding: 3px;
	float: left;
}
#note1 {
	margin: 3px;
	padding: 3px;
	float: left;
}
#skill2 {
	text-align: center;
	margin: 3px;
	padding: 3px;
	float: left;
}
#note2 {
	margin: 3px;
	padding: 3px;
	float: left;
}
-->
</style>
</head>

<body>
<form action="" method="get" name="Mainfrm">
<table width="1234" border="1">
  <tr>
    <td width="538" height="389"><fieldset>
      <legend>Thông Tin Cá Nhân</legend>
      <p>
        <label><strong>Nguyện Vọng</strong></label>
      <p><label>here</label>&nbsp;</p>
      <p><strong>Sở Thích:</strong></p>
      <p>
        <label>here</label>
      </p>
      <table width="400" border="1" align="left">
        <tr>
          <td width="117"><label> &#09;
              <div align="right">Họ Tên:
              </div>
          </label></td>
          <td width="267">&nbsp;</td>
        </tr>
        <tr>
          <td><div align="right">Ngày Sinh:</div></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><div align="right">Giới Tính:</div></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><div align="right">Sinh Viên Khóa:</div></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><div align="right">Địa Chỉ Liên Lạc</div></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><div align="right">Số Điện Thoại</div></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><div align="right">YahooID</div></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><div align="right">Email:</div></td>
          <td>&nbsp;</td>
        </tr>
      </table>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <div class="status1" id="status1">
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
Deny</div>
      <p>&nbsp;          </p>
      <p>
        <input type="submit" name="btnSave" id="btnSave" value="Save" />
        <input type="submit" name="btnDelete" id="btnDelete" value="Delete" />
      </p>
    </fieldset></td>
    <td width="680"><fieldset>
      <legend>Kỹ Năng Chuyên Môn</legend>
      <p>&nbsp; </p>
      <fieldset>
        <legend>Thiết Kế Web</legend>
        <div id="skill1">
          <table width="400" border="1">
            <tr>
              <td width="168"><div align="right">Kỹ Năng CorelDraw, Photoshop</div></td>
              <td width="48"><table width="219" border="0">
                <tr>
                  <td width="50"><label>
                    <input name="PhotoshopSkill" type="radio" id="PhotoshopSkill_0" value="selected" />
                    1</label></td>
                  <td width="51"><label>
                    <input type="radio" name="PhotoshopSkill" value="radio" id="PhotoshopSkill_1" />
                    2</label></td>
                  <td width="52"><label>
                    <input type="radio" name="PhotoshopSkill" value="radio" id="PhotoshopSkill_2" />
                    3</label></td>
                  <td width="48"><label>
                    <input type="radio" name="PhotoshopSkill" value="radio" id="PhotoshopSkill_3" />
                    4</label></td>
                </tr>
              </table>
                <p></p></td>
            </tr>
            <tr>
              <td><div align="right">HTML/CSS</div></td>
              <td><table width="218" border="0">
                <tr>
                  <td width="50"><label>
                    <input name="c" type="radio" id="HTMLSkill" value="selected" />
                    1</label></td>
                  <td width="50"><label>
                    <input type="radio" name="HTMLSkill" value="radio" id="PhotoshopSkill_5" />
                    2</label></td>
                  <td width="52"><label>
                    <input type="radio" name="HTMLSkill" value="radio" id="PhotoshopSkill_6" />
                    3</label></td>
                  <td width="48"><label>
                    <input type="radio" name="HTMLSkill" value="radio" id="PhotoshopSkill_7" />
                    4</label></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td><div align="right">JavaScript</div></td>
              <td><table width="218" border="0">
                <tr>
                  <td><label>
                    <input name="JVScriptSkill" type="radio" id="PhotoshopSkill_8" value="selected" />
                    1</label></td>
                  <td><label>
                    <input type="radio" name="JVScriptSkill" value="radio" id="PhotoshopSkill_9" />
                    2</label></td>
                  <td><label>
                    <input type="radio" name="JVScriptSkill" value="radio" id="PhotoshopSkill_10" />
                    3</label></td>
                  <td><label>
                    <input type="radio" name="JVScriptSkill" value="radio" id="PhotoshopSkill_11" />
                    4</label></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td><div align="right">Flash, Sliverlight, Air</div></td>
              <td><table width="217" border="0">
                <tr>
                  <td width="48"><label>
                    <input name="FlashSkill" type="radio" id="PhotoshopSkill_12" value="selected" />
                    1</label></td>
                  <td width="51"><label>
                    <input type="radio" name="FlashSkill" value="radio" id="PhotoshopSkill_13" />
                    2</label></td>
                  <td width="52"><label>
                    <input type="radio" name="FlashSkill" value="radio" id="PhotoshopSkill_14" />
                    3</label></td>
                  <td width="48"><label>
                    <input type="radio" name="FlashSkill" value="radio" id="PhotoshopSkill_15" />
                    4</label></td>
                </tr>
              </table></td>
            </tr>
          </table>
        </div>
        <div id="note1">
          <ul>
            <li>1: Chưa biết</li>
            <li>2: Căn bản</li>
            <li>3: Khá </li>
            <li>4: Tốt</li>
          </ul>
          </div>
        <p>&nbsp;</p>
      </fieldset>
    <fieldset><legend>Lập Trình Web</legend>
      <div id="skill2">
        <table width="400" border="1">
          <tr>
            <td width="165"><div align="right">PHP</div></td>
            <td width="219"><table width="219" border="0">
              <tr>
                <td width="50"><label>
                  <input name="PHPSkill" type="radio" id="PhotoshopSkill_4" value="selected" />
                  1</label></td>
                <td width="51"><label>
                  <input type="radio" name="PHPSkill" value="radio" id="PhotoshopSkill_16" />
                  2</label></td>
                <td width="52"><label>
                  <input type="radio" name="PHPSkill" value="radio" id="PhotoshopSkill_17" />
                  3</label></td>
                <td width="48"><label>
                  <input type="radio" name="PHPSkill" value="radio" id="PhotoshopSkill_18" />
                  4</label></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><div align="right">ASP.NET</div></td>
            <td><table width="219" border="0">
              <tr>
                <td width="50"><label>
                  <input name="ASPSkill" type="radio" id="PhotoshopSkill_19" value="selected" />
                  1</label></td>
                <td width="51"><label>
                  <input type="radio" name="ASPSkill" value="radio" id="PhotoshopSkill_20" />
                  2</label></td>
                <td width="52"><label>
                  <input type="radio" name="ASPSkill" value="radio" id="PhotoshopSkill_21" />
                  3</label></td>
                <td width="48"><label>
                  <input type="radio" name="ASPSkill" value="radio" id="PhotoshopSkill_22" />
                  4</label></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><div align="right">JSP</div></td>
            <td><table width="219" border="0">
              <tr>
                <td width="50"><label>
                  <input name="JSPSkill" type="radio" id="PhotoshopSkill_23" value="selected" />
                  1</label></td>
                <td width="51"><label>
                  <input type="radio" name="JSPSkill" value="radio" id="PhotoshopSkill_24" />
                  2</label></td>
                <td width="52"><label>
                  <input type="radio" name="JSPSkill" value="radio" id="PhotoshopSkill_25" />
                  3</label></td>
                <td width="48"><label>
                  <input type="radio" name="JSPSkill" value="radio" id="PhotoshopSkill_26" />
                  4</label></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><div align="right">Google Apps Engine</div></td>
            <td><table width="219" border="0">
              <tr>
                <td width="50"><label>
                  <input name="GAESkill" type="radio" id="PhotoshopSkill_27" value="selected" />
                  1</label></td>
                <td width="51"><label>
                  <input type="radio" name="GAESkill" value="radio" id="PhotoshopSkill_28" />
                  2</label></td>
                <td width="52"><label>
                  <input type="radio" name="GAESkill" value="radio" id="PhotoshopSkill_29" />
                  3</label></td>
                <td width="48"><label>
                  <input type="radio" name="GAESkill" value="radio" id="PhotoshopSkill_30" />
                  4</label></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><div align="right">MySQL</div></td>
            <td><table width="219" border="0">
              <tr>
                <td width="50"><label>
                  <input name="MySQLSkill" type="radio" id="PhotoshopSkill_31" value="selected" />
                  1</label></td>
                <td width="51"><label>
                  <input type="radio" name="MySQLSkill" value="radio" id="PhotoshopSkill_32" />
                  2</label></td>
                <td width="52"><label>
                  <input type="radio" name="MySQLSkill" value="radio" id="PhotoshopSkill_33" />
                  3</label></td>
                <td width="48"><label>
                  <input type="radio" name="MySQLSkill" value="radio" id="PhotoshopSkill_34" />
                  4</label></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><div align="right">MS SQL Server</div></td>
            <td><table width="219" border="0">
              <tr>
                <td width="50"><label>
                  <input name="MSSQLSkill" type="radio" id="PhotoshopSkill_35" value="selected" />
                  1</label></td>
                <td width="51"><label>
                  <input type="radio" name="MSSQLSkill" value="radio" id="PhotoshopSkill_36" />
                  2</label></td>
                <td width="52"><label>
                  <input type="radio" name="MSSQLSkill" value="radio" id="PhotoshopSkill_37" />
                  3</label></td>
                <td width="48"><label>
                  <input type="radio" name="MSSQLSkill" value="radio" id="PhotoshopSkill_38" />
                  4</label></td>
              </tr>
            </table></td>
          </tr>
        </table>
      </div>
      <div id="note2">
        <ul>
          <li>1: Chưa biết</li>
          <li>2: Căn bản</li>
          <li>3: Khá </li>
          <li>4: Tốt</li>
        </ul>
      </div>
    </fieldset>  
    </fieldset></td>
  </tr>
</table>
</form>
</body>
</html>
