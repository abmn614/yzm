<?php 
// 要求：合并俩个数组
// 方法：array_combine($arr1,$arr2)  // 第一个参数规定下标，第二个参数规定值

$arr1=array('aa','bb','cc');
$arr2=array('dd','ee','ff'); 


$arr3=array_combine($arr1,$arr2);

echo "<pre>";
print_r($arr3);
echo "</pre>";

 ?>