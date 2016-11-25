<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HIOKI-中国区维修服务中心（日置(上海) 商贸有限公司）</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/scrollsmoothly.js"></script>
<script type="text/javascript" src="js/tab.js"></script>
	 <script language="javascript" type="text/javascript">
function checkFrom()
{
	var company = document.FORMADD.company.value;
	var name = document.FORMADD.name.value;
	var email = document.FORMADD.email.value;
	if (company=='')
	{
		alert('请填写公司名');
		document.FORMADD.company.focus();
		return false;
	}
	if (name=='')
	{
		alert('请填写姓名');
		document.FORMADD.name.focus();
		return false;
	}
	if (email=='')
	{
		alert('请填写Email');
		document.FORMADD.email.focus();
		return false;
	}
	if (!/\w{1,}[@][\w\-]{1,}([.]([\w\-]{1,})){1,3}$/.test(email)){
		alert('Email格式不合法');
		document.FORMADD.email.focus();
		return false;
	}
}
</script>
</head>

<body>
<?php 
include("./header.php");//加载template
?>
<div class="register_banner"></div>
<div class="news_content clearfix">
  <div class="product_left" >
	<h3>忘记密码<br />
	<span class="hioki_f15">Retakepassword</span></h3>
	
  </div>
  <div class="product_right">
  	<p class="current"><a href="index.html">首页</a> > 忘记密码</p>
    <h3 class="hioki_category_title m_top20">忘记密码</h3>
    <p class="m_top10">请在下面填写您注册时的信息，若您登录后台修改过您的个人信息，则请填写您修改后的信息；<br />
提交信息后我们将发送新的密码到您的注册邮箱；<br />
若您有任何疑问可以联系<a href="mailto:chenlu@hioki.com.cn">chenlu@hioki.com.cn</a>。</p>
    <p class="m_top20">红色星号标注的项目为必须填写的项目</p>
		<form name="FORMADD" method="post" action="retake_password_check.php" onsubmit="return checkFrom();">
    <div class="register_content">
      <dl class="register_dl clearfix">
      	<dd class="register_dd">公司名</dd>
        <dt>
          <input name="company" id="company" type="text" class="register_text" /><span class="register_f14">　例：日置（上海）商贸 有限公司</span>
        </dt>
      </dl>
      <dl class="register_dl clearfix">
      	<dd class="register_dd">姓名</dd>
        <dt>
          <input name="name" id="name" type="text" class="register_text" /><span class="register_f14">　例：张三</span>
        </dt>
      </dl>
      <dl class="register_dl clearfix">
      	<dd class="register_dd">Email</dd>
        <dt>
          <input name="email" id="email" type="text" class="register_text" /><span class="register_f14">　例：info@hioki.com.cn</span>
        </dt>
      </dl>
      <input name="" type="submit" value="" class="register_submit" /><input name="" type="reset" value="" class="register_reset" />
    </div>
    </form>
    <p class="m_top45">&nbsp;</p>
  </div>
</div>
<?php 
include("./footer.php");//加载template
?>
</body>
</html>
