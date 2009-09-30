<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="gen_validatorv31.js"></script>
</head>
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
#name {
	margin-top: 11px;
	margin-bottom: 11px;
}
.infoDiv {
	margin-top: 5px;
	margin-bottom: 5px;
	text-align: left;
}
-->
</style>
</head>

<body>
<form action="Confirm.php" method="post" name="frmMain">
<table width="1234" border="1">
  <tr>
    <td width="538" height="389"><fieldset>
      <legend>Thông Tin Cá Nhân</legend>
      <p>
        <label><strong>Nguyện Vọng</strong></label>
      <p>
        <textarea name="txtExpectation" id="txtExpectation" cols="55" rows="5"></textarea>
      </p>
      <p><strong>Sở Thích:</strong></p>
      <p>
        <textarea name="txtHobby" id="txtHobby" cols="55" rows="5"></textarea>
      </p>
      <div class="infoDiv" id="name">Họ và Tên:  
        <input name="txtName" type="text" id="txtName" size="30" />
      </div>
      <div class="infoDiv" id="birthday">Ngày Sinh: 
        <input type="text" name="txtBirthday" id="txtBirthday" />
      </div>
      <div class="infoDiv" id="sex">Giới Tính   :
        
          <label>
            <input name="radSex" type="radio" id="radSex_0" value="Male" checked="checked" />
            Male</label>
          <label>
            <input type="radio" name="radSex" value="Female" id="radSex_1" />
            Female</label>

      </div>
      <div class="infoDiv" id="course">Khóa: 
        <select name="lstCourse" size="1" id="lstCourse">
          <option>2003</option>
          <option>2004</option>
          <option>2005</option>
          <option>2006</option>
          <option>2007</option>
          <option>2008</option>
          <option selected="selected">2009</option>
        </select>
      </div>
      <div class="infoDiv" id="address">Địa Chỉ Liên Lạc:
        <input type="text" name="txtAddress" id="txtAddress" />
      </div>
      <div class="infoDiv" id="phone">Số Điện Thoại: 
        <input type="text" name="txtPhone" id="txtPhone" />
      </div>
      <div class="infoDiv" id="yahooid">YahooID:
        <input type="text" name="txtYahoo" id="txtYahoo" />
      </div>
      <div class="infoDiv" id="email">Email:
        <input type="text" name="txtEmail" id="txtEmail" />
      </div>
