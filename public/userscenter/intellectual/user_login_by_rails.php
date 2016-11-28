<?php
$username = htmlspecialchars(trim($_POST["username"]));
$user_id = htmlspecialchars(trim($_POST["user_id"]));
if ($username=='' || $user_id=='')
{
	header("Location: im_login.php"); 
	exit;
}

$_SESSION['usercenter']['user_id'] = $user_id;
$_SESSION['usercenter']['name'] = $username;
exit;
?>
