<?php

	if($type == 'REGISTER')
		$html = <<<EOT
<form action="Confirm.php" method="post" name="frmMain">
<table width="569" border="0">
  <tr>
    <td width="503" height="389" valign="top"><fieldset>
      <strong>
      <legend>Thông Tin Cá Nhân</legend>
      </strong>
      <p>
        <label>Để đăng kí thành viên vui lòng điền đầy đủ thông tin bên dưới.<strong><br>
          Nguyện Vọng</strong></label>
      <p>
          <textarea name="txtExpectation" id="txtExpectation" cols="85" rows="5"></textarea>
          </p>
      <p><strong>Sở Thích</strong></p>
      <p>
        <textarea name="txtHobby" id="txtHobby" cols="85" rows="5"></textarea>
        </p> 
      <table width="502" border="0" align="left">
        <tr>
          <td width="103" nowrap="nowrap"><div align="right">Họ tên</div></td>
          <td width="282">
            <input name="txtName" type="text" id="txtName" size="30" />
            </td>
          </tr>
        <tr>
          <td nowrap="nowrap"><div align="right">Ngày Sinh</div></td>
          <td>
            <input name="txtBirthday" type="text" id="txtBirthday" size="30" />
            </td>
          </tr>
        <tr>
          <td nowrap="nowrap"><div align="right">Giới Tính</div></td>
          <td>
            <label>
              <input name="radSex" type="radio" id="radSex_0" value="Male" checked="checked" />
              Male</label>
            <label>
              <input type="radio" name="radSex" value="Female" id="radSex_1" />
              Female</label>
            </td>
          </tr>
        <tr>
          <td nowrap="nowrap"><div align="right">Sinh Viên Khóa</div></td>
          <td>
            <select name="lstCourse" size="1" id="lstCourse">
              <option>2003</option>
              <option>2004</option>
              <option>2005</option>
              <option>2006</option>
              <option>2007</option>
              <option>2008</option>
              <option selected="selected">2009</option>
              </select>
            </td>
          </tr>
        <tr>
          <td nowrap="nowrap"><div align="right">Địa Chỉ Liên Lạc</div></td>
          <td>
            <input name="txtAddress" type="text" id="txtAddress" size="30" />
            </td>
          </tr>
        <tr>
          <td nowrap="nowrap"><div align="right">Số Điện Thoại</div></td>
          <td>
            <input name="txtPhone" type="text" id="txtPhone" size="30" />
            </td>
          </tr>
        <tr>
          <td nowrap="nowrap"><div align="right">YahooID</div></td>
          <td>
            <input name="txtYahoo" type="text" id="txtYahoo" size="30" />
            </td>
          </tr>
        <tr>
          <td nowrap="nowrap"><div align="right">Email:</div></td>
          <td>
            <input name="txtEmail" type="text" id="txtEmail" size="30" />
            </td>
          </tr>
        </table>
    </fieldset></td>
    </tr>
  <tr>
    <td valign="top"><fieldset>
      <strong>
      <legend>Kỹ Năng Chuyên Môn</legend>
      </strong>
      <ul>
        <li>1: Chưa biết</li>
        <li>2: Căn bản</li>
        <li>3: Khá </li>
        <li>4: Tốt </li>
      </ul>
      <fieldset>
        <strong>
        <legend>Thiết Kế Web</legend>
        </strong>
        <div id="skill1" style="margin: 3px; padding: 3px; float: left;">
          <table width="502" border="0">
            <tr>
              <td width="191"><div align="right">Kỹ Năng CorelDraw, PTS:</div></td>
              <td width="251"><table width="259" border="0">
                <tr>
                  <td width="60"><label>
                    <input name="PhotoshopSkill" type="radio" value="1" checked="checked" />
                    1</label></td>
                  <td width="61"><label>
                    <input type="radio" name="PhotoshopSkill" value="2"/>
                    2</label></td>
                  <td width="62"><label>
                    <input type="radio" name="PhotoshopSkill" value="3"/>
                    3</label></td>
                  <td width="58"><label>
                    <input type="radio" name="PhotoshopSkill" value="4"/>
                    4</label></td>
                  </tr>
                </table></td>
              </tr>
            <tr>
              <td><div align="right">HTML/CSS:</div></td>
              <td><table width="259" border="0">
                <tr>
                  <td width="60"><label>
                    <input name="HTMLSkill" type="radio" id="HTMLSkill" value="1" checked="checked" />
                    1</label></td>
                  <td width="61"><label>
                    <input type="radio" name="HTMLSkill" value="2"/>
                    2</label></td>
                  <td width="62"><label>
                    <input type="radio" name="HTMLSkill" value="3"/>
                    3</label></td>
                  <td width="58"><label>
                    <input type="radio" name="HTMLSkill" value="4"/>
                    4</label></td>
                  </tr>
                </table></td>
              </tr>
            <tr>
              <td><div align="right">JavaScript:</div></td>
              <td><table width="259" border="0">
                <tr>
                  <td width="60"><label>
                    <input name="JVScriptSkill" type="radio" value="1" checked="checked" />
                    1</label></td>
                  <td width="61"><label>
                    <input type="radio" name="JVScriptSkill" value="2"/>
                    2</label></td>
                  <td width="62"><label>
                    <input type="radio" name="JVScriptSkill" value="3"/>
                    3</label></td>
                  <td width="58"><label>
                    <input type="radio" name="JVScriptSkill" value="4"/>
                    4</label></td>
                  </tr>
                </table></td>
              </tr>
            <tr>
              <td><div align="right">Flash, Sliverlight, Air:</div></td>
              <td><table width="259" border="0">
                <tr>
                  <td width="60"><label>
                    <input name="FlashSkill" type="radio" value="1" checked="checked" />
                    1</label></td>
                  <td width="61"><label>
                    <input type="radio" name="FlashSkill" value="2" />
                    2</label></td>
                  <td width="62"><label>
                    <input type="radio" name="FlashSkill" value="3" />
                    3</label></td>
                  <td width="58"><label>
                    <input type="radio" name="FlashSkill" value="4" />
                    4</label></td>
                  </tr>
                </table></td>
              </tr>
            </table>
        </div>
      </fieldset>
      <fieldset>
        <strong>
        <legend>Lập Trình Web</legend>
        </strong>
        <div id="skill2" style="text-align: center; margin: 3px; padding: 3px; float: left;">
          <table width="503" border="0" cellspacing="0">
            <tr>
              <td width="192"><div align="right">PHP:</div></td>
              <td width="257"><table width="259" border="0">
                <tr>
                  <td width="60"><label>
                    <input name="PHPSkill" type="radio" value="1" checked="checked" />
                    1</label></td>
                  <td width="61"><label>
                    <input type="radio" name="PHPSkill" value="2" />
                    2</label></td>
                  <td width="62"><label>
                    <input type="radio" name="PHPSkill" value="3" />
                    3</label></td>
                  <td width="58"><label>
                    <input type="radio" name="PHPSkill" value="4" />
                    4</label></td>
                  </tr>
                </table></td>
              </tr>
            <tr>
              <td><div align="right">ASP.NET:</div></td>
              <td><table width="259" border="0">
                <tr>
                  <td width="60"><label>
                    <input name="ASPSkill" type="radio" value="1" checked="checked" />
                    1</label></td>
                  <td width="61"><label>
                    <input type="radio" name="ASPSkill" value="2" />
                    2</label></td>
                  <td width="62"><label>
                    <input type="radio" name="ASPSkill" value="3" />
                    3</label></td>
                  <td width="58"><label>
                    <input type="radio" name="ASPSkill" value="4" />
                    4</label></td>
                  </tr>
                </table></td>
              </tr>
            <tr>
              <td><div align="right">JSP:</div></td>
              <td><table width="259" border="0">
                <tr>
                  <td width="60"><label>
                    <input name="JSPSkill" type="radio" value="1" checked="checked" />
                    1</label></td>
                  <td width="61"><label>
                    <input type="radio" name="JSPSkill" value="2" />
                    2</label></td>
                  <td width="62"><label>
                    <input type="radio" name="JSPSkill" value="3" />
                    3</label></td>
                  <td width="58"><label>
                    <input type="radio" name="JSPSkill" value="radio" />
                    4</label></td>
                  </tr>
                </table></td>
              </tr>
            <tr>
              <td><div align="right">Google Apps Engine:</div></td>
              <td><table width="259" border="0">
                <tr>
                  <td width="60"><label>
                    <input name="GAESkill" type="radio" value="1" checked="checked" />
                    1</label></td>
                  <td width="61"><label>
                    <input type="radio" name="GAESkill" value="2"/>
                    2</label></td>
                  <td width="62"><label>
                    <input type="radio" name="GAESkill" value="3"/>
                    3</label></td>
                  <td width="58"><label>
                    <input type="radio" name="GAESkill" value="4"/>
                    4</label></td>
                  </tr>
                </table></td>
              </tr>
            <tr>
              <td><div align="right">MySQL:</div></td>
              <td><table width="259" border="0">
                <tr>
                  <td width="60"><label>
                    <input name="MySQLSkill" type="radio" value="1" checked="checked" />
                    1</label></td>
                  <td width="61"><label>
                    <input type="radio" name="MySQLSkill" value="2"/>
                    2</label></td>
                  <td width="62"><label>
                    <input type="radio" name="MySQLSkill" value="3"/>
                    3</label></td>
                  <td width="58"><label>
                    <input type="radio" name="MySQLSkill" value="4"/>
                    4</label></td>
				  </tr>
                </table>
				</td>
              </tr>
            <tr>
              <td height="30"><div align="right">MS SQL Server:</div></td>
              <td><table width="259" border="0" id="none">
                <tr>
                  <td width="60"><label>
                    <input name="MSSQLSkill" type="radio" value="1" checked="checked" />
                    1</label></td>
                  <td width="61"><label>
                    <input type="radio" name="MSSQLSkill" value="2" />
                    2</label></td>
                  <td width="62"><label>
                    <input type="radio" name="MSSQLSkill" value="3" />
                    3</label></td>
                  <td width="58"><label>
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
    <td><div align="center">
      <label>
        <input type="reset" value="Reset" />
      </label>
      <input type="submit" name="btnSubmit" id="btnSubmit" value="Register" />
    </div></td>
  </tr>

</table>
</form>
EOT;
	else
		$html = '';
	return $html;

?>
