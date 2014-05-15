<?php
header("content-type:text/html;charset=utf8");
$str='中文de标题';

echo strpos($str,'e');
echo "<br />";
echo substr($str,0,strpos($str,'e'));
echo "<br />";

// 要求：取目录和文件名
// 方法：
// 1、先确定最后一个/的位置
// 2、利用substr($str,$offset,$lens)函数取目录
// 3、利用strlen($str)算出文件名长度
// 4、同第二步取出文件名
$url="http://localhost/yzm/index.php";

$pos=strrpos($url,'/'); //strrpos()倒找文本
$caturl=substr($url,0,$pos);
echo "{$caturl}<br />";
$fileurl=substr($url,$pos+1,(strlen($url)-$pos));
echo "{$fileurl}<br />";

 ?>