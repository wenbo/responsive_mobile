<?php
session_start();
header("Content-Type: text/html; charset=utf-8");
require_once 'lib/conn.php';
require_once 'lib/function.php';
require_once 'lib/page.class.php';
user_login();
$sql = " SELECT * FROM `h_file_category` WHERE 1 ORDER BY `parent_id` ASC ,`category_id` ASC ";
$query = mysql_query($sql);
while($get = mysql_fetch_assoc($query))
{
	$data[] = $get;
}

 function getChildAllCategoryids($data, $parent_id=0)
 {
	$list= array();
	if ($parent_id>0)
	{
		$list[$parent_id] = $parent_id;
	}
	foreach($data as $v1)
	{
		if ($v1['parent_id']==$parent_id)
		{
			$list[$v1['category_id']] = $v1['category_id'];
			foreach($data as $v2)
			{
				if ($v2['parent_id']==$v1['category_id'])
				{
					$list[$v2['category_id']] = $v2['category_id'];
					foreach($data as $v3)
					{
						if ($v3['parent_id']==$v2['category_id'])
						{
							$list[$v3['category_id']] = $v3['category_id'];
						}
					}
				}
			}
		}
	}
	return $list;
 }


//部门递归只允许3层
$select_list = array();
foreach($data as $v1)
{
	if ($v1['parent_id']==0)
	{
		$list[$v1['category_id']] = array('name'=>$v1['name'], 'category_id'=>$v1['category_id']);
		$select_list[$v1['category_id']] = array('name'=>$v1['name'], 'category_id'=>$v1['category_id']);
		foreach($data as $v2)
		{
			if ($v2['parent_id']==$v1['category_id'])
			{
				$list[$v2['category_id']] = array('name'=>$v1['name'].'＞'.$v2['name'], 'category_id'=>$v2['category_id']);
				$select_list[$v2['category_id']] = array('name'=>$v1['name'].'＞'.$v2['name'], 'category_id'=>$v2['category_id']);
				foreach($data as $v3)
				{
					if ($v3['parent_id']==$v2['category_id'])
					{
						$list[$v3['category_id']] = array('name'=>$v1['name'].'＞'.$v2['name'].'＞'.$v3['name'], 'category_id'=>$v3['category_id']);
						$select_list[$v3['category_id']] = array('name'=>$v1['name'].'＞'.$v2['name'].'＞'.$v3['name'], 'category_id'=>$v3['category_id']);
					}
				}
			}
		}
	}
}

$where = "WHERE 1 ";
$cid = (int)$_GET['category_id'];
$code = htmlspecialchars(trim($_GET['code']));
$name = htmlspecialchars(trim($_GET['name']));
if ($cid>0)
{
	$all_category_id = getChildAllCategoryids($data, $cid);
	$where .= " AND ( `category_id` IN (".implode(',', $all_category_id).") ) ";
}
if ($code!='')
{
	$where .= " AND `code` LIKE '%".$code."%' ";
}
if ($name!='')
{
	$where .= " AND `name` LIKE '%".$name."%' ";
}

$sql = " SELECT COUNT(`file_id`) FROM `h_file` ".$where." ";
$query = mysql_query($sql);
$row = mysql_fetch_row($query);
$total = $row[0];

$onepage = 30;
$pb = new AsPagebar($total, $onepage);
$offset = $pb->offset();
$pagebar = $pb->whole_bar(2, 9);

$sql = " SELECT * FROM `h_file` ".$where." ORDER BY `file_id` DESC LIMIT ".$offset.", ".$onepage." ";
$query = mysql_query($sql);
while($get = mysql_fetch_assoc($query))
{
	$list2[] = $get;
	$category_id[] = $get['category_id'];
}

