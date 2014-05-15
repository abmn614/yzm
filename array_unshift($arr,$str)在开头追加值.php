<?php
header("content-type:text/html;charset=utf8");
// 在开头追加值
// 自带引用

$arr=array('aa','bb','cc');


array_unshift($arr,'abc');


echo "<pre>";
print_r($arr);
echo "</pre>";

 ?>