<?PHP
session_start();
//require('inc/conn_db.php');
//require('inc/function.php');
//checklogin($_SESSION['a_user']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="layout.css" rel="stylesheet" type="text/css" />
<script src="gen_validatorv4.js" type="text/javascript"></script>
<script>
function confirmDelete(delUrl) {
  if (confirm("คุณแน่ใจหรือไม่ว่าจะลบ")) {
    document.location = delUrl;
  }
}
</script>
</head>
<body>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><?PHP /*require('head.php'); */?></td>
  </tr>
  <tr>
    <td><table width="1000" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="3" bgcolor="#f7e6d4">&nbsp;</td>
      </tr>
      <tr>
        <td width="35" valign="top" bgcolor="#f7e6d4">&nbsp;</td>
        <td width="220" valign="top" bgcolor="#f7e6d4"><?PHP require('leftmenu.php'); ?></td>
        <td width="745" align="center" valign="top" bgcolor="#f7e6d4"><table width="720" border="1" align="center" cellpadding="5" cellspacing="0">
          <tr>
            <td width="81" bgcolor="#663300" class="normal2"><strong>ธนาคาร</strong></td>
            <td width="105" bgcolor="#663300" class="normal2"><strong>สาขา</strong></td>
            <td width="106" align="left" bgcolor="#663300" class="normal2"><strong>หมายบัญชี</strong></td>
            <td width="143" align="left" bgcolor="#663300" class="normal2"><strong>ชื่อบัญชี</strong></td>
            <td width="104" align="center" bgcolor="#663300" class="normal2"><strong>แก้ไข</strong></td>
            <td width="107" align="center" bgcolor="#663300" class="normal2"><strong>ลบ</strong></td>
          </tr>
          <?PHP
		 /* if(!isset($start)){
$start = 0;
}
$limit = '10'; // แสดงผลหน้าละกี่หัวข้อ
		  $sql = "select * from bank order by b_id desc";
		  $result = mysql_query($sql) or die ("error = $sql");
		  $num = mysql_num_rows($result);
		  $sql2 = "select * from bank order by b_id desc limit $start,$limit";
		  $result2 = mysql_query($sql2) or die ("error = $sql2");		 
		  while ( $row = mysql_fetch_array($result2))
		  {
			  if($bg == "#FFFFFF") { //ส่วนของการ สลับสี 
$bg = "#FFFFCC";
} else {
$bg = "#FFFFFF";
}


			  */ ?>  
          <tr bgcolor="<?PHP /*echo $bg;*/ ?>" >
            <td class="normal"><?PHP /*echo $row['b_bank'];*/ ?>&nbsp;</td>
            <td class="normal"><?PHP /*echo $row['b_branch']; */?></td>
            <td align="left"><span class="normal"><?PHP /*echo $row['b_account']; */?></span></td>
            <td align="left"><span class="normal"><?PHP /*echo $row['b_name'];*/ ?></span></td>
            <td align="center"><a href="editmanagebank.php?b_id=<?PHP /*echo $row['b_id']; */?>"><img src="/images/icon/Edit-icon.png" width="24" height="24" /></a></td>
            <td align="center"><a href="javascript:confirmDelete('sql.php?action=delbank&b_id=<?PHP /*echo $row['b_id']; */?>')"><img src="/images/icon/icon-delete.png" width="24" height="24" /></a></td>
          </tr>
           <?PHP
		 /* }*/
		  ?>
        </table>
          <p class="normal">&nbsp;             
               <?PHP
	/*$page = ceil($num/$limit); // เอา record ทั้งหมด หารด้วย จำนวนที่จะแสดงของแต่ละหน้า

	// เอาผลหาร มาวน เป็นตัวเลข เรียงกัน เช่น สมมุติว่าหารได้ 3 เอามาวลก็จะได้ 1 2 3 
for($i=1;$i<=$page;$i++){
if($_GET['page']==$i){ //ถ้าตัวแปล page ตรง กับ เลขที่วนได้
echo "[<a href='?start=".$limit*($i-1)."&page=$i'><B><font color='blue'>$i</B></font></A>]"; //ลิ้งค์ แบ่งหน้า เงื่อนไขที่ 1
}else{
echo "[<a href='?start=".$limit*($i-1)."&page=$i'><font color='red'>$i</font></A>]"; //ลิ้งค์ แบ่งหน้า เงื่อนไขที่ 2
}
}
 */?>
 
 <?PHP /*if($num=='0') { echo "ไม่มีรายการ"; }; */?></p>
          <form action="sql.php" method="post" enctype="multipart/form-data" name="formx" id="formx">
            <table width="720" border="1" align="center" cellpadding="5" cellspacing="0">
              <tr>
                <td colspan="2" align="center" bgcolor="#663300" class="normal2"><strong>ข้อมูลธนาคาร</strong></td>
              </tr>
              <tr>
                <td width="305" align="right" bgcolor="#FFFFFF" class="normal">ธนาคาร :</td>
                <td width="389" bgcolor="#FFFFFF" class="normal3"><input name="bank" type="text" id="bank" size="10" />
                  *</td>
              </tr>
              <tr>
                <td align="right" bgcolor="#FFFFFF" class="normal">สาขา :</td>
                <td bgcolor="#FFFFFF" class="normal3"><input type="text" name="branch" id="branch" />
                  *</td>
              </tr>
              <tr>
                <td align="right" bgcolor="#FFFFFF" class="normal">หมายเลขบัญชี :</td>
                <td bgcolor="#FFFFFF" class="normal3"><input name="account" type="text" id="account" size="10" maxlength="10" />
                  *</td>
              </tr>
              <tr>
                <td align="right" bgcolor="#FFFFFF" class="normal">ชื่อบัญชี :</td>
                <td bgcolor="#FFFFFF" class="normal3"><input type="text" name="name" id="name" />
                  *</td>
              </tr>
              <tr>
                <td align="right" bgcolor="#FFFFFF" class="normal">&nbsp;</td>
                <td bgcolor="#FFFFFF" class="normal3"><input type="submit" name="button2" id="button2" value="เพิ่มข้อมูลธนาคาร" />
                  <input name="action" type="hidden" id="action" value="addbank" /></td>
              </tr>
            </table>
          </form>
           <script language="JavaScript" type="text/javascript"
    xml:space="preserve">//<![CDATA[
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("formx");
  frmvalidator.addValidation("bank","req","กรุณากรอกชื่อธนาคาร");
  frmvalidator.addValidation("branch","req","กรุณากรอกชื่อสาขา");
  frmvalidator.addValidation("account","req","กรุณากรอกหมายเลขบัญชี");
  frmvalidator.addValidation("account","numeric","หมายเลขบัญชีต้องเป็นตัวเลข");
  frmvalidator.addValidation("account","minlen=10","หมายเลขบัญชีต้องมี 10 หลัก");
   frmvalidator.addValidation("name","req","กรุณากรอกชื่อบัญชี");
//]]></script> 
          <p class="normal">&nbsp;</p></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><?PHP /*require('footer.php'); */?></td>
  </tr>
</table>
</body>
</html>