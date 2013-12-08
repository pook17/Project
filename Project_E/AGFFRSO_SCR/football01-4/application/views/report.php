<?PHP
session_start();
/*require('inc/conn_db.php');
require('inc/function.php');
checklogin($_SESSION['a_user']);
$start = $_GET['start'];
$end = $_GET['end'];
$show=explode("/",$start); 
$day = $show[0];
$mon = $show[1];
$year = $show[2] - 543;
// วันเริ่ม
$datestart = $year."-".$mon."-".$day;

$show2=explode("/",$end); 
$day2 = $show2[0];
$mon2 = $show2[1];
$year2 = $show2[2] - 543;
// วันเริ่ม
$dateend = $year2."-".$mon2."-".$day2;
*/?>

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
<link type="text/css" href="css/ui-lightness/jquery-ui-1.8.10.custom.css" rel="stylesheet" />	
		<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.10.offset.datepicker.min.js"></script>
		<script type="text/javascript">
		  $(function () {
		    var d = new Date();
		    var toDay = d.getDate() + '/'
        + (d.getMonth() + 1) + '/'
        + (d.getFullYear() + 543);

				// Datepicker
		    $("#date-th").datepicker({  changeYear: true , changeMonth: true,yearRange: '1910:2100',  dateFormat: 'dd/mm/yy', isBuddhist: true, defaultDate: toDay, dayNames: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
              dayNamesMin: ['อา.','จ.','อ.','พ.','พฤ.','ศ.','ส.'],
              monthNames: ['มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'],
              monthNamesShort: ['ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.','พ.ย.','ธ.ค.']});
			  
			   $("#start").datepicker({  changeYear: true , changeMonth: true,yearRange: '1910:2100',  dateFormat: 'dd/mm/yy', isBuddhist: true, defaultDate: toDay, dayNames: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
              dayNamesMin: ['อา.','จ.','อ.','พ.','พฤ.','ศ.','ส.'],
              monthNames: ['มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'],
              monthNamesShort: ['ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.','พ.ย.','ธ.ค.']});
			  
			     $("#end").datepicker({  changeYear: true , changeMonth: true,yearRange: '1910:2100',  dateFormat: 'dd/mm/yy', isBuddhist: true, defaultDate: toDay, dayNames: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
              dayNamesMin: ['อา.','จ.','อ.','พ.','พฤ.','ศ.','ส.'],
              monthNames: ['มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'],
              monthNamesShort: ['ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.','พ.ย.','ธ.ค.']});
			 
			});
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
              <td align="center" class="normal">วันเริ่มต้น : 
                <input name="start" type="text" id="start" value="<?PHP /*echo $_GET['start']*/ ?>" size="10" /> 
                ถึง 
                <input name="end" type="text" id="end" value="<?PHP /*echo $_GET['end']*/ ?>" size="10" /> <input type="submit" name="button2" id="button2" value="ประมวลผล" /></td>
            </tr>
          </table>
        </form>
        <?PHP /*if(($_GET['start']!= "" and $_GET['end'] != "") and ($dateend >= $datestart  )){*/  ?>
        <p>สรูปยอดรายรับวันที่ <?PHP /*echo thai_date2(strtotime($datestart)); */?> ถึง <?PHP /*echo thai_date2(strtotime($dateend)); */?>&nbsp;<table width="720" border="1" align="center" cellpadding="5" cellspacing="0">
          <tr>
            <td width="117" align="center" bgcolor="#663300" class="normal2"><strong>หมายเลขใบจอง</strong></td>
            <td width="165" align="center" bgcolor="#663300" class="normal2"><strong>ลูกค้า</strong></td>
            <td width="208" align="center" bgcolor="#663300" class="normal2"><strong>วันที่จอง</strong></td>
            <td width="180" align="center" bgcolor="#663300" class="normal2"><strong>ยอดชำระเงิน [ บาท ]</strong></td>
            </tr>
          <?PHP

		 /* $sql = "select * from booking left join customer on ( booking.c_id = customer.c_id ) where ( booking.bo_date >= '$datestart' and booking.bo_date <= '$dateend' ) and booking.bo_status = 'ชำระเงินเรียบร้อย'";
		  $result = mysql_query($sql) or die ("error = $sql");		 
		  while ( $row = mysql_fetch_array($result))
		  {
			  $total += $row['bo_total'];
			  
			  if($bg == "#FFFFFF") { //ส่วนของการ สลับสี 
$bg = "#FFFFCC";
} else {
$bg = "#FFFFFF";
}

	 */  ?>  
     
          <tr bgcolor="<?PHP /*echo $bg; */?>" >
            <td align="center" class="normal"><a href="print.php?bo_id=<?PHP /*echo $row['bo_id']; */?>" target="new"><?PHP /*echo $row['bo_code']; */?></a>&nbsp;</td>
            <td class="normal"><?PHP /*echo $row['c_sir'].$row['c_name']."&nbsp;".$row['c_lastname']; */?></td>
            <td class="normal"><?PHP /*echo thai_date2(strtotime($row['bo_date'])); */?></td>
            <td class="normal"><?PHP /*echo number_format($row['bo_total'],2); */?>&nbsp;</td>
            </tr>
           <?PHP
		  /*}*/
		  ?>
            <tr  >
            <td colspan="3" align="right" bgcolor="#FFFFFF" class="normal"><strong>ยอดรวมรายได้ :</strong></td>
            <td bgcolor="#FFFFFF" class="normal3"><?PHP /*echo number_format($total,2); */?>&nbsp;</td>
            </tr>
        </table></p>
        <?PHP
		/*}*/
		?>
        </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><?PHP /*require('footer.php');*/ ?></td>
  </tr>
</table>
</body>
</html>