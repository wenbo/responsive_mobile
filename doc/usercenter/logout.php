<?php
session_start();
unset($_SESSION['usercenter']['name']);
header('Location: index.php');
exit;
?>