<?php
session_start();
header("Content-Type: text/html; charset=utf-8");
$company = htmlspecialchars(trim($_POST['company']));
$name = htmlspecialchars(trim($_POST['name']));
$email = htmlspecialchars(trim($_POST['email']));
if ($company=='' || $name=='' || $email=='')
{
	header("Location: retake_password.php"); 
	exit;
}

require_once 'intellectual/lib/conn.php';
require_once 'intellectual/lib/class.phpmailer.php';

$sql = " SELECT * FROM `h_user` WHERE `del_flag`='no' AND `check_flag`=9 AND `company`='".$company."' AND `name`='".$name."' AND `email`='".$email."' LIMIT 1 ";
$query = mysql_query($sql);
$total = mysql_num_rows($query);
if ($total==1)
{
	//随机密码
	function create_password($pw_length=8)
	{
		$randpwd = '';
		for ($i = 0; $i < $pw_length; $i++)
		{
			$randpwd .= chr(mt_rand(97, 122));//a-z
			$randpwd .= chr(mt_rand(48, 57));//0-9
			$randpwd .= chr(mt_rand(65, 90));//A-Z
		}
		$randpwd = substr($randpwd, 0, 8);
		return $randpwd;
	}

	$password = create_password(8);
	$sha1_password = sha1($password);
	$mail = new PHPMailer();
	$mail->From = 'chenlu@hioki.com.cn';
	$mail->FromName = "HIOKI智测会";
	$mail->WordWrap = 50;            
	$mail->Subject = "HIOKI智测会找回密码";
	$mail->Body = '
您好，'.$name.'
您在HIOKI智测会新的登录密码为：'.$password.'

您可输入以上密码重新登录后，在[修改会员信息]中重新设置您的密码。

如果您错误的收到了本电子邮件，请您忽略上述内容

HIOKI智测会
'.date('Y-m-d H:i:s').'

本邮件是系统发出的邮件，请勿直接回复。';
	$mail->AddAddress($email);
	$mail->AddBCC('xqy58@163.com');
	$mail->Send();

	$sql_up = " UPDATE `h_user` SET `password`='".$sha1_password."' WHERE `del_flag`='no' AND `check_flag`=9 AND `company`='".$company."' AND `name`='".$name."' AND `email`='".$email."' LIMIT 1 ";
	mysql_query($sql_up);

	echo "<script>alert('密码已发送到您的邮箱，请注意查收！');location.href='http://www.hioki.cn/userscenter/';</script>";
	exit;
}
else
{
	echo "<script>alert('公司名姓名Email不匹配！');history.back();</script>";
	exit;
}
?>