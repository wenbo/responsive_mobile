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
  	<p class="current"><a href="/index.html">首页</a> > <a href="intellectual.html">智测会</a> > 资料下载</p>
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
    <div class="m_top20">
      <table width="925" border="0" cellspacing="0" cellpadding="0" class="im_table">
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
<?php 
include("../footer.php");//加载template
?>
</body>
</html>
