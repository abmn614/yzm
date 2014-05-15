<?php
header("content-type:text/html;charset=utf8");
// 在开头弹出值并输出

$arr=array('aa','bb','cc');


$arr1=array_shift($arr);


echo "<pre>";
print_r($arr);
print_r($arr1);
echo "</pre>";

 ?>