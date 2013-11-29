<!DOCTYPEhtml>
<html>
<head>
<meta charset="utf-8">
<title>ระบบจองสนามฟุตบอลหญ้าเทียม</title>
</head>

<body>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="/images/index_01.jpg" width="1000" height="481" usemap="#Map" border="0"></td>


<map name="Map" id="Map">
  <area shape="rect" coords="58,435,172,476" href="index.php" />
  <area shape="rect" coords="194,433,337,476" href="register.php" />
  <area shape="rect" coords="534,433,687,475" href="repayment.php" />
  <area shape="rect" coords="358,435,507,478" href="how.php" />
  <area shape="rect" coords="710,431,832,472" href="contact.php" />
</map>



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
            <td width="475" bgcolor="#000000" class="normal2"><strong>ระบบจองสนามฟุตบอลหญ้าเทียม</strong></td>
            <td width="219" align="left" bgcolor="#000000" class="normal2"><strong>วันที่</strong></td>
            </tr>
          <?PHP
		  if(!isset($start)){
$start = 0;
}
$limit = '10'; // แสดงผลหน้าละกี่หัวข้อ
		  //$sql = "select * from news order by n_id desc";
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


			   ?>  
          <tr bgcolor="<?PHP echo $bg; ?>" >
            <td class="normal"><a href="read.php?n_id=<?PHP echo $row['n_id']; ?>"><?PHP echo $row['n_name']; ?></a>&nbsp;</td>
            <td align="left"><span class="normal"><?PHP echo thai_date2(strtotime($row['n_date'])); ?></span></td>
            </tr>
           <?PHP
		  }
		  ?>
        </table>
          <p class="normal">&nbsp;             
               <?PHP
	$page = ceil($num/$limit); // เอา record ทั้งหมด หารด้วย จำนวนที่จะแสดงของแต่ละหน้า

/* เอาผลหาร มาวน เป็นตัวเลข เรียงกัน เช่น สมมุติว่าหารได้ 3 เอามาวลก็จะได้ 1 2 3 */
for($i=1;$i<=$page;$i++){
if($_GET['page']==$i){ //ถ้าตัวแปล page ตรง กับ เลขที่วนได้
echo "[<a href='?start=".$limit*($i-1)."&page=$i'><B><font color='blue'>$i</B></font></A>]"; //ลิ้งค์ แบ่งหน้า เงื่อนไขที่ 1
}else{
echo "[<a href='?start=".$limit*($i-1)."&page=$i'><font color='red'>$i</font></A>]"; //ลิ้งค์ แบ่งหน้า เงื่อนไขที่ 2
}
}



 ?><?PHP if($num=='0') { echo "ไม่มีรายการ"; }; ?></p>
          <table width="720" border="0" cellspacing="0" cellpadding="5">
            <tr>
              <td bgcolor="#000000" class="normal2"><strong>ห้องรับรอง</strong></td>
            </tr>
          </table>
          <p class="normal">&nbsp;</p>
 
    <?PHP
   

	$strSQL2 = "select * from room order by r_id asc";
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
	?>
          <table width="350" bordercolor="#333333" border="1" cellspacing="0" cellpadding="0">
            <tr>
              <td align="center"><p>&nbsp;</p>
                <p><a href="booking.php?r_id=<?PHP echo $objResult['r_id']; ?>"><img src="room/<?PHP echo $pic; ?>" width="300" height="226" /></a></p>
                <table width="300" border="0" cellspacing="0" cellpadding="5">
                  <tr>
                    <td align="center" class="normal"><?PHP echo $objResult['r_name']; ?> ราคา : <?PHP echo number_format($objResult['r_price'],2); ?> บาท</td>
                  </tr>
                </table>
                <p>&nbsp;</p></td>
            </tr>
          </table>
          
           <?PHP
		echo"</td>";
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
	?>
          <p>&nbsp;</p>          
          </td>
      </tr>
    </table></td>
  </tr>
  
    </tr>
</table>