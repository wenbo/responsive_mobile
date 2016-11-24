<?php
function iscan_login()
{
	if ($_SESSION['HID']['name']=='')
	{
		header("Location: login.php");
		exit;
	}
}

function user_login()
{
	if ($_SESSION['usercenter']['name']=='' || $_SESSION['usercenter']['user_id']=='')
	{
		header("Location: im_login.php");
		exit;
	}
}

function get_pageurl()
{
	return 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']. ($_SERVER['QUERY_STRING'] ? '?'.$_SERVER['QUERY_STRING']: '');
}

function strexists($haystack, $needle) 
{
	return !(strpos($haystack, $needle) === FALSE);
}

function switch_work1($str)
{
	switch($str)
	{
		case '1': $name = "食品、纤维"; break;
		case '2': $name = "工业、化学"; break;
		case '3': $name = "钢铁、金属"; break;
		case '4': $name = "运输用机械制造"; break;
		case '5': $name = "其他机械制造"; break;
		case '6': $name = "电机制造"; break;
		case '7': $name = "电力、燃气"; break;
		case '8': $name = "运输、通讯"; break;
		case '9': $name = "服务业"; break;
		case '10': $name = "政府、学校、研究所"; break;
		case '11': $name = "其他"; break;
		default : $name = "未选择"; break;
	}
	return $name;
}

function switch_work2($str)
{
	switch($str)
	{
		case '1': $name = "研究、开发"; break;
		case '2': $name = "技术、设计"; break;
		case '3': $name = "生产技术"; break;
		case '4': $name = "制造"; break;
		case '5': $name = "采购"; break;
		case '6': $name = "行政"; break;
		case '7': $name = "销售"; break;
		case '8': $name = "服务人员"; break;
		case '9': $name = "政府人员"; break;
		case '10': $name = "学校、学生"; break;
		case '11': $name = "其他"; break;
		default : $name = "未选择"; break;
	}
	return $name;
}

function switch_is_used($str)
{
	switch($str)
	{
		case 'yes': $name = "是"; break;
		case 'no': $name = "否"; break;
		default : $name = "未选择"; break;
	}
	return $name;
}

function foreach_info_type($str)
{
	if (!empty($str))
	{
		foreach($str as $s)
		{
			$name[] = switch_info_type($s);
		}
		$name = implode('，', $name);
	}
	else
	{
		$name = '&nbsp;';
	}
	return $name;
}

function foreach_info_type2($str)
{
	if (!empty($str))
	{
		foreach($str as $s)
		{
			$name[] = $s;
		}
		$name = implode(',', $name);
	}
	else
	{
		$name = '&nbsp;';
	}
	return $name;
}

function switch_info_type($str)
{
	switch($str)
	{
		case '1': $name = "综合样本"; break;
		case '2': $name = "新产品信息"; break;
		case '3': $name = "研讨会通知"; break;
		case '4': $name = "展会通知"; break;
		default : $name = ""; break;
	}
	return $name;
}

function switch_check_flag($str)
{
	switch($str)
	{
		case '0': $name = "等待审核"; break;
		case '1': $name = "未通过"; break;
		case '9': $name = "已通过"; break;
		default : $name = ""; break;
	}
	return $name;
}
?>