<p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>
        <input type="submit" name="btnSubmit" id="btnSubmit" value="Register" />
      </p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
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
                    <input name="PhotoshopSkill" type="radio" id="PhotoshopSkill_0" value="1" checked="checked" />
                    1</label></td>
                  <td width="51"><label>
                    <input type="radio" name="PhotoshopSkill" value="2" id="PhotoshopSkill_1" />
                    2</label></td>
                  <td width="52"><label>
                    <input type="radio" name="PhotoshopSkill" value="3" id="PhotoshopSkill_2" />
                    3</label></td>
                  <td width="48"><label>
                    <input type="radio" name="PhotoshopSkill" value="4" id="PhotoshopSkill_3" />
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
                    <input name="HTMLSkill" type="radio" id="HTMLSkill" value="1" checked="checked" />
                    1</label></td>
                  <td width="50"><label>
                    <input type="radio" name="HTMLSkill" value="2" id="PhotoshopSkill_5" />
                    2</label></td>
                  <td width="52"><label>
                    <input type="radio" name="HTMLSkill" value="3" id="PhotoshopSkill_6" />
                    3</label></td>
                  <td width="48"><label>
                    <input type="radio" name="HTMLSkill" value="4" id="PhotoshopSkill_7" />
                    4</label></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td><div align="right">JavaScript</div></td>
              <td><table width="218" border="0">
                <tr>
                  <td><label>
                    <input name="JVScriptSkill" type="radio" id="PhotoshopSkill_8" value="1" checked="checked" />
                    1</label></td>
                  <td><label>
                    <input type="radio" name="JVScriptSkill" value="2" id="PhotoshopSkill_9" />
                    2</label></td>
                  <td><label>
                    <input type="radio" name="JVScriptSkill" value="3" id="PhotoshopSkill_10" />
                    3</label></td>
                  <td><label>
                    <input type="radio" name="JVScriptSkill" value="4" id="PhotoshopSkill_11" />
                    4</label></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td><div align="right">Flash, Sliverlight, Air</div></td>
              <td><table width="217" border="0">
                <tr>
                  <td width="48"><label>
                    <input name="FlashSkill" type="radio" id="PhotoshopSkill_12" value="1" checked="checked" />
                    1</label></td>
                  <td width="51"><label>
                    <input type="radio" name="FlashSkill" value="2" id="PhotoshopSkill_13" />
                    2</label></td>
                  <td width="52"><label>
                    <input type="radio" name="FlashSkill" value="3" id="PhotoshopSkill_14" />
                    3</label></td>
                  <td width="48"><label>
                    <input type="radio" name="FlashSkill" value="4" id="PhotoshopSkill_15" />
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
                  <input name="PHPSkill" type="radio" id="PhotoshopSkill_4" value="1" checked="checked" />
                  1</label></td>
                <td width="51"><label>
                  <input type="radio" name="PHPSkill" value="2" id="PhotoshopSkill_16" />
                  2</label></td>
                <td width="52"><label>
                  <input type="radio" name="PHPSkill" value="3" id="PhotoshopSkill_17" />
                  3</label></td>
                <td width="48"><label>
                  <input type="radio" name="PHPSkill" value="4" id="PhotoshopSkill_18" />
                  4</label></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><div align="right">ASP.NET</div></td>
            <td><table width="219" border="0">
              <tr>
                <td width="50"><label>
                  <input name="ASPSkill" type="radio" id="PhotoshopSkill_19" value="1" checked="checked" />
                  1</label></td>
                <td width="51"><label>
                  <input type="radio" name="ASPSkill" value="2" id="PhotoshopSkill_20" />
                  2</label></td>
                <td width="52"><label>
                  <input type="radio" name="ASPSkill" value="3" id="PhotoshopSkill_21" />
                  3</label></td>
                <td width="48"><label>
                  <input type="radio" name="ASPSkill" value="4" id="PhotoshopSkill_22" />
                  4</label></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><div align="right">JSP</div></td>
            <td><table width="219" border="0">
              <tr>
                <td width="50"><label>
                  <input name="JSPSkill" type="radio" id="PhotoshopSkill_23" value="1" checked="checked" />
                  1</label></td>
                <td width="51"><label>
                  <input type="radio" name="JSPSkill" value="2" id="PhotoshopSkill_24" />
                  2</label></td>
                <td width="52"><label>
                  <input type="radio" name="JSPSkill" value="3" id="PhotoshopSkill_25" />
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
                  <input name="GAESkill" type="radio" id="PhotoshopSkill_27" value="1" checked="checked" />
                  1</label></td>
                <td width="51"><label>
                  <input type="radio" name="GAESkill" value="2" id="PhotoshopSkill_28" />
                  2</label></td>
                <td width="52"><label>
                  <input type="radio" name="GAESkill" value="3" id="PhotoshopSkill_29" />
                  3</label></td>
                <td width="48"><label>
                  <input type="radio" name="GAESkill" value="4" id="PhotoshopSkill_30" />
                  4</label></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><div align="right">MySQL</div></td>
            <td><table width="219" border="0">
              <tr>
                <td width="50"><label>
                  <input name="MySQLSkill" type="radio" id="PhotoshopSkill_31" value="1" checked="checked" />
                  1</label></td>
                <td width="51"><label>
                  <input type="radio" name="MySQLSkill" value="2" id="PhotoshopSkill_32" />
                  2</label></td>
                <td width="52"><label>
                  <input type="radio" name="MySQLSkill" value="3" id="PhotoshopSkill_33" />
                  3</label></td>
                <td width="48"><label>
                  <input type="radio" name="MySQLSkill" value="4" id="PhotoshopSkill_34" />
                  4</label></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><div align="right">MS SQL Server</div></td>
            <td><table width="219" border="0">
              <tr>
                <td width="50"><label>
                  <input name="MSSQLSkill" type="radio" id="PhotoshopSkill_35" value="1" checked="checked" />
                  1</label></td>
                <td width="51"><label>
                  <input type="radio" name="MSSQLSkill" value="2" id="PhotoshopSkill_36" />
                  2</label></td>
                <td width="52"><label>
                  <input type="radio" name="MSSQLSkill" value="3" id="PhotoshopSkill_37" />
                  3</label></td>
                <td width="48"><label>
                  <input type="radio" name="MSSQLSkill" value="4" id="PhotoshopSkill_38" />
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
<script type="text/javascript">
 var frmValidator = new Validator('frmMain');
 frmValidator.addValidation('txtExpectation','req','Nguyện Vọng: không để trống');
 frmValidator.addValidation('txtExpectation','maxlen=2048','Nguyện Vọgn: không quá 2048 kí tự');
 
 
 frmValidator.addValidation('txtHoppy','req','Sở thích: không để trống');
 frmValidator.addValidation('txtHoppy','maxlen=2048','Sở thích: không quá 2048 kí tự');
 
 frmValidator.addValidation('txtName','req','Tên: không để trống');
 frmValidator.addValidation('txtName','maxlen=50','Tên: không quá 2048 kí tự');
 
 frmValidator.addValidation('txtBirthday','req','Tên: không để trống');
 frmValidator.addValidation('txtBirthday','regexp=^','Tên: không quá 2048 kí tự');
</script>
