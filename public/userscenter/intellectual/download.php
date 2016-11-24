<?php
session_start();
header("Content-Type: text/html; charset=utf-8");
require_once 'lib/conn.php';
require_once 'lib/function.php';
user_login();

$file_id = (int)$_GET['id'];
if ($file_id==0)
{
	header('Location: list.php');
	exit;
}
$sql = " SELECT * FROM `h_file` WHERE `file_id`=".$file_id." LIMIT 1";
$query = mysql_query($sql);
$get = mysql_fetch_assoc($query);
$file = 'documents/'.$get['name'].'.'.$get['type'];
$filename = mb_convert_encoding($file, "gbk", "UTF-8");
if (!file_exists($filename))
{
	header('Location: list.php');
	exit;
}

$user_id = $_SESSION['usercenter']['user_id'];
$category_id = $get['category_id'];
$file_id = $get['file_id'];
$download_time = date('Y-m-d H:i:s');

$sql = " INSERT INTO `h_file_download` (`user_id`, `category_id`, `file_id`, `filename`, `download_time`) VALUES ('".$user_id."', '".$category_id."', '".$file_id."', '".$get['name'].'.'.$get['type']."', '".$download_time."') ";
mysql_query($sql);

$charset='utf-8';
$filename2 = $get['name'].'.'.$get['type'];
$encoded_filename = urlencode($filename2);
$encoded_filename = str_replace("+", "%20", $encoded_filename);
$filename2 = '"'.(strtolower($charset) == 'utf-8' && strexists($_SERVER['HTTP_USER_AGENT'], 'MSIE') ? $encoded_filename : $filename2).'"';

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=".$filename2);
@readfile($filename);
@flush();
@ob_flush();
?>
