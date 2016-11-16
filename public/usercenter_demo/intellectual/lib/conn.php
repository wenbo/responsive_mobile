<?php
require 'config.php';
$conn = mysql_connect($database['host'],$database['login'],$database['password']);
if(!$conn) {
	echo "连接数据库出错!";
	exit;
} else {
	$select = mysql_select_db($database['database']);
	if(!$select) {
		echo "选取数据库出错了!";
		exit;
	}
	mysql_query("set names 'utf8'");
}

?>