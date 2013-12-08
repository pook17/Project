<?PHP
session_start();
/*require('inc/conn_db.php');
require('inc/function.php');
checklogin1($_SESSION['b_user']);
$sql = "select * from customer where c_username = '$_SESSION[b_user]'";
$result = mysql_query($sql) or die ("error = $sql");
$row = mysql_fetch_array($result);*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="layout.css" rel="stylesheet" type="text/css" />
<script src="gen_validatorv4.js" type="text/javascript"></script>
</head>
<body>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><?PHP /*require('head.php');*/ ?></td>
  </tr>
  <tr>
    <td><table width="1000" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="3" bgcolor="#f7e6d4">&nbsp;</td>
      </tr>
      <tr>
        <td width="35" valign="top" bgcolor="#f7e6d4">&nbsp;</td>
        <td width="220" valign="top" bgcolor="#f7e6d4"><?PHP require('leftmenu.php'); ?></td>
        <td width="745" valign="top" bgcolor="#f7e6d4"><form id="formx" name="formx" method="post" action="sql.php">
          <table width="700" border="1" align="center" cellpadding="5" cellspacing="0">
            <tr>
              <td colspan="2" align="center" bgcolor="#663300" class="normal2">สมัครสมาชิก</td>
            </tr>
            <tr>
              <td width="276" align="right" bgcolor="#FFFFFF" class="normal">นามนำหน้า :</td>
              <td width="398" bgcolor="#FFFFFF"><select name="sir" id="sir">
                <option value="นาย" <?PHP /*if($row['c_sir']=="นาย") { echo "selected='selected'"; } */?>>นาย</option>
                <option value="นาง" <?PHP /*if($row['c_sir']=="นาง") { echo "selected='selected'"; } */?>>นาง</option>
                <option value="นางสาว" <?PHP /*if($row['c_sir']=="นางสาว") { echo "selected='selected'"; } */?>>นางสาว</option>
              </select></td>
            </tr>
            <tr>
              <td align="right" bgcolor="#FFFFFF" class="normal">ชื่อ :</td>
              <td bgcolor="#FFFFFF" class="normal3"><input name="name" type="text" id="name" value="<?PHP /*echo $row['c_name']; */?>" size="10" />
                *</td>
            </tr>
            <tr>
              <td align="right" bgcolor="#FFFFFF" class="normal">นามสกุล :</td>
              <td bgcolor="#FFFFFF" class="normal3"><input name="lastname" type="text" id="lastname" value="<?PHP /*echo $row['c_lastname']; */?>" size="10" />
*</td>
            </tr>
            <tr>
              <td align="right" bgcolor="#FFFFFF" class="normal">เบอร์โทร :</td>
              <td bgcolor="#FFFFFF" class="normal3"><input name="tel" type="text" id="tel" value="<?PHP /*echo $row['c_tel']; */?>" size="10" maxlength="10" />
*</td>
            </tr>
            <tr>
              <td align="right" valign="top" bgcolor="#FFFFFF" class="normal">ที่อยู่ :</td>
              <td bgcolor="#FFFFFF" class="normal3"><textarea name="address" id="address" cols="45" rows="5"><?PHP /*echo $row['c_address']; */?></textarea>
                *</td>
            </tr>
            <tr>
              <td align="right" valign="top" bgcolor="#FFFFFF" class="normal">อีเมลล์ :</td>
              <td bgcolor="#FFFFFF" class="normal3"><input name="email" type="text" id="email" value="<?PHP /*echo $row['c_email']; */?>" />
                *</td>
            </tr>
            <tr>
              <td align="right" valign="top" bgcolor="#FFFFFF" class="normal">ชื่อผู้ใช้ :</td>
              <td bgcolor="#FFFFFF" class="normal3"><?PHP /*echo $row['c_username']; */?>&nbsp;</td>
            </tr>
            <tr>
              <td align="right" valign="top" bgcolor="#FFFFFF" class="normal">รหัสผ่าน :</td>
              <td bgcolor="#FFFFFF" class="normal3"><input name="password" type="text" id="password" value="<?PHP /*echo $row['c_password']; */?>" size="10" />
*</td>
            </tr>
            <tr>
              <td align="right" valign="top" bgcolor="#FFFFFF" class="normal">&nbsp;</td>
              <td bgcolor="#FFFFFF" class="normal3"><input type="submit" name="button2" id="button2" value="แก้ไขข้อมูลส่วนตัว" />
                <input name="action" type="hidden" id="action" value="editprofile" />
                <input name="c_id" type="hidden" id="c_id" value="<?PHP /*echo $row['c_id']; */?>" /></td>
            </tr>
          </table>
        </form>
         <script language="JavaScript" type="text/javascript"
    xml:space="preserve">//<![CDATA[
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("formx");
  frmvalidator.addValidation("name","req","กรุณากรอกชื่อ");
  frmvalidator.addValidation("lastname","req","กรุณากรอกนามสกุล");
  frmvalidator.addValidation("tel","req","กรุณากรอกเบอร์โทร");
  frmvalidator.addValidation("tel","numeric","เบอร์โทรต้องเป็นตัวเลข");
  frmvalidator.addValidation("tel","minlen=10","เบอร์โทรต้องมี 10 หลัก");
  frmvalidator.addValidation("address","req","กรุณากรอกที่อยู่");
  frmvalidator.addValidation("email","req","กรุณากรอกอีเมลล์");
  frmvalidator.addValidation("email","email","โปรดตรวจสอบรูปแบบอีเมลล์");
  frmvalidator.addValidation("password","req","กรุณากรอกรหัสผ่าน");
  frmvalidator.addValidation("password","regexp=^[abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ]+$","รหัสผ่านต้องเป็นอักษรภาษาอังกฤษหรือตัวเลขเท่านั้น");
  frmvalidator.addValidation("password","minlen=5","รหัสผ่านต้องมีอย่างน้อย 5 ตัวอักษร");  
//]]></script> 
        </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><?PHP /*require('footer.php'); */?></td>
  </tr>
</table>
</body>
</html>