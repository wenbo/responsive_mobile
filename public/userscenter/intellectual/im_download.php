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
<title>资料下载｜HIOKI-日置(上海) 商贸有限公司</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="/assets_doc/front/html/css/style.css" rel="stylesheet" type="text/css" />
<link href="/assets_doc/front/html/css/pad.css" rel="stylesheet" type="text/css" />
<link href="/assets_doc/front/html/css/sp.css" rel="stylesheet" type="text/css" />

<script src="/assets_doc/front/html/js/scrollsmoothly.js"></script>
<script src="/assets_doc/front/html/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="/assets_doc/front/html/js/tab.js"></script>
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
  <div class="product_right">
    <p class="current sp_none"><a href="/index.html">首页</a> > <a href="intellectual.html">智测会</a> > 资料下载</p>
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
      <li class="product_number"><p>文件名称</p><input name="name" value="<?php echo $name;?>" type="text" /><input name="submit" type="submit" value="" /></li>
    </ul>
                </form>

    <div class="m_top20 sp_w100">
      <table border="0" cellspacing="0" cellpadding="0" class="im_table pad_w100 sp_w100">
  <tr>
     <th nowrap="nowrap" bgcolor="#F0F7FD">编号</th>
    <th nowrap="nowrap" bgcolor="#F0F7FD">类别</th>
    <th nowrap="nowrap" bgcolor="#F0F7FD">型号</th>
    <th nowrap="nowrap" bgcolor="#F0F7FD">名称</th>
    <th nowrap="nowrap" bgcolor="#F0F7FD">备注</th>
    <th nowrap="nowrap" bgcolor="#F0F7FD">类型</th>
    <th nowrap="nowrap" bgcolor="#F0F7FD">大小</th>
    <th nowrap="nowrap" bgcolor="#F0F7FD">更新时间</th>
    <th nowrap="nowrap" bgcolor="#F0F7FD">点击</th>
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
        <table class="page pad_w100 sp_w100" border="0" cellspacing="0" cellpadding="0">
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
<?php 
include("../footer.php");//加载template
?>
</body>
</html>
