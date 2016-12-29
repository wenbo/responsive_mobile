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
<div class="top_bg">
  <div class="top clearfix">
        <p class="fl">日置(上海)商贸有限公司</p>
      <ul class="fr">
       <li class="top_li1">
<?php if($_SESSION['usercenter']['name'] &&$_COOKIE["login_stub"])
echo "<a href=\"/userscenter/im_logout.php\"><img src=\"/userscenter/images/hioki_r1_c30.jpg\" width=\"28\" height=\"26\" />会员退出</a>";
?>
          </li>
          <li class="top_li1">
          <img width="22" height="26" src="/userscenter/images/hioki_r1_c32.jpg" alt="Hioki r1 c32" />400-920-6010
          </li>
          <li class="top_li1"><img width="21" height="23" alt="Global Site" src="/userscenter/images/hioki_r1_c34.jpg" />Global Site
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
	 <h1 class="fl"><a href="/index.html"><img width="220" height="30" alt="HIOKI" src="/userscenter/images/hioki_r4_c3.jpg" /></a></h1>
	 <ul>
	 <li>
	 <a href="/demo/">首　　页</a>
	 </li>
	 <li>
	 <a href="/news.html">新　　闻</a>
	 </li>
	 <li>
	 <a href="/industries/1/products">产品一览</a>
	 </li>
	 <li>
	 <a href="/company.html">公司介绍</a>
	 </li>
	 <li>
	 <a href="/contact.html">联系我们</a>
	 </li>
         <li>
         <a href="/repair.html">维修中心</a>
         </li>
         <li class="nav_li02">
         <a href="/recruit.html">招聘信息</a>
         </li>
	 </ul>
	 </div>
