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
	header("Location: register.php");
	exit;
}
require_once 'intellectual/lib/function.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>HIOKI-中国区维修服务中心（日置(上海) 商贸有限公司）</title>
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
include("./header.php");//加载template
?>
		<div class="register_banner"></div>
		<div class="news_content clearfix">
			<div class="product_left" >
				<h3>注册新会员<br /><span class="hioki_f15">Register</span></h3>
				
			</div>
			<div class="product_right">
  			<p class="current"><a href="/demo/">首页</a> > 注册新会员</p>
			<h3 class="hioki_category_title m_top20">注册新会员</h3>
			<p class="m_top10">红色星号标注的项目为必须填写的项目</p>
			<div class="register_content register_lh35">
				<form name="FORMADD" method="post" action="reg_check.php">
					<dl class="register_dl clearfix">
      			<dd class="register_dd">公司名</dd>
						<dt>
                                                        <input name="company" type="hidden" id="company" type="text" value="<?php echo $company;?>" class="register_text" /><span class="register_f14"><?php echo $company;?></span>
						</dt>
					</dl>
					<dl class="register_dl clearfix">
      			<dd class="register_dd">部门</dd>
						<dt>
							<input name="dept" type="hidden" id="dept" type="text" value="<?php echo $dept;?>" class="register_text" /><span class="register_f14"><?php echo $dept;?></span>
						</dt>
					</dl>
					<dl class="register_dl clearfix">
      			<dd class="register_dd">职位</dd>
						<dt>
							<input name="job" type="hidden" id="job" type="text" value="<?php echo $job;?>" class="register_text" /><span class="register_f14"><?php echo $job;?></span>
						</dt>
					</dl>
					<dl class="register_dl clearfix">
      			<dd class="register_dd">姓名</dd>
						<dt>
							<input name="name" type="hidden" id="name" type="text" value="<?php echo $name;?>" class="register_text" /><span class="register_f14"><?php echo $name;?></span>
						</dt>
					</dl>
					<dl class="register_dl clearfix">
      			<dd class="register_dd">类别</dd>
						<dt>
                                                <span class="register_f14">
<?php if($type=="最终用户") echo "最终用户"; ?>
<?php if($type=="仪器代理商") echo "仪器代理商"; ?>
<?php if($type=="系统集成商") echo "系统集成商"; ?>
<?php if($type=="其他") echo "其他"; ?>
</span>
<?php if($type=="最终用户") echo '<input type="hidden" name="type" type="radio" value="最终用户" "checked" />' ?>
<?php if($type=="仪器代理商") echo '<input type="hidden" name="type" type="radio" value="仪器代理商" "checked" />' ?>
<?php if($type=="系统集成商") echo '<input type="hidden" name="type" type="radio" value="系统集成商" "checked" />' ?>
<?php if($type=="其他") echo '<input type="hidden" name="type" type="radio" value="其他" "checked" />' ?>
						</dt>
					</dl>
					<dl class="register_dl clearfix">
      			<dd class="register_dd">区域</dd>
						<dt>
<span class="register_f14">
<?php if($area=="华北") echo "华北"; ?>
<?php if($area=="华东") echo "华东"; ?>
<?php if($area=="华南") echo "华南"; ?>
<?php if($area=="中西") echo "中西"; ?>
</span>

<?php if($area=="华北") 
echo 
'<input type="hidden" name="area" type="radio" value="华北" "checked"/>' ?>
<?php if($area=="华东") 
echo
'<input type="hidden" name="area" type="radio" value="华东" "checked"/>' ?>
<?php if($area=="华南") 
echo
'<input type="hidden" name="area" type="radio" value="华南" "checked"/>' ?>
<?php if($area=="中西") 
echo
'<input type="hidden" name="area" type="radio" value="中西" "checked"/>' ?>
						</dt>
					</dl>
					<dl class="register_dl clearfix">
      			<dd class="register_dd">业种</dd>
						<dt>
