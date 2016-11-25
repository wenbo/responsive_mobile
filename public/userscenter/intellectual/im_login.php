<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HIOKI-中国区维修服务中心（日置(上海) 商贸有限公司）</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/scrollsmoothly.js"></script>
<script type="text/javascript" src="../js/tab.js"></script>
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
  	<p class="current"><a href="/">首页</a> > 智测会</p>
    <h3 class="product_f25 m_top20">HIOKI智测会欢迎您！</h3>
    <div class="recorder_content recorder_f16">
      <div class="recorder_sign clearfix" style="margin:0;">
      	<p>如果还没有登陆客户信息，请先进行登录。</p>
<script language="javascript">

function check()

{

  var username = document.getElementById('username').value;

  if (username==''){

    alert('请输入Email');

    document.getElementById('username').focus();

    return false;

  }

  if (!/\w{1,}[@][\w\-]{1,}([.]([\w\-]{1,})){1,3}$/.test(username)){

    alert('Email格式不合法');

    document.getElementById('username').focus();

    return false;

  }

  var password = document.getElementById('password').value;

  if (password=='')

  {

    alert('请输入密码');

    document.getElementById('password').focus();

    return false;

  }

}

</script>

<form action="login_check.php" method="post" onsubmit="return check();">
        <div class="recorder_please">
          <div class="m_top25 clearfix"><label>用户名<br />(邮箱地址)</label><input name="username" id="username" type="text" /></div>
          <div class="m_top25 clearfix"><label class="m_top10">密　码</label><input name="password" id="password" type="password" /><br />
<p><a href="/userscenter/retake_password.php">忘记密码</a></p></div>
        </div>
        <input name="" type="submit" class="recorder_login" value="" />
</form>

        <p class="m_top35"><a href="../register.php"><img src="../images/recorder04_02.jpg" width="197" height="86" /></a></p>
      </div>
    </div>
    
    
    
  </div>
</div>
<p class="m_top45">&nbsp;</p>
<?php 
include("../footer.php");//加载template
?>
</body>
</html>
