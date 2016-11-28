<?php
var_dump($_COOKIE);
if ($_COOKIE["login_stub"])
	{
		$encrypted = $_COOKIE["login_stub"];
		$decoded = explode( ",", base64_decode($encrypted));
		var_dump($decoded);
		$user_id = $decoded[0];
		$username = $decoded[1];
		echo("<br/>");
		var_dump($user_id);
		var_dump($username);
		session_start();
		$_SESSION['usercenter']['user_id'] = $user_id;
		$_SESSION['usercenter']['name'] = $username;
		echo("<br/>");
		echo("<br/>");
		echo("<br/>");
		echo("$_SESSION");
		var_dump($_SESSION);
		
		echo("<br/>");
		echo("<br/>");
		echo("$_COOKIE");
		print_r($_COOKIE);
	}
?>
