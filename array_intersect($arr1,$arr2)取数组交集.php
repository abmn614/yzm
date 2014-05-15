<?php 
// 要求：取交集
// 方法：array_intersect($arr1,$arr2)

$arr1=array('aa','bb','cc');
$arr2=array('cc','ee','ff'); 


$arr3=array_intersect($arr1,$arr2);

echo "<pre>";
print_r($arr3);
echo "</pre>";

 ?>