<span class="register_f14">
<?php if($work1=="1") echo "食品、纤维"; ?>
<?php if($work1=="2") echo "工业、化学"; ?>
<?php if($work1=="3") echo "钢铁、金属"; ?>
<?php if($work1=="4") echo "运输用机械制造"; ?>
<?php if($work1=="5") echo "其他机械制造"; ?>
<?php if($work1=="6") echo "电机制造"; ?>
<?php if($work1=="7") echo "电力、燃气"; ?>
<?php if($work1=="8") echo "运输、通讯"; ?>
<?php if($work1=="9") echo "服务业"; ?>
<?php if($work1=="10") echo "政府、学校、研究所"; ?>
<?php if($work1=="11") echo "其它"; ?>
</span>
<?php if($work1=="1") echo '<input type="hidden" name="work1" type="radio" value="1" "checked"/>' ?> 
<?php if($work1=="2") echo '<input type="hidden" name="work1" type="radio" value="2" "checked"/>' ?>
<?php if($work1=="3") echo '<input type="hidden" name="work1" type="radio" value="3" "checked"/>' ?>
<?php if($work1=="4") echo '<input type="hidden" name="work1" type="radio" value="4" "checked"/>' ?>
<?php if($work1=="5") echo '<input type="hidden" name="work1" type="radio" value="5" "checked"/>' ?>
<?php if($work1=="6") echo '<input type="hidden" name="work1" type="radio" value="6" "checked"/>' ?>
<?php if($work1=="7") echo '<input type="hidden" name="work1" type="radio" value="7" "checked"/>' ?>
<?php if($work1=="8") echo '<input type="hidden" name="work1" type="radio" value="8" "checked"/>' ?>
<?php if($work1=="9") echo '<input type="hidden" name="work1" type="radio" value="9" "checked"/>' ?>
<?php if($work1=="10") echo '<input type="hidden" name="work1" type="radio" value="10" "checked"/>' ?>
<?php if($work1=="11") echo '<input type="hidden" name="work1" type="radio" value="11" "checked"/>' ?>
						</dt>
					</dl>
					<dl class="register_dl clearfix">
      			<dd class="register_dd">职种</dd>
						<dt>
