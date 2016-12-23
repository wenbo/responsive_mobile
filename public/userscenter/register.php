<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <title>注册｜HIOKI-日置(上海) 商贸有限公司</title>
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="js/scrollsmoothly.js"></script>
		<script type="text/javascript" src="js/tab.js"></script>
		<script language="javascript" type="text/javascript">
			function checkFrom()
			{
			var company = document.FORMADD.company.value;
			var dept = document.FORMADD.dept.value;
			var name = document.FORMADD.name.value;
			var type = document.FORMADD.type.value;
			var area = document.FORMADD.area.value;
			var work1 = document.FORMADD.work1.value;
			var work2 = document.FORMADD.work2.value;
			var email = document.FORMADD.email.value;
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
			if (name=='')
			{
			alert('请填写姓名');
			document.FORMADD.name.focus();
			return false;
			}
			if (type=='')
			{
			alert('请选择类别');
			document.FORMADD.type.focus();
			return false;
			}
			if (area=='')
			{
			alert('请选择区域');
			document.FORMADD.area.focus();
			return false;
			}
			if (work1=='')
			{
			alert('请选择业种');
			document.FORMADD.work1.focus();
			return false;
			}
			if (work2=='')
			{
			alert('请选择职种');
			document.FORMADD.work2.focus();
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
			if (password=='')
			{
			alert('请填写密码');
			document.FORMADD.password.focus();
			return false;
			}
			if (password.length<6)
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
include("./header.php");//加载template
?>
		<div class="register_banner"></div>
		<div class="news_content clearfix">
			<div class="product_left" >
				<h3>注册新会员<br /><span class="hioki_f15">Register</span></h3>
				
			</div>
			<div class="product_right">
  			<p class="current"><a href="/index.html">首页</a> > 注册新会员</p>
			<h3 class="hioki_category_title m_top20">注册新会员</h3>
			<p class="m_top10">红色星号标注的项目为必须填写的项目</p>
			<div class="register_content">
				<form name="FORMADD" method="post" action="reg_confirm.php" onsubmit="return checkFrom();">
					<dl class="register_dl clearfix">
      			<dd class="register_dd">公司名</dd>
						<dt>
							<input name="company" id="company" type="text" class="register_text" /><span class="register_f14">　例：日置（上海）商贸 有限公司</span>
						</dt>
					</dl>
					<dl class="register_dl clearfix">
      			<dd class="register_dd">部门</dd>
						<dt>
							<input name="dept" id="dept" type="text" class="register_text" /><span class="register_f14">　例：营业支援部</span>
						</dt>
					</dl>
					<dl class="register_dl clearfix">
      			<dd class="register_dd">职位</dd>
						<dt>
							<input name="job" id="job" type="text" class="register_text" /><span class="register_f14">　例：助理</span>
						</dt>
					</dl>
					<dl class="register_dl clearfix">
      			<dd class="register_dd">姓名</dd>
						<dt>
							<input name="name" id="name" type="text" class="register_text" /><span class="register_f14">　例：张三</span>
						</dt>
					</dl>
					<dl class="register_dl clearfix">
      			<dd class="register_dd">类别</dd>
						<dt>
							<label class="register_dx"><input name="type" type="radio" value="最终用户" />&nbsp;&nbsp;最终用户</label>
							<label class="register_dx"><input name="type" type="radio" value="仪器代理商" />&nbsp;&nbsp;仪器代理商</label>
							<label class="register_dx"><input name="type" type="radio" value="系统集成商" />&nbsp;&nbsp;系统集成商</label>
							<label class="register_dx"><input name="type" type="radio" value="其它" />&nbsp;&nbsp;其它</label>
						</dt>
					</dl>
					<dl class="register_dl clearfix">
      			<dd class="register_dd">区域</dd>
						<dt>
							<label class="register_dx"><input name="area" type="radio" value="华北" />&nbsp;&nbsp;华北</label>
							<label class="register_dx"><input name="area" type="radio" value="华东" />&nbsp;&nbsp;华东</label>
							<label class="register_dx"><input name="area" type="radio" value="华南" />&nbsp;&nbsp;华南</label>
							<label class="register_dx"><input name="area" type="radio" value="中西" />&nbsp;&nbsp;中西</label>
							<p class="register_f14 clear">华北：北京、天津、黑龙江、吉林、辽宁、山东、河北、河南、山西、内蒙古、新疆<br />
								华东：上海、江苏、浙江、安徽、江西<br />
								华南：湖南、福建、广东、广西、海南、香港<br />
								中西：重庆、湖北、陕西、宁夏、甘肃、四川、贵州、云南、青海、西藏
							</p>
						</dt>
					</dl>
					<dl class="register_dl clearfix">
      			<dd class="register_dd">业种</dd>
						<dt>
							<label class="register_dx"><input name="work1" type="radio" value="1" />&nbsp;&nbsp;食品、纤维</label>
							<label class="register_dx"><input name="work1" type="radio" value="2" />&nbsp;&nbsp;工业、化学</label>
							<label class="register_dx"><input name="work1" type="radio" value="3" />&nbsp;&nbsp;钢铁、金属</label>
							<label class="register_dx"><input name="work1" type="radio" value="4" />&nbsp;&nbsp;运输用机械制造</label>
							<label class="register_dx"><input name="work1" type="radio" value="5" />&nbsp;&nbsp;其他机械制造</label>
							<label class="register_dx"><input name="work1" type="radio" value="6" />&nbsp;&nbsp;电机制造</label>
							<label class="register_dx"><input name="work1" type="radio" value="7" />&nbsp;&nbsp;电力、燃气</label>
							<label class="register_dx"><input name="work1" type="radio" value="8" />&nbsp;&nbsp;运输、通讯</label>
							<label class="register_dx"><input name="work1" type="radio" value="9" />&nbsp;&nbsp;服务业</label>
							<label class="register_dx"><input name="work1" type="radio" value="10" />&nbsp;&nbsp;政府、学校、研究所</label>
							<label class="register_dx"><input name="work1" type="radio" value="11" />&nbsp;&nbsp;其它</label>
						</dt>
					</dl>
					<dl class="register_dl clearfix">
      			<dd class="register_dd">职种</dd>
						<dt>
							<label class="register_dx"><input name="work2" type="radio" value="1" />&nbsp;&nbsp;研究、开发</label>
							<label class="register_dx"><input name="work2" type="radio" value="2" />&nbsp;&nbsp;技术、设计</label>
							<label class="register_dx"><input name="work2" type="radio" value="3" />&nbsp;&nbsp;生产技术</label>
							<label class="register_dx"><input name="work2" type="radio" value="4" />&nbsp;&nbsp;制造</label>
							<label class="register_dx"><input name="work2" type="radio" value="5" />&nbsp;&nbsp;采购</label>
							<label class="register_dx"><input name="work2" type="radio" value="6" />&nbsp;&nbsp;行政</label>
							<label class="register_dx"><input name="work2" type="radio" value="7" />&nbsp;&nbsp;销售</label>
							<label class="register_dx"><input name="work2" type="radio" value="8" />&nbsp;&nbsp;服务人员</label>
							<label class="register_dx"><input name="work2" type="radio" value="9" />&nbsp;&nbsp;政府人员</label>
							<label class="register_dx"><input name="work2" type="radio" value="10" />&nbsp;&nbsp;学校、学生</label>
							<label class="register_dx"><input name="work2" type="radio" value="11" />&nbsp;&nbsp;其它</label>
						</dt>
					</dl>
					<dl class="register_dl clearfix">
      			<dd class="register_dd">Email</dd>
						<dt>
							<input name="email" id="email" type="text" class="register_text" /><span class="register_f14">　例：info@hioki.com.cn</span>
						</dt>
					</dl>
					<dl class="register_dl clearfix">
      			<dd class="register_dd">密码</dd>
						<dt>
							<input name="password" id="password" type="password" class="register_text" />
						</dt>
					</dl>
					<dl class="register_dl clearfix">
      			<dd class="register_dd">地址</dd>
						<dt>
							<input name="address" id="address" type="text" class="register_text" /><span class="register_f14">　例：上海市淮海中路93号大上海时代广场1608-1610室</span>
						</dt>
					</dl>
					<dl class="register_dl clearfix">
      			<dd class="register_dd">邮编</dd>
						<dt>
							<input name="postcode" id="postcode" type="text" class="register_text" /><span class="register_f14">　例：200021</span>
						</dt>
					</dl>
					<dl class="register_dl clearfix">
      			<dd class="register_dd">TEL</dd>
						<dt>
							<input name="tel" id="tel" type="text" class="register_text" /><span class="register_f14">　例：021-63910090</span>
						</dt>
					</dl>
					<dl class="register_dl clearfix">
      			<dd>FAX</dd>
						<dt>
							<input name="fax" id="fax" type="text" class="register_text" /><span class="register_f14">　例：021-63910360</span>
						</dt>
					</dl>
					<dl class="register_dl clearfix">
      			<dd>是否使用日置产品</dd>
						<dt>
							<label class="register_dx"><input name="is_used" type="radio" value="yes" />&nbsp;&nbsp;是</label>
							<label class="register_dx"><input name="is_used" type="radio" value="no" />&nbsp;&nbsp;否</label>
						</dt>
					</dl>
					<dl class="register_dl clearfix">
      			<dd>日置产品1</dd>
						<dt>
							型号　<input name="hioki_code1" id="hioki_code1" type="text" class="register_text" /><span class="register_f14">　例：8870-21</span>
							<p class="m_top30">名称　<input name="hioki_name1" id="hioki_name1" type="text" class="register_text" /><span class="register_f14">　例：存储记录仪</span>
							</p>
						</dt>
					</dl>
					<dl class="register_dl clearfix">
      			<dd>日置产品2</dd>
						<dt>
							型号　<input name="hioki_code2" id="hioki_code2" type="text" class="register_text" />
							<p class="m_top30">名称　<input name="hioki_name2" id="hioki_name2" type="text" class="register_text" />
							</p>
						</dt>
					</dl>
					<dl class="register_dl clearfix">
      			<dd>日置产品3</dd>
						<dt>
							型号　<input name="hioki_code3" id="hioki_code3" type="text" class="register_text" />
							<p class="m_top30">名称　<input name="hioki_name3" id="hioki_name3" type="text" class="register_text" />
							</p>
						</dt>
					</dl>
					<dl class="register_dl clearfix">
      			<dd>其它产品1</dd>
						<dt>
							型号　<input name="other_code1" id="other_code1" type="text" class="register_text" />
							<p class="m_top30">名称　<input name="other_name1" id="hioki_name1" type="text" class="register_text" />
							</p>
						</dt>
					</dl>
					<dl class="register_dl clearfix">
      			<dd>其它产品2</dd>
						<dt>
							型号　<input name="other_code2" id="other_code2" type="text" class="register_text" />
							<p class="m_top30">名称　<input name="other_name2" id="other_name2" type="text" class="register_text" />
							</p>
						</dt>
					</dl>
					<dl class="register_dl clearfix">
      			<dd>其它产品3</dd>
						<dt>
							型号　<input name="other_code3" id="other_code3" type="text" class="register_text" />
							<p class="m_top30">名称　<input name="other_name3" id="other_name3" type="text" class="register_text" />
							</p>
						</dt>
					</dl>
					<dl class="register_dl clearfix">
      			<dd>希望得到哪种信息</dd>
						<dt>
							<label class="register_dx"><input name="info_type[]" type="checkbox" value="1" />&nbsp;&nbsp;综合样本</label>
							<label class="register_dx"><input name="info_type[]" type="checkbox" value="2" />&nbsp;&nbsp;新产品信息</label>
							<label class="register_dx"><input name="info_type[]" type="checkbox" value="3" />&nbsp;&nbsp;研讨会通知 </label>
							<label class="register_dx"><input name="info_type[]" type="checkbox" value="4" />&nbsp;&nbsp;展会通知</label>
						</dt>
					</dl>
					<dl class="register_dl clearfix" style="border:none;">
      			<dd>意见和建议</dd>
						<dt><textarea name="feedback" id="feedback" cols="50" rows="6" class="register_textarea"></textarea>
						</dt>
					</dl>
					<div class="counterfeit_fill"><input name="" type="submit" value="" class="counterfeit_button01" /><input name="" type="reset" value="" class="counterfeit_button02" />
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
