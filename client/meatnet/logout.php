<HTML>
<HEAD><TITLE>ออกจากระบบ</TITLE>
<BODY bgcolor ="#BEBEBE">
<!-- unset.php -->
<center>
<?php
include 'header.php';
session_start();
session_unset();
session_destroy();
if (ini_get("session.use_cookies")) {
setcookie(session_name(),'',time() - 3600,"/");
}
?>
<br><br>
<?php
echo  "Session deleted";
?>
<?php 
header("location:index.php");
?>
</center>
</BODY>
</HTML>