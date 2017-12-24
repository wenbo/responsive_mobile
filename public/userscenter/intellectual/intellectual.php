<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>智测会｜HIOKI-日置(上海) 商贸有限公司</title>
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
  <div class="product_right product_right_pt0">
    <p class="current sp_none"><a href="/index.html">首页</a> > <a href="intellectual.php">智测会</a> > 智测会介绍</p>


    <h3 class="product_f25 recorder_blue m_top20">HIOKI智测会介绍</h3>
    <p class="recorder_f16 sp_fs14">HIOKI智测会是用户免费注册为会员后，向其进一步提供详细产品信息和完善服务的系统。欢迎大家积极参与入会。</p>
    <h3 class="recorder_basic recorder_blue sp_mt15">会员招募</h3>
    <p class="m_top15">完整填写会员注册表格即可成为会员，轻松入会！</p>
    <h3 class="recorder_basic recorder_blue sp_mt15">会员特惠</h3>
    <p class="m_top15"><span class="recorder_blue">■ </span>会员可参与定期抽奖活动获得精美礼品（1年2次）<br />
    <span class="recorder_blue">■ </span>免费获得日置最新信息（新产品信息和日置公司最新信息）<br />
    <span class="recorder_blue">■ </span>会员专用页面（说明书、外观图等的下载）
    </p>
    <h3 class="recorder_basic recorder_blue">联系我们</h3>
    <p class="recorder_f18 m_top25"><img src="/assets_doc/front/html/images/intellectual_r4_c2.jpg" width="18" height="13" /> <a href="mailto:chenlu@hioki.com.cn">chenlu@hioki.com.cn</a></p>
    <p class="recorder_f18 m_top10"><img src="/assets_doc/front/html/images/intellectual_r6_c2.jpg" width="18" height="18" /> 400-920-6010</p>
    <p class="news_title_x">&nbsp;</p>
    <h3 class="product_f25 recorder_blue m_top20">HIOKI智测会入会方法</h3>
    <p class="recorder_f16 m_top15">1.　点击下方【会员注册】后，在会员注册表格中完整填写信息并点击提交。</p>
    <p class="recorder_f16 m_top15 sp_block sp_mt10">2.　我们在收到您的信息后将及时以邮件方式通知您资料下载的路径和密码。</p>
    <p class="recorder_red m_top5 sp_fs11">　　※请务必填写正确的邮箱。<br />
　　※若您没有收到通知邮件，可联系 <a href="mailto:chenlu@hioki.com.cn">chenlu@hioki.com.cn</a></p>
  <p class="recorder_red m_top20 sp_none">　　<a href="../register.php"><img src="/assets_doc/front/html/images/intellectual_r8_c4.jpg" width="360" height="86" class="sp_w100"/></a></p>
  <p class="recorder_red sp_block">　　<a href="../register.php"><img src="/assets_doc/front/html/images/intellectual_r8_c4_sp.png" width="360" height="86" class="sp_w100"/></a></p>
    <p class="recorder_f16 m_top30 sp_none">2.　我们在收到您的信息后将及时以邮件方式通知您资料下载的路径和密码。</p>
    <p class="news_title_x">&nbsp;</p>
    <h3 class="product_f25 recorder_blue m_top20">个人隐私保护方针</h3>
    <p class="m_top10">日置（上海）商贸有限公司(以下简称"本公司")充分认识到妥善保护客户以及交易对象的个人信息(以下简称"用户信息")的重要性，特制订如下方针，努力对个人信息予以切实的保护。</p>
    <h4 class="recorder_f16 recorder_blue m_top20">1.　用户信息的获取</h4>
    <p class="m_top5">　　本公司首先向顾客说明个人信息的使用目的和使用范围，并且征得本人同意的基础上取得顾客的用户信息。 </p>
    <h4 class="recorder_f16 recorder_blue m_top20">2.　用户信息的使用目的</h4>
    <p class="m_top5">
    　　<span class="recorder_blue">■ </span>商品的销售以及服务的提供。<br />
    　　<span class="recorder_blue">■ </span>关于商品，服务，活动等信息的发送和通知。<br />
    　　<span class="recorder_blue">■ </span>各种咨询，索取资料时的对应。<br />
    　　<span class="recorder_blue">■ </span>针对顾客的意见和要求，对商品和服务进行改善。<br />
    　　<span class="recorder_blue">■ </span>为了对市场等经营上进行必要的分析，用于基础数据的作成以及统计数据的作成。
    </p>
    <h4 class="recorder_f16 recorder_blue m_top20">3.　向第三方提供用户信息</h4>
    <p class="m_top5">　　除以下情形以外，本公司将不会对第三者公开用户信息：</p>
    <p class="m_top10">
    　　<span class="recorder_blue">■ </span>商品的销售以及服务的提供。<br />
    　　<span class="recorder_blue">■ </span>关于商品，服务，活动等信息的发送和通知。<br />
    　　<span class="recorder_blue">■ </span>各种咨询，索取资料时的对应。<br />
    　　<span class="recorder_blue">■ </span>针对顾客的意见和要求，对商品和服务进行改善。<br />
    　　<span class="recorder_blue">■ </span>为了对市场等经营上进行必要的分析，用于基础数据的作成以及统计数据的作成。
    </p>
    <h4 class="recorder_f16 recorder_blue m_top20">4.　用户信息的公开、更改、停用与删除</h4>
    <p class="m_top5">　　用户对自己的个人信息有要求公开、更改、停用与删除等权利。本公司在收到用户的相关要求后，会对用户的要求迅速进行处理。 
    </p>
    <h4 class="recorder_f16 recorder_blue m_top20">5.　用户信息保护措施的持续改善</h4>
    <p class="m_top5">　　本公司将努力不断地完善和改进对用户信息的保护措施和制度。采取必要的措施对用户信息进行严密的安全管理，防止用户信息的泄漏、丢失及误用。<br />
　　将严格遵守有关用户信息保护方面的法规条令。
    </p>
    
    
    <p class="m_top45 sp_mt0">&nbsp;</p>
  </div>
</div>
<?php 
include("../footer.php");//加载template
?>
</body>
</html>
