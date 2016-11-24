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

$sql = " SELECT * FROM `h_user` WHERE `del_flag`='no' AND `check_flag`='9' AND `email`='".$email."' LIMIT 1 ";
$query = mysql_query($sql);
$get = mysql_fetch_assoc($query);
if ($get['email']!=$email)
{
	echo "<script>history.back();</script>";
	exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HIOKI-中国区维修服务中心（日置(上海) 商贸有限公司）</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/scrollsmoothly.js"></script>
<script language="javascript" type="text/javascript">
function checkFrom()
{
	var company = document.FORMADD.company.value;
	var dept = document.FORMADD.dept.value;
	var job = document.FORMADD.job.value;
	var name = document.FORMADD.name.value;
	var work1 = document.FORMADD.work1.value;
	var work2 = document.FORMADD.work2.value;
	var password = document.FORMADD.password.value;
	var address = document.FORMADD.address.value;
	var postcode = document.FORMADD.postcode.value;
	var tel = document.FORMADD.tel.value;
	if (company=='')
	{
		alert('请填写公司名');
		document.FORMADD.company.focus();
		return false;
	}
	if (dept=='')
	{
		alert('请填写部门');
		document.FORMADD.dept.focus();
		return false;
	}
	if (job=='')
	{
		alert('请填写职位');
		document.FORMADD.job.focus();
		return false;
	}
	if (name=='')
	{
		alert('请填写姓名');
		document.FORMADD.name.focus();
		return false;
	}
	if (work1=='')
	{
		alert('请填写业种');
		document.FORMADD.work1.focus();
		return false;
	}
	if (work2=='')
	{
		alert('请填写职种');
		document.FORMADD.work2.focus();
		return false;
	}
	if (password!='' && password.length<6)
	{
		alert('密码长度至少为6位数');
		document.FORMADD.password.focus();
		return false;
	}
	if (address=='')
	{
		alert('请填写地址');
		document.FORMADD.address.focus();
		return false;
	}
	if (postcode=='')
	{
		alert('请填写邮编');
		document.FORMADD.postcode.focus();
		return false;
	}
	if (postcode.length!=6)
	{
		alert('邮编为6位数');
		document.FORMADD.postcode.focus();
		return false;
	}
	if (tel=='')
	{
		alert('请填写电话');
		document.FORMADD.tel.focus();
		return false;
	}
}
</script>
</head>

<body>
<?php 
include("../header.php");//加载template
?>
<div class="im_banner"></div>
<div class="news_content clearfix">
<?php 
include("product_left.php");//加载template
?>
  <div class="product_right">
  	<p class="current"><a href="../index.html">首页</a> > <a href="intellectual.html">智测会</a> > 会员信息修改</p>
    <h3 class="product_f25 m_top20">会员信息修改</h3>
    <div class="register_content">
<form name="FORMADD" method="post" action="modifiy_check.php" onsubmit="return checkFrom();">
<input type="hidden" name="oldpassword" value="<?php echo $get['password'];?>" />
      <dl class="register_dl clearfix">
      	<dd class="register_dd">公司名</dd>
        <dt>
          <input name="company" id="company" type="text" class="register_text" value="<?php echo $get['company'];?>" /><span class="register_f14">　例：日置（上海）商贸 有限公司</span>
        </dt>
      </dl>
      <dl class="register_dl clearfix">
      	<dd class="register_dd">部门</dd>
        <dt>
          <input name="dept" id="dept" type="text" class="register_text" value="<?php echo $get['dept'];?>" /><span class="register_f14">　例：营业支援部</span>
        </dt>
      </dl>
      <dl class="register_dl clearfix">
      	<dd class="register_dd">职位</dd>
        <dt>
          <input name="job" id="job" type="text" class="register_text" value="<?php echo $get['job'];?>" /><span class="register_f14">　例：助理</span>
        </dt>
      </dl>
      <dl class="register_dl clearfix">
      	<dd class="register_dd">姓名</dd>
        <dt>
          <input name="name" id="name" type="text" value="<?php echo $get['name'];?>" class="register_text" /><span class="register_f14">　例：张三</span>
        </dt>
      </dl>
      <dl class="register_dl clearfix">
      	<dd class="register_dd">业种</dd>
        <dt>
          <label class="register_dx"><input name="work1" type="radio" value="1" <?php if ($get['work1']=='1') { ?>checked<?php } ?> />&nbsp;&nbsp;食品、纤维</label>
          <label class="register_dx"><input name="work1" type="radio" value="2" <?php if ($get['work1']=='2') { ?>checked<?php } ?> />&nbsp;&nbsp;工业、化学</label>
          <label class="register_dx"><input name="work1" type="radio" value="3" <?php if ($get['work1']=='3') { ?>checked<?php } ?> />&nbsp;&nbsp;钢铁、金属</label>
          <label class="register_dx"><input name="work1" type="radio" value="4" <?php if ($get['work1']=='4') { ?>checked<?php } ?> />&nbsp;&nbsp;运输用机械制造</label>
          <label class="register_dx"><input name="work1" type="radio" value="5" <?php if ($get['work1']=='5') { ?>checked<?php } ?> />&nbsp;&nbsp;其他机械制造</label>
          <label class="register_dx"><input name="work1" type="radio" value="6" <?php if ($get['work1']=='6') { ?>checked<?php } ?> />&nbsp;&nbsp;电机制造</label>
          <label class="register_dx"><input name="work1" type="radio" value="7" <?php if ($get['work1']=='7') { ?>checked<?php } ?> />&nbsp;&nbsp;电力、燃气</label>
          <label class="register_dx"><input name="work1" type="radio" value="8" <?php if ($get['work1']=='8') { ?>checked<?php } ?> />&nbsp;&nbsp;运输、通讯</label>
          <label class="register_dx"><input name="work1" type="radio" value="9" <?php if ($get['work1']=='9') { ?>checked<?php } ?> />&nbsp;&nbsp;服务业</label>
          <label class="register_dx"><input name="work1" type="radio" value="10" <?php if ($get['work1']=='10') { ?>checked<?php } ?> />&nbsp;&nbsp;政府、学校、研究所</label>
          <label class="register_dx"><input name="work1" type="radio" value="11" <?php if ($get['work1']=='11') { ?>checked<?php } ?> />&nbsp;&nbsp;其它</label>
        </dt>
      </dl>
      <dl class="register_dl clearfix">
      	<dd class="register_dd">职种</dd>
        <dt>
          <label class="register_dx"><input name="work2" type="radio" value="1" <?php if ($get['work2']=='1') { ?>checked<?php } ?> />&nbsp;&nbsp;研究、开发</label>
          <label class="register_dx"><input name="work2" type="radio" value="2" <?php if ($get['work2']=='2') { ?>checked<?php } ?> />&nbsp;&nbsp;技术、设计</label>
          <label class="register_dx"><input name="work2" type="radio" value="3" <?php if ($get['work2']=='3') { ?>checked<?php } ?> />&nbsp;&nbsp;生产技术</label>
          <label class="register_dx"><input name="work2" type="radio" value="4" <?php if ($get['work2']=='4') { ?>checked<?php } ?> />&nbsp;&nbsp;制造</label>
          <label class="register_dx"><input name="work2" type="radio" value="5" <?php if ($get['work2']=='5') { ?>checked<?php } ?> />&nbsp;&nbsp;采购</label>
          <label class="register_dx"><input name="work2" type="radio" value="6" <?php if ($get['work2']=='6') { ?>checked<?php } ?> />&nbsp;&nbsp;行政</label>
          <label class="register_dx"><input name="work2" type="radio" value="7" <?php if ($get['work2']=='7') { ?>checked<?php } ?> />&nbsp;&nbsp;销售</label>
          <label class="register_dx"><input name="work2" type="radio" value="8" <?php if ($get['work2']=='8') { ?>checked<?php } ?> />&nbsp;&nbsp;服务人员</label>
          <label class="register_dx"><input name="work2" type="radio" value="9" <?php if ($get['work2']=='9') { ?>checked<?php } ?> />&nbsp;&nbsp;政府人员</label>
          <label class="register_dx"><input name="work2" type="radio" value="10" <?php if ($get['work2']=='10') { ?>checked<?php } ?> />&nbsp;&nbsp;学校、学生</label>
          <label class="register_dx"><input name="work2" type="radio" value="11" <?php if ($get['work2']=='11') { ?>checked<?php } ?> />&nbsp;&nbsp;其它</label>
        </dt>
      </dl>
      <dl class="register_dl clearfix">
      	<dd class="register_dd">密码</dd>
        <dt>
          <input name="password" type="password" id="password" class="register_text" />
        </dt>
      </dl>
      <dl class="register_dl clearfix">
      	<dd class="register_dd">地址</dd>
        <dt>
          <input name="address" id="address" type="text" class="register_text" value="<?php echo $get['address'];?>" />
        </dt>
      </dl>
      <dl class="register_dl clearfix">
      	<dd class="register_dd">邮编</dd>
        <dt>
          <input name="postcode" id="postcode" type="text" class="register_text" value="<?php echo $get['postcode'];?>" />
        </dt>
      </dl>
      <dl class="register_dl clearfix">
      	<dd class="register_dd">TEL</dd>
        <dt>
          <input name="tel" id="tel" type="text" class="register_text" value="<?php echo $get['tel'];?>" />
        </dt>
      </dl>
      <dl class="register_dl clearfix">
      	<dd>FAX</dd>
        <dt>
          <input name="" type="text" class="register_text" value="<?php echo $get['fax'];?>" />
        </dt>
      </dl>
      <input name="" type="submit" value="" class="register_submit" /><input name="" type="reset" value="" class="register_reset" />
</form>
    </div>
    
  </div>
</div>
<p class="m_top45">&nbsp;</p>
<?php 
include("../footer.php");//加载template
?>
</body>
</html>
