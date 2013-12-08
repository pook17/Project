<?PHP
session_start();
//require('inc/conn_db.php');
//require('inc/function.php');
//checklogin1($_SESSION['b_user']);
//$sql = "select * from customer where c_username = '$_SESSION[b_user]'";
//$result = mysql_query($sql) or die ("error = $sql");
//$row = mysql_fetch_array($result);
//$c_id = $row['c_id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="layout.css" rel="stylesheet" type="text/css" />
<script src="gen_validatorv4.js" type="text/javascript"></script>
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
        <td width="745" valign="top" bgcolor="#f7e6d4"><form action="sql.php" method="post" enctype="multipart/form-data" name="formx" id="formx">
          <table width="700" border="0" align="center" cellpadding="5" cellspacing="0">
            <tr>
              <td colspan="2" align="center" bgcolor="#000000" class="normal2"><strong>แจ้งชำระเงิน</strong></td>
            </tr>
            <tr>
              <td width="269" align="right" bgcolor="#FFFFFF" class="normal">หมายเลขใบจอง :</td>
              <td width="411" bgcolor="#FFFFFF"><select name="bo_id" id="bo_id">
                <option value="">โปรดเลือก</option>
                <?PHP
				/*$sqlc = "select * from booking where c_id = '$c_id' and bo_status = 'รอการชำระเงิน' ";
				$resultc = mysql_query($sqlc) or die ("error = $sqlc");
				while ( $rowc = mysql_fetch_array($resultc))
				{
				*/?>
                <option value="<?PHP /*echo $rowc['bo_id'];*/ ?>"><?PHP /*echo $rowc['bo_code'];*/ ?></option>
                <?PHP
				/*}*/
				?>
              </select></td>
            </tr>
            <tr>
              <td align="right" bgcolor="#FFFFFF" class="normal">ธนาคารที่ชำระเงิน :</td>
              <td bgcolor="#FFFFFF"><select name="b_id" id="b_id">
               <?PHP
				/*$sqlc2 = "select * from bank ";
				$resultc2 = mysql_query($sqlc2) or die ("error = $sqlc2");
				while ( $rowc2 = mysql_fetch_array($resultc2))
				{
				*/?>
                <option value="<?PHP /*echo $rowc2['b_id']; */?>">[ ธนาคาร<?PHP /*echo $rowc2['b_bank'];*/ ?> ] - <?PHP /*echo $rowc2['b_account']; */?></option>
                <?PHP
				/*}*/
				?>
              </select></td>
            </tr>
            <tr>
              <td align="right" bgcolor="#FFFFFF" class="normal">วันที่ชำระเงิน :</td>
              <td bgcolor="#FFFFFF" class="normal3"><input name="start" type="text" id="start" size="10" />
                *</td>
            </tr>
            <tr>
              <td align="right" bgcolor="#FFFFFF" class="normal">เวลา ( ช่วงประมาณ ) :</td>
              <td bgcolor="#FFFFFF" class="normal3"><input name="time" type="text" id="time" size="10" />
                *</td>
            </tr>
            <tr>
              <td align="right" bgcolor="#FFFFFF" class="normal">ยอดชำระเงิน :</td>
              <td bgcolor="#FFFFFF" class="normal3"><input name="total" type="text" id="total" size="10" />
                *</td>
            </tr>
            <tr>
              <td align="right" bgcolor="#FFFFFF" class="normal">หลักฐานการชำระเงิน :</td>
              <td bgcolor="#FFFFFF"><input type="file" name="image_name" id="image_name" /></td>
            </tr>
            <tr>
              <td align="right" bgcolor="#FFFFFF" class="normal">&nbsp;</td>
              <td bgcolor="#FFFFFF"><input type="submit" name="button2" id="button2" value="แจ้งชำระเงิน" />
                <input name="action" type="hidden" id="action" value="payment" /></td>
            </tr>
          </table>
        </form>
         <script language="JavaScript" type="text/javascript"
    xml:space="preserve">//<![CDATA[
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("formx");
  frmvalidator.addValidation("start","req","กรุณากรอกวันที่ชำระเงิน");
  frmvalidator.addValidation("time","req","กรุณากรอกเวลาช่วงเวลาที่ชำระเงิน");
  frmvalidator.addValidation("total","req","กรุณากรอกยอดเงินที่ชำระเงิน");
 
//]]></script> 
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