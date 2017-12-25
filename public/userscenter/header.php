<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?1543ceff58b1606182e9b7cf357712b3";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();
</script>
<?php
session_start();
if ($_COOKIE["login_stub"])
	{
		$encrypted = $_COOKIE["login_stub"];
		$decoded = explode( ",", base64_decode($encrypted));
		$user_id = $decoded[0];
		$username = $decoded[1];
		if ($username!='' && $user_id !='')
			{
				$_SESSION['usercenter']['user_id'] = $user_id;
				$_SESSION['usercenter']['name'] = $username;
			}
	}
?>
<a name="top" id="top"></a>
<div class="sidebar_search sp_none pad_none">
	<dl>
		<dt class="fl"><img width="75" src="/assets_doc/front/html/images/sidebar_search01.png" alt="Sidebar search01" /></dt>
		<dd>
			<h3>HIOKI商品搜索</h3>
			<form id="search_form" name="search_form" action="/products" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="&#x2713;" />
			<label>
				<input type="text" name="search" value="输入商品名・关键字进行搜索" onfocus="if(value=='输入商品名・关键字进行搜索'){value=''}" onblur="if(value==''){value='输入商品名・关键字进行搜索'}" /><input name="" onclick="$('#search_form').submit()" type="button" /></label>
			<p><input name="is_deleted" type="checkbox" value="1" />包含已停产的产品</p>
</form>		</dd>
	</dl>
</div>
<div class="sidebar_search02 sp_none pad_none">
	<dl>
		<dt class="fl"><img width="75" src="/assets_doc/front/html/images/sidebar_search11.png" alt="Sidebar search11" /></dt>
                <?php if(!($_SESSION['usercenter']['name'] &&$_COOKIE["login_stub"])): ?>
		<form id="login_form" action="sessions/" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="authenticity_token" value="tV85vCWYQU2LVJVSvA5AJXV2jr9Pn8k0MmMvNCdS1sHAJb41DiJtyQ8iKN4QuK6oeUG8J1YjadxRPe/4pbcjvQ==" />
		<dd>
			<label>用户名 <input type="text" id="email" name="email" value="" /></label>
			<label>密　码 <input type="password" id="password" name="password" value="" /></label>
			<ul class="m_top15">
      	<li><input name="" type="" value="登录" class="sidebar_ld" id="login_button"/></li>
				<li><a href="/userscenter/register.php" class="sidebar_ld">注册</a></li>
				<li><a href="/userscenter/retake_password.php">忘记密码</a></li>
			</ul>
		</dd>
</form>		
<?php endif; ?>

                <?php if(($_SESSION['usercenter']['name'] &&$_COOKIE["login_stub"])): ?>
		<dd>
                <p class="sidebar_p recorder_f18"><?php echo $_SESSION['usercenter']['name'];?>，HIOKI欢迎您</p>
                        <ul class="m_top15">
                          <li>
                        <a href="/userscenter/intellectual/intellectual.php" class="sidebar_ld" >会员中心</a>
                        </li>
                        <li>
                        <a href="/userscenter/im_logout.php" class="sidebar_ld" data-method="delete" data-confirm="确认退出吗?">退出登录</a>
                        </li>
                      </ul>
    </dd>
<?php endif; ?>
        </dl>
</div>

<div class="top_bg sp_none pad_none">
  <div class="top clearfix">
    <p class="fl">日置(上海)商贸有限公司</p>
     <ul class="fr">
       <li class="top_li1">
       <a style="display:none" id="logout_in_header" href="/sessions/logout" data-method="delete" data-confirm="确认退出吗?">
         <img width="28" height="26" src="/assets_doc/front/html/images/hioki_r1_c30.jpg" alt="Hioki r1 c30" />
         会员退出</a>
         <?php if(($_SESSION['usercenter']['name'] &&$_COOKIE["login_stub"])): ?>
         <a href="/userscenter/im_logout.php" data-method="delete" data-confirm="确认退出吗?">
         <img width="28" height="26" src="/assets_doc/front/html/images/hioki_r1_c30.jpg" alt="Hioki r1 c30" />
         会员退出
       </a>
       <?php endif; ?>
          </li>
          <li class="top_li1">
          <img width="22" height="26" src="/assets_doc/front/html/images/hioki_r1_c32.jpg" alt="Hioki r1 c32" />400-920-6010
          </li>
          <li class="top_li1"><img width="21" height="23" alt="Global Site" src="/assets_doc/front/html/images/hioki_r1_c34.jpg" />Global Site
          </li>
        <li class="top_li2 fl"><a href="javascript:void(0)">Select Language</a>
        <ul class="lang_navi_list">
          <li><a href="http://www.hioki.co.jp/jp/" target="_blank">Japanese / 日本語</a></li>
          <li><a href="https://www.hioki.com/en/" target="_blank">English</a></li>
        </ul>
        </li>
      </ul>
  </div>
</div>