<span class="register_f14">
<?php if($work2=="1") echo "研究、开发"; ?>
<?php if($work2=="2") echo "技术、设计"; ?>
<?php if($work2=="3") echo "生产技术"; ?>
<?php if($work2=="4") echo "制造"; ?>
<?php if($work2=="5") echo "采购"; ?>
<?php if($work2=="6") echo "行政"; ?>
<?php if($work2=="7") echo "销售"; ?>
<?php if($work2=="8") echo "服务人员"; ?>
<?php if($work2=="9") echo "政府人员"; ?>
<?php if($work2=="10") echo "学校、学生"; ?>
<?php if($work2=="11") echo "其它"; ?>
</span>
<?php if($work2=="1") echo '<input type="hidden" name="work2" type="radio" value="1" "checked"/>' ?>
<?php if($work2=="2") echo '<input type="hidden" name="work2" type="radio" value="2" "checked"/>' ?>
<?php if($work2=="3") echo '<input type="hidden" name="work2" type="radio" value="3" "checked"/>' ?>
<?php if($work2=="4") echo '<input type="hidden" name="work2" type="radio" value="4" "checked"/>' ?>
<?php if($work2=="5") echo '<input type="hidden" name="work2" type="radio" value="5" "checked"/>' ?>
<?php if($work2=="6") echo '<input type="hidden" name="work2" type="radio" value="6" "checked"/>' ?>
<?php if($work2=="7") echo '<input type="hidden" name="work2" type="radio" value="7" "checked"/>' ?>
<?php if($work2=="8") echo '<input type="hidden" name="work2" type="radio" value="8" "checked"/>' ?>
<?php if($work2=="9") echo '<input type="hidden" name="work2" type="radio" value="9" "checked"/>' ?>
<?php if($work2=="10") echo '<input type="hidden" name="work2" type="radio" value="10" "checked"/>' ?>
<?php if($work2=="11") echo '<input type="hidden" name="work2" type="radio" value="11" "checked"/>' ?>
						</dt>
					</dl>
					<dl class="register_dl clearfix">
      			<dd class="register_dd">Email</dd>
						<dt>
							<input type="hidden" name="email" id="email" type="text" value="<?php echo $email;?>" class="register_text" /><span class="register_f14"><?php echo $email;?></span>
						</dt>
					</dl>
							<input type="hidden" name="password" id="password" value="<?php echo $password;?>" type="password" class="register_text" />
					<dl class="register_dl clearfix">
      			<dd class="register_dd">地址</dd>
						<dt>
							<input type="hidden" name="address" id="address" value="<?php echo $address;?>" type="text" class="register_text" /><span class="register_f14"><?php echo $address;?></span>
						</dt>
					</dl>
					<dl class="register_dl clearfix">
      			<dd class="register_dd">邮编</dd>
						<dt>
							<input type="hidden" name="postcode" id="postcode" value="<?php echo $postcode;?>" type="text" class="register_text" /><span class="register_f14"><?php echo $postcode;?></span>
						</dt>
					</dl>
					<dl class="register_dl clearfix">
      			<dd class="register_dd">TEL</dd>
						<dt>
							<input type="hidden" name="tel" id="tel" type="text" value="<?php echo $tel;?>" class="register_text" /><span class="register_f14"><?php echo $tel;?></span>
						</dt>
					</dl>
					<dl class="register_dl clearfix">
      			<dd>FAX</dd>
						<dt>
							<input type="hidden" name="fax" id="fax" type="text" value="<?php echo $fax;?>" class="register_text" /><span class="register_f14"><?php echo $fax;?></span>
						</dt>
					</dl>
					<dl class="register_dl clearfix">
      			<dd>是否使用日置产品</dd>
						<dt>
