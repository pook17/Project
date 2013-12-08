<?PHP
session_start() ;
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?PHP
	session_destroy() ;
	exit("<script>alert('ออกจากระบบ ขอบคุณที่ใช้บริกการ');window.location='index.php';
	 </script>");
?>