<div class="header">
  <h1 class="fl"><a href="/index.html"><img width="220" alt="HIOKI" src="/assets_doc/front/html/images/hioki_logo_pc.jpg" class="imgChange" /></a></h1>
  <ul class="header_nav sp_none pad_none">
      <li><a href="/index.html">首　　页</a></li>
      <li><a href="/news.html">新　　闻</a></li>
      <li><a href="/products.html">产品一览</a></li>
      <li class="nav_li"><a href="/company.html">公司介绍</a></li>
      <li><a href="/contact.html">联系我们</a></li>
      <li><a href="/repair.html">维修中心</a></li>
      <li class="nav_li02"><a href="/recruit.html">招聘信息</a></li>
  </ul>
  <p class="sp_block fr pad_block" id="nav"><a href="javascript:void(0)" onClick="Effect2('nav_sp',this.parentNode.id);"><img src="/assets_doc/front/html/images/hioki_nav_sp.jpg" width="27" ></a></p>
  <p class="sp_block fr pad_block" id="land"><a href="javascript:void(0)" onClick="Effect('land_sp',this.parentNode.id);"><img src="/assets_doc/front/html/images/hioki_land_sp.jpg" width="27" ></a></p>
  <p class="sp_block fr pad_block" id="search"><a href="javascript:void(0)" onClick="Effect3('search_sp',this.parentNode.id);"><img src="/assets_doc/front/html/images/hioki_search_sp.jpg" width="27" ></a></p>
  <div class="hioki_land_sp" id="search_sp" style="display:none;">
  <form id="search_form_sp" name="search_form" action="/products" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="&#x2713;" />
	  <label class="hioki_nav_search">
		<input type="text" name="search" value="输入商品名・关键字进行搜索" onfocus="if(value=='输入商品名・关键字进行搜索'){value=''}" onblur="if(value==''){value='输入商品名・关键字进行搜索'}" /><input name="" onclick="$('#search_form_sp').submit()" type="button" /></label>
        <p class="m_top10"><input name="is_deleted" type="checkbox" value="1" />包含已停产的产品</p>
	</form>
  </div>
  <div class="hioki_land_sp" id="land_sp" style="display:none;">
	<h3>会员登录</h3>
                <?php if(!($_SESSION['usercenter']['name'] &&$_COOKIE["login_stub"])): ?>
	<form id="login_form" action="sessions/" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="authenticity_token" value="Og7G5Y98uVnYgyLyyZejUkNgwMAfaBnTJE6q2ufQLWHiFRjvMQy7A8iwahjymuf//gCn9OQeolwhE+/kkRYxcg==" />
	  <dd>
	  <div class="hioki_login">
		<p class="clearfix"><label>用户名</label><span><input type="text" id="email" name="email" value=""  /></span></p>
		<p class="m_top10 clearfix"><label>密　码</label><span><input type="password" id="password" name="password" value=""  /></span></p>
	  <input name="" type="" value="登　录" class="sidebar_ld" id="login_button"/>
		<p class="hioki_forgot"><a href="/userscenter/retake_password.php">忘记密码</a></p>
	  </div>
	  <p class="hioki_register"><a href="/userscenter/register.php">新会员注册</a></p>
	  </dd>
	</form>
<?php endif; ?>
                <?php if(($_SESSION['usercenter']['name'] &&$_COOKIE["login_stub"])): ?>
      <dd>
      <p class="sidebar_p recorder_f18"><?php echo $_SESSION['usercenter']['name'];?>，<br />HIOKI欢迎您</p>
      <ul class="m_top15">
      	<li><a href="/userscenter/intellectual/intellectual.php" class="sidebar_ld">会员中心</a></li>
        <li><a href="/userscenter/im_logout.php" class="sidebar_ld" data-method="delete" data-confirm="确认退出吗?">退出登录</a></li>
	  </ul>
      <p class="hioki_register_gb" id="land"><a href="javascript:void(0)" onClick="Effect('land_sp',this.parentNode.id);">关闭<i></i></a></p>
      </dd>
<?php endif; ?>
  </div>
  <div class="hioki_nav_sp" id="nav_sp" style="display:none;">
  	<dl class="hioki_dhyy clearfix">
      <dd><img width="19" src="/assets_doc/front/html/images/hioki_dh_sp.jpg" alt="Hioki r1 c32">  400-920-6010</dd>
      <dt><img width="19" alt="Global Site" src="/assets_doc/front/html/images/hioki_site_sp.jpg"> Global Site</dt>
    </dl>
    
    <ul class="hioki_menu">
      <li><a href="/products.html">产品一览<i><img width="10" src="/assets_doc/front/html/images/hioki_nav_yjt.png" ></i></a></li>
      <li><a href="/html/application/ind01.html">解决方案<i><img width="10" src="/assets_doc/front/html/images/hioki_nav_yjt.png" ></i></a></li>
      <li><a href="/company.html">公司介绍<i><img width="10" src="/assets_doc/front/html/images/hioki_nav_yjt.png" ></i></a></li>
      <li><a href="/contact.html">联系我们<i><img width="10" src="/assets_doc/front/html/images/hioki_nav_yjt.png" ></i></a></li>
      <li><a href="/repair.html">维修中心<i><img width="10" src="/assets_doc/front/html/images/hioki_nav_yjt.png" ></i></a></li>
      <li><a href="/recruit.html">招聘信息<i><img width="10" src="/assets_doc/front/html/images/hioki_nav_yjt.png" ></i></a></li>
    </ul>
    <p class="t_center m_top15"><img width="94%" src="/assets_doc/front/html/images/hioki_nav_wx.jpg" ></p>
  </div>
</div>
