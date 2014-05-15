<?php

$str = 'http:www.baidu.com';
echo $str;
echo "<br />";

echo str_replace('http','ftp',$str); // 把参数3里的参数1替换为参数2
$arr1 = array('http','baidu');
$arr2 = array('https','google');
echo "<br />";

echo str_replace($arr1,$arr2,$str); // 可以将数组1中的值分别替换为数组2中的值 
echo "<br />";

str_replace('t','a',$str,$count); 
// 可以返回被替换的次数并保存到变量里
echo $count;



 ?>