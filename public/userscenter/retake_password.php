<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>忘记密码｜HIOKI-日置(上海) 商贸有限公司</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="/assets_doc/front/html/css/style.css" rel="stylesheet" type="text/css" />
<link href="/assets_doc/front/html/css/pad.css" rel="stylesheet" type="text/css" />
<link href="/assets_doc/front/html/css/sp.css" rel="stylesheet" type="text/css" />

<script src="/assets_doc/front/html/js/scrollsmoothly.js"></script>
<script src="/assets_doc/front/html/js/jquery-1.9.1.js"></script>
<script type="text/javascript">           
	$(document).ready(function(){
	$(".sidebar_search").mouseover(function() {
  $(this).stop();
  $(this).animate({width: 365}, 400);
	})
	$(".sidebar_search").mouseout(function() {
  $(this).stop();
  $(this).animate({width: 75}, 400);
	});
	});
</script>
<script type="text/javascript">           
	$(document).ready(function(){
	$(".sidebar_search02").mouseover(function() {
  $(this).stop();
  $(this).animate({width: 365}, 400);
	})
	$(".sidebar_search02").mouseout(function() {
  $(this).stop();
  $(this).animate({width: 75}, 400);
	});
	});
</script>
<link rel="stylesheet" media="screen" href="/assets_doc/front/html/css/colorbox.css" />
<script src="/assets_doc/front/html/js/jquery.colorbox.js"></script>
<script src="/assets_doc/front/html/js/script.js"></script>
<script src="/assets_doc/front/html/js/tabslide.js"></script>
<script>
	$(document).ready(function(){
		var winWidth;
    if (window.innerWidth)
      winWidth = window.innerWidth;
    else if ((document.body) && (document.body.clientWidth)) {
      winWidth = document.body.clientWidth;
    }
	//Examples of how to assign the Colorbox event to elements
		if(winWidth > 1300){
			$(".health01").colorbox({iframe:true, innerWidth:1300, innerHeight:630});
		}
		if(winWidth > 767 & winWidth < 1300){
			$(".health01").colorbox({iframe:true, innerWidth:768, innerHeight:630});
		}
		if(winWidth < 767){
			{$(".health01").removeClass("cboxElement");}
		}
		$(".callbacks").colorbox({
			onOpen:function(){ alert('onOpen: colorbox is about to open'); },
			onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
			onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
			onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
			onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
		});

		$('.non-retina').colorbox({rel:'group5', transition:'none'})
		$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
		//Example of preserving a JavaScript event for inline calls.
		$("#click").click(function(){ 
			$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
			return false;
		});
	});
</script>

<script type="text/javascript" src="/assets_doc/front/html/js/default.js"></script>
<script type="text/javascript" src="/assets_doc/front/html/js/Effect.js"></script>
<script type="text/javascript" src="/assets_doc/front/html/js/common.js"></script>
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
<div class="password_banner sp_none pad_none"></div>
<div class="pad_block"><img src="/assets_doc/front/html/images/password_r1_c1_pad.jpg" width=100%></div>
<div class="sp_block"><img src="/assets_doc/front/html/images/password_r1_c1_sp.jpg" class="sp_w100"></div>
<div class="news_content clearfix">
  <div class="product_left sp_none" >
	<h3>忘记密码<br />
	<span class="hioki_f15">password</span></h3>
	
  </div>
  <div class="product_right product_right_ins">
    <p class="current sp_none"><a href="/index.html">首页</a> > 忘记密码</p>
    <h3 class="hioki_category_title m_top20 sp_w100 sp_color">忘记密码</h3>
    <p class="m_top10 sp_mt20">请在下面填写您注册时的信息，若您登录后台修改过您的个人信息，则请填写您修改后的信息；<br />
提交信息后我们将发送新的密码到您的注册邮箱；<br />
若您有任何疑问可以联系<a href="mailto:chenlu@hioki.com.cn">chenlu@hioki.com.cn</a>。</p>
    <p class="m_top20">红色星号标注的项目为必须填写的项目</p>
		<form name="FORMADD" method="post" action="retake_password_check.php" onsubmit="return checkFrom();">
    <div class="register_content pad_w100 sp_w100">
      <dl class="register_dl register_dl_else clearfix">
      	<dd class="register_dd">公司名</dd>
        <dt>
          <input name="company" id="company" type="text" class="register_text" /><br class="sp_block"><span class="register_f14">　例：日置（上海）商贸 有限公司</span>
        </dt>
      </dl>
      <dl class="register_dl register_dl_else clearfix">
      	<dd class="register_dd">姓名</dd>
        <dt>
          <input name="name" id="name" type="text" class="register_text" /><br class="sp_block"><span class="register_f14">　例：张三</span>
        </dt>
      </dl>
      <dl class="register_dl register_dl_else clearfix">
      	<dd class="register_dd">Email</dd>
        <dt>
          <input name="email" id="email" type="text" class="register_text" /><br class="sp_block"><span class="register_f14">　例：info@hioki.com.cn</span>
        </dt>
      </dl>
      <input name="" type="submit" value="" class="register_submit sp_none" /><input name="" type="reset" value="" class="register_reset sp_none" />
      <input name="" type="submit" value="提交" class="register_submit1 counterfeit_button01 sp_block" /><input name="" type="reset" value="重新填写" class="register_reset1 counterfeit_button03 sp_block" />
    </div>
    </form>
    <p class="m_top45 sp_mt0 pad_mt0">&nbsp;</p>
  </div>
</div>
<?php 
include("./footer.php");//加载template
?>
</body>
</html>
