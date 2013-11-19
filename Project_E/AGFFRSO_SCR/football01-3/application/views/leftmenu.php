<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="layout.css" rel="stylesheet" type="text/css">
<?php
if($_POST)
{
	include('check.php');//// รับค่าตัวแปร
	$username = $_POST['username'];
	$password = $_POST['password'];
	$obj=new Admin;
	$obj->login($username,$password);

}
?>
<?PHP
if(!$_SESSION['a_user'] and !$_SESSION['b_user'])
{
?>
<form action="" method="post">
<table width="220" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><img src="images/menu_01.jpg" width="220" height="48"></td>
  </tr>
  <tr>
    <td><table background="images/menu_02.jpg" width="220" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><table width="200" border="0" align="center" cellpadding="5" cellspacing="0">
          <tr>
            <td width="80" align="right" class="normal">ชื่อผู้ใช้ :</td>
            <td width="100"><input name="username" type="text" id="username" size="10"></td>
          </tr>
          <tr>
            <td align="right" class="normal">รหัสผ่าน :</td>
            <td><input name="password" type="password" id="password" size="10"></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="button" id="button" value="เข้าสู่ระบบ"></td>
          </tr>
        </table>          </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><img src="images/menu_03.jpg" width="220" height="10"></td>
  </tr>
</table>

</form>
<?PHP
}
?>
<?PHP
if($_SESSION['a_user'])
{
?>

<table width="220" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><img src="images/admin_01.jpg" width="220" height="48"></td>
  </tr>
  <tr>
    <td><table background="images/menu_02.jpg" width="220" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><table width="209" border="0" align="center" cellpadding="5" cellspacing="0">
          <tr>
            <td width="20">&nbsp;</td>
            <td width="169" class="normal"><a href="manageroom.php">จัดการสนามฟุตบอลหญ้าเทียม</a></td>
          </tr>
            <tr>
            <td>&nbsp;</td>
            <td class="normal"><a href="managenew.php">จัดการข่าวประชาสัมพันธ์</a></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td class="normal"><a href="listc.php">จัดการสมาชิก</a></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td class="normal"><a href="managebank.php">จัดการข้อมูลธนาคาร</a></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td class="normal"><a href="allbook.php">รายงานการจอง</a></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td class="normal"><a href="allpay.php">รายงานแจ้งชำระเงิน</a></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td class="normal"><a href="report.php">สรุปยอดรายรับ</a></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td class="normal"><a href="logout.php">ออกจากระบบ</a></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><img src="images/menu_03.jpg" width="220" height="10"></td>
  </tr>
</table>

<?PHP
}
?>
<?PHP
if($_SESSION['b_user'])
{
?>
<table width="253" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="253"><img src="images/welcome_01.jpg" width="236" height="48"></td>
  </tr>
  <tr>
    <td><table background="images/menu_02.jpg" width="219" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="219"><table width="236" border="0" align="center" cellpadding="5" cellspacing="0">
          <tr>
            <td width="1">&nbsp;</td>
            <td width="203" class="normal"><a href="editprofile.php">เปลี่ยนข้อมูลส่วนตัว</a></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td class="normal"><a href="myhis.php">ประวัติการจองสนามฟุตบอลหญ้าเทียม</a></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td class="normal"><a href="logout.php">ออกจากระบบ</a></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><img src="images/menu_03.jpg" width="237" height="17"></td>
  </tr>
</table>
<?PHP
}
?>