if (!empty($category_id))
{
	$sql = " SELECT * FROM `h_file_category` WHERE `category_id` IN (".implode(',', $category_id).") ";
	$query = mysql_query($sql);
	while($get = mysql_fetch_assoc($query))
	{
		$c[$get['category_id']] = $get['name'];
	}
}
?>
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
<a name="top" id="top"></a>
<div class="top_bg">
  <div class="top clearfix">
	<p class="fl">中国区维修服务中心（日置(上海) 商贸有限公司）</p>
    <p class="fr"><a href="#"><img src="../images/hioki_r1_c30.jpg" width="28" height="26" />会员退出</a>　<img src="../images/hioki_r1_c32.jpg" width="22" height="26" />400-920-6010</p>
  </div>
</div>
<div class="header">
  <h1 class="fl"><a href="../index.html"><img src="../images/hioki_r4_c3.jpg" alt="HIOKI" width="150" height="30" /></a></h1>
  <ul>
  	<li><a href="../index.html">首　　页</a></li>
    <li><a href="../news.html">新　　闻</a></li>
    <li><a href="../product.html">产品一览</a></li>
    <li><a href="../about/company.html">公司介绍</a></li>
    <li><a href="../contact.html">联系我们</a></li>
    <li class="nav_li02"><a href="../repair.html">维修中心</a></li>
  </ul>
</div>
<div class="t_center"><img src="../images/intellectual_r1_c1.jpg" alt="HIOKI" width="1401" height="328" /></div>
<div class="news_content clearfix">
<?php 
include("product_left.php");//加载template
?>
  <div class="product_right">
  	<p class="current"><a href="../index.html">首页</a> > <a href="intellectual.html">智测会</a> > 资料下载</p>
    <h3 class="product_f25 m_top20">资料下载</h3>
    
    <div id="pic_corpus_01">
                <form action="im_download.php" name="FORMADD" method="get">
    <ul class="product_search m_top25">
      <li class="recorder_f18">文件下载列表</li>
      <li>文件类别　
<select name="category_id">
                <option value="">全部</option>
<?php
foreach($select_list as $l)
{ 
  if ($l['category_id']==$cid) 
  {
    $selected = " selected";
  }
  else
  {
    $selected = "";
  }
  echo "<option value=\"".$l['category_id']."\"".$selected.">".$l['name']."</option>\n";
}
?>
                </select>

          </li>　
      <li class="product_number"><p>文件名称</p><input name="" type="text" /><input name="" type="submit" value="" /></li>
    </ul>
                </form>
    <div class="m_top20">
      <table width="925" border="0" cellspacing="0" cellpadding="0" class="im_table">
  <tr>
    <th bgcolor="#F0F7FD">编号</th>
    <th bgcolor="#F0F7FD">类别</th>
    <th bgcolor="#F0F7FD">型号</th>
    <th bgcolor="#F0F7FD">名称</th>
    <th bgcolor="#F0F7FD">备注</th>
    <th bgcolor="#F0F7FD">类型</th>
    <th bgcolor="#F0F7FD">大小</th>
    <th bgcolor="#F0F7FD">更新时间</th>
    <th bgcolor="#F0F7FD">点击</th>
  </tr>
	<?php
	if (!empty($list2))
	{
		$i = 1;
	foreach($list2 as $l) { 
	?>
	<tr>
	<td align="center"><?php echo $i;?></td>
	<td><?php echo $c[$l['category_id']];?></td>
	<td><?php echo $l['code'];?></td>
	<td><?php echo $l['name'];?></td>
	<td><?php echo $l['remark'];?>&nbsp;</td>
	<td align="center"><?php echo $l['type'];?></td>
	<td align="center"><?php echo $l['size'];?></td>
	<td align="center"><?php echo substr($l['update_time'],0,16);?></td>
	<td align="center"><a href="download.php?id=<?php echo $l['file_id'];?>">下载</a></td>
	</tr>
	<?php $i++;} } ?>
</table>
	<?php if ($total>$onepage) { ?><br>
	<table class="page" width="925" border="0" cellspacing="0" cellpadding="0">
	<tr>
	<td width="100" align="left">合计：<?=$total;?> 条</td>
	<td align="right"><?php echo $pagebar;?></td>
	</tr>
	</table>
	<?php } ?>
    </div>
    </div>
  </div>
