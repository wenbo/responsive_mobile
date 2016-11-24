<?php
session_start();
header("Content-Type: text/html; charset=utf-8");
$username = strtolower(htmlspecialchars(trim($_POST["username"])));
$password = sha1($_POST['password']);
if ($username=='' || $password=='')
{
	header("Location: im_login.php"); 
	exit;
}

require 'lib/conn.php';
$sql = " SELECT * FROM `h_user` WHERE `del_flag`='no' AND `check_flag`=9 AND `email`='".$username."' AND `password`='".$password."' LIMIT 1 ";
$query = mysql_query($sql);
$total = mysql_num_rows($query);
if ($total==1)
{
	$get = mysql_fetch_assoc($query);
	$_SESSION['usercenter']['user_id'] = $get['user_id'];
	$_SESSION['usercenter']['name'] = $username;
	header("Location: intellectual.php"); 
	exit;
}
else
{
	echo "<script>alert('用户名或密码错误！');history.back();</script>";
	exit;
}
?>
