<?php
if ($_SERVER['HTTP_REFERER']!='http://www.hioki.cn/usercenter/reg.php')
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
$password = htmlspecialchars(trim($_POST['password']));
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
$info_type = $_POST['info_type'];
$feedback = htmlspecialchars(trim($_POST['feedback']));
if ($company=='' || $dept=='' || $name=='' || $type=='' || $area=='' || $work1=='' || $work2==''  || $postcode=='' || $address=='' || $tel=='' || $email=='' || $password=='')
{
	header("Location: reg.php");
	exit;
}
require_once 'intellectual/lib/function.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>会员注册确认页面</title>
<link rel="stylesheet" type="text/css" href="css/style.css" media="all">
</head>
<body>
<table width="800" style="margin:0 auto" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="171" height="50" align="left">&nbsp;<a href="index.php"><img src="img/logo.gif" border="0" /></a></td>
    <td width="491" align="left"><h1>日置(上海) 商贸有限公司　会员注册</h1></td>
    <td width="128" align="right">&nbsp;</td>
  </tr>
  <tr>
    <td height="3" colspan="3" bgcolor="#2b6600"></td>
  </tr>
  <tr>
    <td colspan="3"><h2>会员注册 — 注册信息确认</h2></td>
  </tr>
</table>
<form name="FORMADD" method="post" action="reg_check.php">
<input type="hidden" name="company" value="<?php echo $company;?>" />
<input type="hidden" name="dept" value="<?php echo $dept;?>" />
<input type="hidden" name="job" value="<?php echo $job;?>" />
<input type="hidden" name="name" value="<?php echo $name;?>" />
<input type="hidden" name="type" value="<?php echo $type;?>" />
<input type="hidden" name="area" value="<?php echo $area;?>" />
<input type="hidden" name="work1" value="<?php echo $work1;?>" />
<input type="hidden" name="work2" value="<?php echo $work2;?>" />
<input type="hidden" name="postcode" value="<?php echo $postcode;?>" />
<input type="hidden" name="address" value="<?php echo $address;?>" />
<input type="hidden" name="tel" value="<?php echo $tel;?>" />
<input type="hidden" name="fax" value="<?php echo $fax;?>" />
<input type="hidden" name="email" value="<?php echo $email;?>" />
<input type="hidden" name="password" value="<?php echo $password;?>" />
<input type="hidden" name="is_used" value="<?php echo $is_used;?>" />
<input type="hidden" name="hioki_code1" value="<?php echo $hioki_code1;?>" />
<input type="hidden" name="hioki_name1" value="<?php echo $hioki_name1;?>" />
<input type="hidden" name="hioki_code2" value="<?php echo $hioki_code2;?>" />
<input type="hidden" name="hioki_name2" value="<?php echo $hioki_name2;?>" />
<input type="hidden" name="hioki_code3" value="<?php echo $hioki_code3;?>" />
<input type="hidden" name="hioki_name3" value="<?php echo $hioki_name3;?>" />
<input type="hidden" name="other_code1" value="<?php echo $other_code1;?>" />
<input type="hidden" name="other_name1" value="<?php echo $other_name1;?>" />
<input type="hidden" name="other_code2" value="<?php echo $other_code2;?>" />
<input type="hidden" name="other_name2" value="<?php echo $other_name2;?>" />
<input type="hidden" name="other_code3" value="<?php echo $other_code3;?>" />
<input type="hidden" name="other_name3" value="<?php echo $other_name3;?>" />
<input type="hidden" name="info_type" value="<?php echo foreach_info_type2($info_type);?>" />
<input type="hidden" name="feedback" value="<?php echo nl2br($feedback);?>" />
<table width="800" style="margin:0 auto" cellspacing="0" cellpadding="0" align="center" border="0" class="tb tb2">
<tr>
<th width="18%" class="title">公司名</th>
<td width="82%"><?php echo $company;?>&nbsp;</td>
</tr>
<tr>
<th class="title">部门</th>
<td><?php echo $dept;?>&nbsp;</td>
</tr>
<tr>
<th class="title">职位</th>
<td><?php echo $job;?>&nbsp;</td>
</tr>
<tr>
<th class="title">姓名</th>
<td><?php echo $name;?>&nbsp;</td>
</tr>
<tr>
<th class="title">类别</th>
<td><?php echo $type;?>&nbsp;</td>
</tr>
<tr>
<th class="title">区域</th>
<td><?php echo $area;?>&nbsp;</td>
</tr>
<tr>
<th class="title">业种</th>
<td><?php echo switch_work1($work1);?>&nbsp;</td>
</tr>
<tr>
<th class="title">职种</th>
<td><?php echo switch_work2($work2);?>&nbsp;</td>
</tr>
<tr>
<th class="title">Email</th>
<td><?php echo $email;?>&nbsp;</td>
</tr>
<tr>
<th class="title">密码</th>
<td><?php echo $password;?>&nbsp;</td>
</tr>
<tr>
<th class="title">地址</th>
<td><?php echo $address;?>&nbsp;</td>
</tr>
<tr>
<th class="title">邮编</th>
<td><?php echo $postcode;?>&nbsp;</td>
</tr>
<tr>
<th class="title">TEL</th>
<td><?php echo $tel;?>&nbsp;</td>
</tr>
<tr>
<th class="title">FAX</th>
<td><?php echo $fax;?>&nbsp;</td>
</tr>
<tr>
<th class="title">是否使用日置产品</th>
<td><?php echo switch_is_used($is_used);?>&nbsp;</td>
</tr>
<tr>
<th class="title">日置产品1</th>
<td>
型号：<?php echo $hioki_code1;?><br />
名称：<?php echo $hioki_name1;?></td>
</tr>
<tr>
<th class="title">日置产品2</th>
<td>
型号：<?php echo $hioki_code2;?><br />
名称：<?php echo $hioki_name2;?></td>
</tr>
<tr>
<th class="title">日置产品3</th>
<td>
型号：<?php echo $hioki_code3;?><br />
名称：<?php echo $hioki_name3;?></td>
</tr>
<tr>
<th class="title">其他产品1</th>
<td>
型号：<?php echo $other_code1;?><br />
名称：<?php echo $other_name1;?></td>
</tr>
<tr>
<th class="title">其他产品2</th>
<td>
型号：<?php echo $other_code2;?><br />
名称：<?php echo $other_name2;?></td>
</tr>
<tr>
<th class="title">其他产品3</th>
<td>
型号：<?php echo $other_code3;?><br />
名称：<?php echo $other_name3;?></td>
</tr>
<tr>
<th class="title">希望得到哪种信息</th>
<td><?php echo foreach_info_type($info_type);?>&nbsp;</td>
</tr>
<tr>
<th class="title">意见和建议</th>
<td><?php echo nl2br($feedback);?>&nbsp;</td>
</tr>
</table>
<div align="center">
<br>
<input type="submit" value="　提 交　">
&nbsp;&nbsp;
<input type="button" value="　返 回　" onclick="javascript:history.back();">
</div>
</form>
<p id="footer">Copyright <?php echo date('Y');?> HIOKI All Rights Reserved.</p>
</body>
</html>
