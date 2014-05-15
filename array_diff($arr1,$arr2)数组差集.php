<?php 
// 要求：取两个数组的差集（不同值）
// 方法：array_diff($arr1,$arr2)  // 以参数2为参照，返回参数2的值

$arr1=array('aa','bb','cc');
$arr2=array('cc','ee','ff'); 

// $arr3=array_diff($arr1,$arr2);
$arr3=array_diff($arr2,$arr1);


echo "<pre>";
print_r($arr3);
echo "</pre>";

 ?>