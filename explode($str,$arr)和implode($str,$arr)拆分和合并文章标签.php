<?php 
// 要求：将文章的标签分割为数组
// 方法：explode($str,$arr)

$str="美女 小清新 长发 90后 校花";

$arr=explode(" ", $str);

echo "<pre>";
print_r($arr);
echo "</pre>";


// 要求：将数组合并为字符串
// 方法：implode($str,$arr)=join($str,$arr)

$str1=join(",",$arr);

echo "<pre>";
print_r($str1);
echo "</pre>";

 ?>