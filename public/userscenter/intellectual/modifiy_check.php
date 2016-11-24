<?php
session_start();
header("Content-Type: text/html; charset=utf-8");
require_once 'lib/conn.php';
require_once 'lib/function.php';
user_login();
$email = $_SESSION['usercenter']['name'];
if ($email=='')
{
	header("Location: login.php");
	exit;
}

$company = htmlspecialchars(trim($_POST['company']));
$dept = htmlspecialchars(trim($_POST['dept']));
$job = htmlspecialchars(trim($_POST['job']));
$name = htmlspecialchars(trim($_POST['name']));
$work1 = htmlspecialchars(trim($_POST['work1']));
$work2 = htmlspecialchars(trim($_POST['work2']));
$postcode = htmlspecialchars(trim($_POST['postcode']));
$address = htmlspecialchars(trim($_POST['address']));
$tel = htmlspecialchars(trim($_POST['tel']));
$fax = htmlspecialchars(trim($_POST['fax']));
$oldpassword = htmlspecialchars(trim($_POST['oldpassword']));
$password = sha1($_POST['password']);
if ($_POST['password']=='')
{
	$newpassword = $oldpassword;
}
else
{
	$newpassword = $password;
}
$sql = " UPDATE `h_user` SET `company`='".$company."', `dept`='".$dept."', `job`='".$job."', `name`='".$name."', `work1`='".$work1."', `work2`='".$work2."', `postcode`='".$postcode."', `address`='".$address."', `tel`='".$tel."', `fax`='".$fax."', `password`='".$newpassword."' WHERE `del_flag`='no' AND `check_flag`='9' AND `email`='".$email."' LIMIT 1 ";
mysql_query($sql);
mysql_close($conn);
header('Location: im_download.php');
exit;
?>
