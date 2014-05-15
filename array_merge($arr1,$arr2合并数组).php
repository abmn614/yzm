<?php 
// 要求：合并俩个数组
// 方法：array_merge($arr1,$arr2)

$arr1=array('first'=>'aa','bb','cc');
// $arr2=array('dd','ee','ff');  // 正常情况
// $arr2=array('aa','ee','ff');  // 值相同，不影响，只是下标不同
$arr2=array('first'=>'gg','ee','ff');  // 键相同，前面的值会被后面的覆盖


$arr3=array_merge($arr1,$arr2);

echo "<pre>";
print_r($arr3);
echo "</pre>";

 ?>