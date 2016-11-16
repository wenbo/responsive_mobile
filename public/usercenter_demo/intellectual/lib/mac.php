<?php
/**
 * 这个页面用于生成验证码图像
 * 
 * @author  ♂bingo↗ [coolhpy@163.com]
 * @since   2006-6-17
 */

session_start();
header("Cache-Control: no-cache, must-revalidate");

require("AuthCode.class.php");

$auth_code = new AuthCode();

// 定义验证码信息
$arr['code'] = array(
   // 'characters' => 'A-Z,0-9', 
    'characters' => '0-9', 
    'length' => 4,
    'deflect' => true,
    'multicolor' => false
);
$auth_code->setCode($arr['code']);

// 定义干扰信息
$arr['molestation'] = array(
    'type' => 'point', 
    'density' => 'fewness'
);
$auth_code->setMolestation($arr['molestation']);

// 定义图像信息
$arr['image'] = array(
    'type' => 'jpg', 
    'width' => 95, 
    'height' => 20
);
$auth_code->setImage($arr['image']);

// 定义字体信息
$arr['font'] = array(
    'space' => 5, 
    'size' => 14, 
    'left' => 15, 
    'top' => 17, 
    'file' => 'arial.ttf'
);
$auth_code->setFont($arr['font']);

// 定义背景色
$arr['bg'] = array(
    'r' => 255, 
    'g' => 255, 
    'b' => 255
);
$auth_code->setBgColor($arr['bg']);

// 输出到浏览器
$auth_code->paint();

// 输出到文件, 文件名中不需要扩展名
//$auth_code->paint('./test');
?>