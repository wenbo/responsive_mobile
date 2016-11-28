<?php
session_start();
setcookie("login_stub", "", time()-3600, "/");
unset($_SESSION['usercenter']['name']);
header('Location: /userscenter/intellectual/intellectual.php');
exit;
?>