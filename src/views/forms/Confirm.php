<?php
	foreach($obj->_vinh_convertArray() as $key => $value)
		$$key = $value;

	$nameLevel = array('Chưa biết', 'Căn bản', 'Khá', 'Tốt');
	$exLevel = array();
	$ex_level_value = array();
	$skills_array = $obj->get('skills');
	if(!empty($skills_array));
		foreach($skills_array as $key => $value){
			$ex_level_value = (int)($value->value['level']);
			$exLevel[$key] = $nameLevel[$ex_level_value];
		}

	
		$html = <<<EOT
<form action="Confirm.php" method="post" name="frmMain">
<table width="569" border="0">
  <tr>
    <td width="503" height="389" valign="top"><fieldset>
      <strong>
      <legend>Thông Tin Cá Nhân</legend>
      </strong>
      <p>
        <label><strong>
          Nguyện Vọng</strong></label>
      <p>
          $expectation
          </p>
      <p><strong>Sở Thích</strong></p>
      <p>
        $hobby
        </p> 
      <table width="502" border="0" align="left">
        <tr>
          <td width="103" nowrap="nowrap"><div align="right">Họ tên</div></td>
          <td width="282">
            $name
            </td>
          </tr>
        <tr>
          <td nowrap="nowrap"><div align="right">Ngày Sinh</div></td>
          <td>
            $birthday
            </td>
          </tr>
        <tr>
          <td nowrap="nowrap"><div align="right">Giới Tính</div></td>
          <td>
            $sex
            </td>
          </tr>
        <tr>
          <td nowrap="nowrap"><div align="right">Sinh Viên Khóa</div></td>
          <td>
            $courseyear
            </td>
          </tr>
        <tr>
          <td nowrap="nowrap"><div align="right">Địa Chỉ Liên Lạc</div></td>
          <td>
            $address
            </td>
          </tr>
        <tr>
          <td nowrap="nowrap"><div align="right">Số Điện Thoại</div></td>
          <td>
            $phone
            </td>
          </tr>
        <tr>
          <td nowrap="nowrap"><div align="right">YahooID</div></td>
          <td>
            $yahooid
            </td>
          </tr>
        <tr>
          <td nowrap="nowrap"><div align="right">Email:</div></td>
          <td>
            $email
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
                 $exLevel[0]
                  </tr>
                </table></td>
              </tr>
            <tr>
              <td><div align="right">HTML/CSS:</div></td>
              <td><table width="259" border="0">
                <tr>
                  $exLevel[1]
                  </tr>
                </table></td>
              </tr>
            <tr>
              <td><div align="right">JavaScript:</div></td>
              <td><table width="259" border="0">
                <tr>
                  $exLevel[2]
                  </tr>
                </table></td>
              </tr>
            <tr>
              <td><div align="right">Flash, Sliverlight, Air:</div></td>
              <td><table width="259" border="0">
                <tr>
                  $exLevel[3]
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
                $exLevel[4]
                  </tr>
                </table></td>
              </tr>
            <tr>
              <td><div align="right">ASP.NET:</div></td>
              <td><table width="259" border="0">
                <tr>
                  $exLevel[5]
                  </tr>
                </table></td>
              </tr>
            <tr>
              <td><div align="right">JSP:</div></td>
              <td><table width="259" border="0">
                <tr>
                  $exLevel[6]
                  </tr>
                </table></td>
              </tr>
            <tr>
              <td><div align="right">Google Apps Engine:</div></td>
              <td><table width="259" border="0">
                <tr>
                  $exLevel[7]
                  </tr>
                </table></td>
              </tr>
            <tr>
              <td><div align="right">MySQL:</div></td>
              <td><table width="259" border="0">
                <tr>
                  $exLevel[8]
				  </tr>
                </table>
				</td>
              </tr>
            <tr>
              <td height="30"><div align="right">MS SQL Server:</div></td>
              <td><table width="259" border="0" id="none">
                <tr>
                  $exLevel[9]
                  </tr>
                </table></td>
              </tr>
            </table>
        </div>
      </fieldset>
    </fieldset></td>
  </tr>

  <tr>
    <td width="284" height="35" valign="top"><div align="center">
        <input type="reset" value="Reset" />
        
      <input type="submit" name="btnSubmit" id="btnSubmit" value="Confirm" />
      
      <input name="txtHobby" type="hidden" id="txtHobby" value="$hobby" />
      <input name="txtName" type="hidden" id="txtName" value="$name" />
      <input name="txtName" type="hidden" id="txtBirthday" value="$birthday" />
      <input name="txtExpectation" type="hidden" id="txtExpectation" value="$expectation" />
      <input name="radSex" type="hidden" id="radSex" value="$sex" />
      <input name="lstCourse" type="hidden" id="lstCourse" value="$courseyear" />
      <input name="txtAddress" type="hidden" id="txtAddress" value="$address" />
      <input name="txtPhone" type="hidden" id="txtPhone" value="$phone" />
      <input name="txtYahoo" type="hidden" id="txtYahoo" value="$yahooid" />
      <input name="txtEmail" type="hidden" id="txtEmail" value="$email" />
      <input name="PhotoshopSkill" type="hidden" id="PhotoshopSkill" value="$ex_level_value[0]" />
      <input name="HTMLSkill" type="hidden" id="HTMLSkill" value="$ex_level_value[1]" />
      <input name="JVScriptSkill" type="hidden" id="JVScriptSkill" value="$ex_level_value[2]" />
      <input name="FlashSkill" type="hidden" id="FlashSkill" value="$ex_level_value[3]" />
      <input name="PHPSkill" type="hidden" id="PHPSkill" value="$ex_level_value[4]" />
      <input name="ASPSkill" type="hidden" id="ASPSkill" value="$ex_level_value[5]" />
      <input name="JSPSkill" type="hidden" id="JSPSkill" value="$ex_level_value[6]" />
      <input name="GAESkill" type="hidden" id="GAESkill" value="$ex_level_value[7]" />
      <input name="MySQLSkill" type="hidden" id="MySQLSkill" value="$ex_level_value[8]" />
      <input name="MSSQLSkill" type="hidden" id="MSSQLSkill" value="$ex_level_value[9]" />
      
    </div></td>
    </tr>
</table>
</form>
EOT;

 
	return $html;

?>
