<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登录｜HIOKI-日置(上海) 商贸有限公司</title>
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
<script type="text/javascript" src="/userscenter/js/main.js"></script>
<script type="text/javascript" src="/assets_doc/front/html/js/default.js"></script>
<script type="text/javascript" src="/assets_doc/front/html/js/Effect.js"></script>
<script type="text/javascript" src="/assets_doc/front/html/js/common.js"></script>
</head>

<body>
<?php 
include("../header.php");//加载template
?>
<div class="im_banner pad_none sp_none"></div>
<div class="pad_block sp_none"><img src="/assets_doc/front/html/images/intellectual_r1_c1_pad.jpg" width=100%></div>
<div class="sp_block"><img src="/assets_doc/front/html/images/intellectual_sp.png" class="sp_w100"></div>
<div class="news_content clearfix">
<?php 
include("product_left.php");//加载template
?>
  <div class="product_right product_right_sp">
    <p class="current sp_none"><a href="/index.html">首页</a> > 智测会</p>
    <h3 class="product_f25 m_top20 sp_color">HIOKI智测会欢迎您！</h3>
    <div class="recorder_content recorder_content_sp recorder_f16">
      <div class="recorder_sign recorder_sign_sp clearfix sp_fs11" style="margin:0;">
      	<p>如果还没有登录客户信息，请先进行登录。</p>
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

  var password = document.getElementById('password_php').value;

  if (password=='')

  {

    alert('请输入密码');

    document.getElementById('password_php').focus();

    return false;

  }

}

</script>

<form action="login_check.php" method="post" onsubmit="return check();">
        <div class="recorder_please recorder_please_sp sp_mt20">
          <div class="m_top25 clearfix"><label class="sp_none">用户名<br />(邮箱地址)</label>
            <label class="sp_block label_sp">用户名(邮箱地址)</label><input name="username" id="username" type="text" /></div>
          <div class="m_top25 clearfix"><label class="m_top10 label_sp">密　码</label><input name="password" id="password_php" type="password" /><br />
<p><a href="/userscenter/retake_password.php">忘记密码</a></p></div>
        </div>
        <input name="" type="submit" class="recorder_login sp_none" value="" />
        <input name="" type="submit" class="recorder_login recorder_login_sp sp_block" value="登 录" />
</form>

        <p class="m_top35 sp_none"><a href="../register.php"><img src="/assets_doc/front/html/images/recorder04_02.jpg" width="197" height="86" /></a></p>
        <div class="clearfix"></div>
        <p class="m_top35 sp_block recorder_login_sp1"><a href="../register.php">注册新用户</a></p>
      </div>
    </div>
    
  </div>
</div>
<?php 
include("../footer.php");//加载template
?>
</body>
</html>
