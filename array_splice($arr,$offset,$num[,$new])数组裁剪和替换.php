<?php 
// 要求：截取数组
// 方法：array_slice($arr,$offset,$num)
$arr=array('a','b','c','d','e');

$arr1=array_slice($arr, -2, 2);  //-2表示从数组倒数第二个开始截取

echo "<pre>";
print_r($arr1);
echo "</pre>";


// 要求：裁剪元数组
// 方法：array_splice($arr,$offset,num[,$new])

// $arr2=array_splice($arr,1,2);
$arr3=array_splice($arr,1,2,array('bc','de'));

echo "<pre>";
print_r($arr);
// print_r($arr2);
print_r($arr3);
echo "</pre>";


 ?>