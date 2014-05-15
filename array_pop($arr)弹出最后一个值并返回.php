<?php
header("content-type:text/html;charset=utf8");
// 删除最后一个值并返回

$arr=array('aa','bb','cc');


$arr1=array_pop($arr);


echo "<pre>";
print_r($arr);

echo "弹出的值是：<br>";

print_r($arr1);
echo "</pre>";

 ?>