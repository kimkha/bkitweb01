<?php
		foreach($obj->_vinh_convertArray() as $key => $value)
			$$key = $value;

		$nameLevel = array('Chưa biết', 'Căn bản', 'Khá', 'Tốt');
		
		$exLevel = array();
		for($i = 0; $i < 10; $i++)
        {
            $skills_array = $obj->get('skills');
            $ex_level_value[$i] = (int)$skills_array[$i]->value['level'] - 1;
            $exLevel[$i] = $nameLevel[$ex_level_value[$i]];
        }
       // var_dump($exLevel);
		$html = <<<EOT
<form action="Confirm.php" method="post" name="frmMain">
<table width="707" border="0">
  <tr>
    <td width="284" height="193" valign="top"><fieldset>
      <legend>Thông Tin Cá Nhân</legend>
      <p>
        <label><strong>Nguyện Vọng</strong></label>
        <p>$expectation</p>
      <p><strong>Sở Thích:</strong></p>
      <p>$hobby</p> 
      <table width="275" border="1" align="left">
        <tr>
          <td width="103" nowrap="nowrap"><div align="right">Họ tên</div></td>
          <td width="162">
            $name
            </td>
          </tr>
        <tr>
          <td nowrap="nowrap"><div align="right">Ngày Sinh:</div></td>
          <td>
            $birthday
            </td>
          </tr>
        <tr>
          <td nowrap="nowrap"><div align="right">Giới Tính:</div></td>
          <td>
            $sex
            </td>
          </tr>
        <tr>
          <td nowrap="nowrap"><div align="right">Sinh Viên Khóa:</div></td>
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
    <td width="413" rowspan="2" valign="top"><fieldset>
      <legend>Kỹ Năng Chuyên Môn</legend>
      
      <fieldset>
        <legend>Thiết Kế Web</legend>
        <div id="skill1" style="margin: 3px; padding: 3px; float: left;">
          <table width="400" border="1">
            <tr>
              <td width="169"><div align="right">Kỹ Năng CorelDraw, PTS</div></td>
              <td width="221"><table width="219" border="0">
                <tr>
                  $exLevel[0]
                  </tr>
                </table></td>
              </tr>
            <tr>
              <td><div align="right">HTML/CSS:</div></td>
              <td><table width="219" border="0">
                <tr>
                  $exLevel[1]
                  </tr>
                </table></td>
              </tr>
            <tr>
              <td><div align="right">JavaScript:</div></td>
              <td><table width="219" border="0">
                <tr>
                  $exLevel[2]
                  </tr>
                </table></td>
              </tr>
            <tr>
              <td><div align="right">Flash, Sliverlight, Air:</div></td>
              <td><table width="219" border="0">
                <tr>
                  $exLevel[3]
                  </tr>
                </table></td>
              </tr>
            </table>
          </div>
        
        </fieldset>
      <fieldset><legend>Lập Trình Web</legend>
        <div id="skill2" style="margin: 3px; padding: 3px; float: left;">
          <table width="400" border="1" cellspacing="1">
            <tr>
              <td width="169"><div align="right">PHP:</div></td>
              <td width="219"><table width="219" border="0">
                <tr>
                  $exLevel[4]
                  </tr>
                </table></td>
              </tr>
            <tr>
              <td><div align="right">ASP.NET:</div></td>
              <td><table width="219" border="0">
                <tr>
                  $exLevel[5]
                  </tr>
                </table></td>
              </tr>
            <tr>
              <td><div align="right">JSP:</div></td>
              <td><table width="219" border="0">
                <tr>
                  $exLevel[6]
                  </tr>
                </table></td>
              </tr>
            <tr>
              <td><div align="right">Google Apps Engine:</div></td>
              <td><table width="219" border="0">
                <tr>
                  $exLevel[7]
                  </tr>
                </table></td>
              </tr>
            <tr>
              <td><div align="right">MySQL:</div></td>
              <td><table width="219" border="0">
                <tr>
                  $exLevel[8]
                  </tr>
                </table></td>
              </tr>
            <tr>
              <td height="30"><div align="right">MS SQL Server:</div></td>
              <td><table width="219" border="0">
                <tr>
                  $exLevel[9]
                  </tr>
                </table></td>
              </tr>
            </table>
          <p>&nbsp;</p>
        </div>
        </fieldset>  
      </fieldset></td>
  </tr>
  <tr>
    <td width="284" height="35" valign="top"><div align="center">
      <input type="button" name="btnSave" id="btnSave" value="Goback" onclick="history.go(-1)"/>
    </div></td>
    </tr>
  </table>
EOT;

	return $html;

?>