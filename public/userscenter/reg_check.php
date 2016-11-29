<?php
header('Content-type:text/html;charset=utf-8');
if ($_SERVER['HTTP_REFERER']!='http://www.hioki.cn/usercenter/reg_confirm.php')
{
	//echo "<script>history.back();</script>";
	//exit;
}

$company = htmlspecialchars(trim($_POST['company']));
$dept = htmlspecialchars(trim($_POST['dept']));
$job = htmlspecialchars(trim($_POST['job']));
$name = htmlspecialchars(trim($_POST['name']));
$type = htmlspecialchars(trim($_POST['type']));
$area = htmlspecialchars(trim($_POST['area']));
$work1 = htmlspecialchars(trim($_POST['work1']));
$work2 = htmlspecialchars(trim($_POST['work2']));
$postcode = htmlspecialchars(trim($_POST['postcode']));
$address = htmlspecialchars(trim($_POST['address']));
$tel = htmlspecialchars(trim($_POST['tel']));
$fax = htmlspecialchars(trim($_POST['fax']));
$email = htmlspecialchars(trim($_POST['email']));
$email = strtolower($email);
$password = sha1($_POST['password']);
$is_used = htmlspecialchars(trim($_POST['is_used']));
$hioki_code1 = htmlspecialchars(trim($_POST['hioki_code1']));
$hioki_name1 = htmlspecialchars(trim($_POST['hioki_name1']));
$hioki_code2 = htmlspecialchars(trim($_POST['hioki_code2']));
$hioki_name2 = htmlspecialchars(trim($_POST['hioki_name2']));
$hioki_code3 = htmlspecialchars(trim($_POST['hioki_code3']));
$hioki_name3 = htmlspecialchars(trim($_POST['hioki_name3']));
$other_code1 = htmlspecialchars(trim($_POST['other_code1']));
$other_name1 = htmlspecialchars(trim($_POST['other_name1']));
$other_code2 = htmlspecialchars(trim($_POST['other_code2']));
$other_name2 = htmlspecialchars(trim($_POST['other_name2']));
$other_code3 = htmlspecialchars(trim($_POST['other_code3']));
$other_name3 = htmlspecialchars(trim($_POST['other_name3']));
$info_type = htmlspecialchars(trim($_POST['info_type']));
$feedback =  $_POST['feedback'];
$feedback = str_ireplace('<br>', "\n", $feedback);
$feedback = str_ireplace('<br />', "\n", $feedback);
$feedback = htmlspecialchars(trim($feedback));

$add_time = date('Y-m-d H:i:s');
if ($company=='' || $dept=='' || $name=='' || $type=='' || $area=='' || $work1=='' || $work2==''  || $postcode=='' || $address=='' || $tel=='' || $email=='' || $password=='')
{
	echo "<script>history.back();</script>";
	exit;
}

require_once 'intellectual/lib/class.phpmailer.php';
require_once 'intellectual/lib/conn.php';
require_once 'intellectual/lib/function.php';
$to = 'chenlu@hioki.com.cn';
$message= "公司名:".$company."\n";
$message.= "部门:".$dept."\n";	
$message.= "职位:".$job."\n";	
$message.= "姓名:".$name."\n";	
$message.= "类别:".$type."\n";	
$message.= "区域:".$area."\n";	
$message.= "业种:".switch_work1($work1)."\n";	
$message.= "职种:".switch_work2($work2)."\n";	
$message.= "Email:".$email."\n";	
$message.= "地址:".$address."\n";	
$message.= "邮编:".$postcode."\n";	
$message.= "TEL:".$tel."\n";	
$message.= "FAX:".$fax."\n";	

$sql = "INSERT INTO `h_user` ( `company` , `dept` , `job` , `name` ,`type` ,`area` , `work1` , `work2` , `postcode` , `address` , `tel` , `fax` , `email` , `password` , `is_used` , `hioki_code1` , `hioki_name1` , `hioki_code2` , `hioki_name2` , `hioki_code3` , `hioki_name3` , `other_code1` , `other_name1` , `other_code2` , `other_name2` , `other_code3` , `other_name3` , `info_type` , `feedback` ,	`check_flag` , `add_time` , `del_flag` ) VALUES ( '".$company."', '".$dept."', '".$job."', '".$name."', '".$type."', '".$area."', '".$work1."', '".$work2."', '".$postcode."', '".$address."', '".$tel."', '".$fax."', '".$email."', '".$password."', '".$is_used."', '".$hioki_code1."', '".$hioki_name1."', '".$hioki_code2."', '".$hioki_name2."', '".$hioki_code3."', '".$hioki_name3."', '".$other_code1."', '".$other_name1."', '".$other_code2."', '".$other_name2."', '".$other_code3."', '".$other_name3."', '".$info_type."', '".$feedback."', '0', '".$add_time."', 'no' );";
$query = mysql_query($sql);
mysql_close($conn);
if ($query)
{
	$mail = new PHPMailer();
	$mail->From = $email;
	$mail->FromName = "会员注册";
	$mail->WordWrap = 50;            
	$mail->Subject = "会员注册 (".$company.")";
	$mail->Body = $message;
	$mail->AddAddress($to);
	$mail->Send();
	echo "<script>alert(\"注册信息提交成功，等待系统审核。审核后我们将在当天以邮件形式通知您登陆，请勿重复提交。（审核时间：平日周一-周五8:30-17:30，周六、日提交的将在下周一进行审核）\");location.href='http://www.hioki.cn/';</script>";
	exit;
}
else
{
	echo "<script>alert('此E-mail已被注册，请更换其它邮件地址！');location.href='register.php';</script>";
	exit;
}
?>
