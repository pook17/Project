<?PHP
session_start();
/*require('inc/conn_db.php');
require('inc/function.php');
$sqlt = "select * from booking where bo_status = 'รอการชำระเงิน'";
$resultt = mysql_query($sqlt) or die ("error = $sqlt");
$day = date("Y-m-d H:i:s");
while ( $rowt = mysql_fetch_array($resultt))
{
   if(DateTimeDiff("$rowt[bo_datetime]","$day") >= 24)
   {
	  $sqlx = "update booking set bo_status = 'ยกเลิก' where bo_id = '$rowt[bo_id]'";
	  mysql_query($sqlx) ;  
   }
}*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="layout.css" rel="stylesheet" type="text/css" />
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
        <td width="745" align="center" valign="top" bgcolor="#f7e6d4"><table width="720" border="1" align="center" cellpadding="5" cellspacing="0">
          <tr>
            <td width="475" bgcolor="#663300" class="normal2"><strong>หัวข้อข่าว</strong></td>
            <td width="219" align="left" bgcolor="#663300" class="normal2"><strong>วันที่</strong></td>
            </tr>
          <?PHP
		 /* if(!isset($start)){
$start = 0;
}
$limit = '10'; // แสดงผลหน้าละกี่หัวข้อ
		  $sql = "select * from news order by n_id desc";
		  $result = mysql_query($sql) or die ("error = $sql");
		  $num = mysql_num_rows($result);
		  $sql2 = "select * from news order by n_id desc limit $start,$limit";
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
            <td class="normal"><a href="read.php?n_id=<?PHP /*echo $row['n_id']; */?>"><?PHP /*echo $row['n_name']; */?></a>&nbsp;</td>
            <td align="left"><span class="normal"><?PHP  /*echo thai_date2(strtotime($row['n_date'])); */?></span></td>
            </tr>
           <?PHP
		   /*}*/
		  ?>
        </table>
          <p class="normal">&nbsp;             
               <?PHP
	/*$page = ceil($num/$limit); // เอา record ทั้งหมด หารด้วย จำนวนที่จะแสดงของแต่ละหน้า

 	//อาผลหาร มาวน เป็นตัวเลข เรียงกัน เช่น สมมุติว่าหารได้ 3 เอามาวลก็จะได้ 1 2 3 
for($i=1;$i<=$page;$i++){
if($_GET['page']==$i){ //ถ้าตัวแปล page ตรง กับ เลขที่วนได้
echo "[<a href='?start=".$limit*($i-1)."&page=$i'><B><font color='blue'>$i</B></font></A>]"; //ลิ้งค์ แบ่งหน้า เงื่อนไขที่ 1
}else{
echo "[<a href='?start=".$limit*($i-1)."&page=$i'><font color='red'>$i</font></A>]"; //ลิ้งค์ แบ่งหน้า เงื่อนไขที่ 2
}
}
 */?>
 
 <?PHP /*if($num=='0') { echo "ไม่มีรายการ"; }; */ ?></p>
          <table width="720" border="0" cellspacing="0" cellpadding="5">
            <tr>
              <td bgcolor="#663300" class="normal2"><strong>ห้องรับรอง</strong></td>
            </tr>
          </table>
          <p class="normal">&nbsp;</p>
 
    <?PHP
	 /*$strSQL2 = "select * from room order by r_id asc";
	$objQuery2 = mysql_query($strSQL2) or die ("Error Query [".$strSQL2."]");
	echo"<table border=\"0\"  cellspacing=\"0\" cellpadding=\"2\"><tr>";	
	$intRows = 0;
	while($objResult = mysql_fetch_array($objQuery2))
	{
	$intRows++;
	echo "<td>";
	/// เช็ครูปว่ามีมั้ย
if($objResult['r_pic'])
{
$pic = $objResult['r_pic'];	
}else
{
$pic = "noAvatar.png";	
}									
	*/?>
          <table width="350" bordercolor="#333333" border="1" cellspacing="0" cellpadding="0">
            <tr>
              <td align="center"><p>&nbsp;</p>
                <p><a href="booking.php?r_id=<?PHP  /*echo $objResult['r_id']; */?>"><img src="room/<?PHP /*echo $pic; */?>" width="300" height="226" /></a></p>
                <table width="300" border="0" cellspacing="0" cellpadding="5">
                  <tr>
                    <td align="center" class="normal"><?PHP /*echo $objResult['r_name']; */?> ราคา : <?PHP /*echo number_format($objResult['r_price'],2); */?> บาท</td>
                  </tr>
                </table>
                <p>&nbsp;</p></td>
            </tr>
          </table>
          
           <?PHP
		/*echo"</td>";
		if(($intRows)%2==0)
		{
		echo"</tr>";
		}
		else
		{
		echo "<td>";
		}	
	}
	echo"</tr></table>";
	*/?>
          <p>&nbsp;</p>          
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