</div>
<p class="m_top45">&nbsp;</p>
<p class="hioki_page"><a href="#top"><img src="../images/hioki_r28_c37.jpg" width="60" height="57" /></a></p>
<div class="hioki_column">
  <div class="hioki_search clearfix">
  	<div class="hioki_column01">
      <h3 class="hioki_f23">业界商品分类 <span class="hioki_f15">Search Applications</span></h3>
      <ul class="m_top25">
      	<li>&gt; 电力/新能源 <span class="hioki_f12">Power, Energy, Environment</span></li>
        <li class="m_top10">&gt; 汽车 <span class="hioki_f12">Automotive, Transport</span></li>
        <li class="m_top10">&gt; 电子零件 <span class="hioki_f12">Components, Semiconductors</span></li>
        <li class="m_top10">&gt; 通信 <span class="hioki_f12">Home appliances, Communications</span></li>
        <li class="m_top10">&gt; 电池 <span class="hioki_f12">Battery</span></li>
        <li class="m_top10">&gt; 交通（地铁、铁道、航空）<br />　<span class="hioki_f12">Underground, Railway, Aviation</span></li>
        <li>&nbsp;</li>
      </ul>
    </div>
    <div class="hioki_column02 clearfix">
      <h3 class="hioki_f23">日置产品一览 <span class="hioki_f15">Search Category</span></h3>
      <ul class="hioki_w205 m_top25">
      	<li>&gt; 记录仪、存储记录仪</li>
        <li class="m_top10">&gt; 安全标准测量仪</li>
        <li class="m_top10">&gt; 电力测量仪器</li>
        <li class="m_top10">&gt; 电子测量仪表</li>
        <li class="m_top10">&gt; 钳形表、钳式传感器</li>
        <li class="m_top10">&gt; 数据记录、环境测量</li>
        <li class="m_top10">&gt; 现场测试仪</li>
      </ul>
      <ul class="fl m_top25">
      	<li>&gt; 通讯测试仪</li>
        <li class="m_top10">&gt; 万用表</li>
        <li class="m_top10">&gt; 自动测试设备</li>
        <li class="m_top10">&gt; 信号发生器</li>
        <li class="m_top10">&gt; 其他测试仪</li>
        <li class="m_top10">&gt; HIOKI其他产品</li>
      </ul>
    </div>
    <div class="hioki_column03">
      <h3 class="hioki_f23">关于日置 <span class="hioki_f15">About HIOKI</span></h3>
      <ul class="m_top25">
      	<li>&gt; 关于社长</li>
        <li class="m_top10">&gt; HIOKI的企业目标</li>
        <li class="m_top10">&gt; 事业内容</li>
        <li class="m_top10">&gt; 环境・CSR</li>
        <li class="m_top10">&gt; 公司概要</li>
        <li class="m_top10">&gt; 公司分布・分公司</li>
        <li>&nbsp;</li>
      </ul>
    </div>
  </div>
</div>
<div class="footer clearfix">
  <h1 class="fl"><img src="../images/hioki_r30_c2.jpg" width="148" height="30" /></h1>
  <p class="footer_dh"><img src="../images/hioki_r31_c14.jpg" width="17" height="17" /> 021-63343307/3308</p>
  <p class="footer_dh"><img src="../images/hioki_r32_c18.jpg" width="15" height="12" /> info@hioki.com.cn</p>
  <p class="footer_dh">中国区维修服务中心（日置(上海) 商贸有限公司）</p>
  <ul class="fr">
  	<li><a href="../index.html">&gt; 首　页</a></li>
    <li><a href="../news.html">&gt; 新　闻</a></li>
    <li><a href="../product.html">&gt; 产品一览</a></li>
    <li><a href="../about/company.html">&gt; 公司介绍</a></li>
    <li><a href="../contact.html">&gt; 联系我们</a></li>
  </ul>
  <p class="footer_icp clear">沪ICP备05013343号</p>
</div>
</body>
</html>
