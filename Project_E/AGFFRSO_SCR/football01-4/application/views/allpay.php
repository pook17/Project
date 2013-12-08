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
        <td width="745" align="center" valign="top" bgcolor="#f7e6d4"><form id="form1" name="form1" method="get" action="">
          <table width="700" border="0" cellspacing="0" cellpadding="5">
            <tr>
              <td align="center" class="normal"><p>หมายเลขใบจอง  :</p>
                <p>
                  <input name="txtsearch" type="text" id="txtsearch" value="<?PHP /*echo $_GET['txtsearch'];*/ ?>" size="10" />
                  <input type="submit" name="button2" id="button2" value="ค้นหา" />
                </p></td>
            </tr>
          </table>
        </form>
          <p>&nbsp;</p>
          <table width="720" border="1" align="center" cellpadding="5" cellspacing="0">
          <tr>
            <td width="117" align="center" bgcolor="#663300" class="normal2"><strong>หมายเลขใบจอง</strong></td>
            <td width="110" align="center" bgcolor="#663300" class="normal2"><strong>ธนาคาร</strong></td>
            <td width="119" align="center" bgcolor="#663300" class="normal2"><strong>วันที่ชำระเงิน</strong></td>
            <td width="155" align="center" bgcolor="#663300" class="normal2"><strong>ยอดชำระเงิน [ บาท ]</strong></td>
            <td width="122" align="center" bgcolor="#663300" class="normal2"><strong>หลักฐานชำระเงิน</strong></td>
            </tr>
          <?PHP
		 /* if(!isset($start)){
$start = 0;
}
$limit = '10'; // แสดงผลหน้าละกี่หัวข้อ
$tx = "";
if($_GET['txtsearch']!= "")
{
$tx .= "and ( booking.bo_code like '%$_GET[txtsearch]%')";	
}

		  $sql = "select * from payment left join bank on ( payment.b_id = bank.b_id ) left join booking on ( payment.bo_id = booking.bo_id ) where 1 $tx order by payment.pa_id desc";
		
		  $result = mysql_query($sql) or die ("error = $sql");
		  $num = mysql_num_rows($result);
		  $sql2 = "select * from payment left join bank on ( payment.b_id = bank.b_id ) left join booking on ( payment.bo_id = booking.bo_id ) where 1 $tx order by payment.pa_id desc limit $start,$limit";
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
            <td align="center" class="normal"><a href="print.php?bo_id=<?PHP /*echo $row['bo_id']; */?>" target="new"><?PHP /*echo $row['bo_code']; */?></a>&nbsp;</td>
            <td class="normal">ธนาคาร<?PHP /*echo $row['b_bank'] */?>--<?PHP /*echo $row['b_account']; */?></td>
            <td class="normal"><?PHP /*echo thai_date2(strtotime($row['pa_date']));*/ ?> เวลา <?PHP /*echo $row['pa_time']; */?></td>
            <td class="normal"><?PHP /*echo $row['pa_price']; */?>&nbsp;</td>
            <td align="center" class="normal"><?PHP /*if($row['pa_pic']){ */?><a href="slip/<?PHP /*echo $row['pa_pic']; */?>" target="new"><img src="images/icon/icon-view.png" width="24" height="24" /></a><?PHP /*}*/ ?></td>
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
echo "[<a href='?txtsearch=$txtsearch&start=".$limit*($i-1)."&page=$i'><B><font color='blue'>$i</B></font></A>]"; //ลิ้งค์ แบ่งหน้า เงื่อนไขที่ 1
}else{
echo "[<a href='?txtsearch=$txtsearch&start=".$limit*($i-1)."&page=$i'><font color='red'>$i</font></A>]"; //ลิ้งค์ แบ่งหน้า เงื่อนไขที่ 2
}
}
*/?>

<?PHP /*if($num=='0') { echo "ไม่มีรายการ"; }; */ ?></p>
         
          <p class="normal">&nbsp;</p></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><?PHP /*require('footer.php');*/ ?></td>
  </tr>
</table>
</body>
</html>