<span class="register_f14">
<?php if($is_used=="yes") echo "是"; ?>
<?php if($is_used=="no") echo "否"; ?>
</span>
<?php if($is_used=="yes") echo '<input type="hidden" name="is_used" type="radio" value="yes" "checked"/>'?>
<?php if($is_used=="no") echo '<input type="hidden" name="is_used" type="radio" value="no" "checked"/>'?>
						</dt>
					</dl>
					<dl class="register_dl clearfix">
      			<dd>日置产品1</dd>
						<dt>
							型号　<input type="hidden" name="hioki_code1" id="hioki_code1" type="text" class="register_text" value="<?php echo $hioki_code1;?>" /><span class="register_f14"><?php echo $hioki_code1;?></span>
							<p class="m_top30">名称  <input type="hidden" name="hioki_name1" id="hioki_name1" type="text" class="register_text" value="<?php echo $hioki_name1;?>"/><span class="register_f14"><?php echo $hioki_name1;?></span>
							</p>
						</dt>
					</dl>

					<dl class="register_dl clearfix">
      			<dd>日置产品2</dd>
						<dt>
							型号　<input type="hidden" name="hioki_code2" id="hioki_code2" type="text" class="register_text" value="<?php echo $hioki_code2;?>"/><span class="register_f14"><?php echo $hioki_code2;?></span>
							<p class="m_top30">名称　<input type="hidden" name="hioki_name2" id="hioki_name2" type="text" class="register_text" value="<?php echo $hioki_name2;?>"/><span class="register_f14"><?php echo $hioki_name2;?></span>

							</p>
						</dt>
					</dl>
					<dl class="register_dl clearfix">
      			<dd>日置产品3</dd>
						<dt>
							型号　<input type="hidden" name="hioki_code3" id="hioki_code3" type="text" class="register_text" value="<?php echo $hioki_code3;?>"/><span class="register_f14"><?php echo $hioki_code3;?></span>
							<p class="m_top30">名称　<input type="hidden" name="hioki_name3" id="hioki_name3" type="text" class="register_text" value="<?php echo $hioki_name3;?>"/><span class="register_f14"><?php echo $hioki_name3;?></span>
							</p>
						</dt>
					</dl>
					<dl class="register_dl clearfix">
      			<dd>其它产品1</dd>
						<dt>
							型号　<input type="hidden" name="other_code1" id="other_code1" type="text" class="register_text" value="<?php echo $other_code1;?>"/><span class="register_f14"><?php echo $other_code1;?></span>
							<p class="m_top30">名称　<input type="hidden" name="other_name1" id="hioki_name1" type="text" class="register_text" value="<?php echo $other_name1;?>"/><span class="register_f14"><?php echo $other_name1;?></span>
							</p>
						</dt>
					</dl>
					<dl class="register_dl clearfix">
      			<dd>其它产品2</dd>
						<dt>
							型号　<input type="hidden" name="other_code2" id="other_code2" type="text" class="register_text" value="<?php echo $other_code2;?>"/><span class="register_f14"><?php echo $other_code2;?></span>
							<p class="m_top30">名称　<input type="hidden" name="other_name2" id="other_name2" type="text" class="register_text" value="<?php echo $other_name2;?>"/><span class="register_f14"><?php echo $other_name2;?></span>
							</p>
						</dt>
					</dl>
					<dl class="register_dl clearfix">
      			<dd>其它产品3</dd>
						<dt>
							型号　<input type="hidden" name="other_code3" id="other_code3" type="text" class="register_text" value="<?php echo $other_code3;?>"/><span class="register_f14"><?php echo $other_code3;?></span>
							<p class="m_top30">名称　<input type="hidden" name="other_name3" id="other_name3" type="text" class="register_text" value="<?php echo $other_name3;?>"/><span class="register_f14"><?php echo $other_name3;?></span>
							</p>
						</dt>
					</dl>
					<dl class="register_dl clearfix">
      			<dd>希望得到哪种信息</dd>
						<dt>
<span class="register_f14">
<?php if(in_array("1", $info_type)) echo "综合样本 "; ?>
<?php if(in_array("2", $info_type)) echo "新产品信息 "; ?>
<?php if(in_array("3", $info_type)) echo "研讨会通知 "; ?>
<?php if(in_array("4", $info_type)) echo "展会通知"; ?>
</span>
<?php if(in_array("1", $info_type)) echo '<input type="hidden" name="info_type[]" type="checkbox" value="1" "checked"/>'?>
<?php if(in_array("2", $info_type)) echo '<input type="hidden" name="info_type[]" type="checkbox" value="2" "checked"/>'?>
<?php if(in_array("3", $info_type)) echo '<input type="hidden" name="info_type[]" type="checkbox" value="3" "checked"/>'?>
<?php if(in_array("4", $info_type)) echo '<input type="hidden" name="info_type[]" type="checkbox" value="4" "checked"/>'?>
						</dt>
					</dl>
                                        <dl class="register_dl clearfix" style="border:none;">
                        <dd>意见和建议</dd>
                                                <dt><textarea style="display:none;" name="feedback" id="feedback" cols="50" rows="6" class="register_textarea"><?php echo nl2br($feedback);?></textarea>
<?php echo nl2br($feedback);?>
                                                </dt>
                                        </dl>
					<div class="counterfeit_fill"><input name="" type="submit" value="" class="counterfeit_button01" />&nbsp;&nbsp;<input name="" type="reset" value="" class="counterfeit_button03" />
					</form>
				</div>
				
				<p class="m_top45">&nbsp;</p>
			</div>
		</div>
	</div>
	<?php 
include("./footer.php");//加载template
?>
</body>
</html>
