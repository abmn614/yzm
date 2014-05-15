<?php
header("content-type:text/html;charset=utf8");
// 在最后追加一个值
// 直接改变原址

$arr=array('aa','bb','cc');


array_push($arr,'dd');


echo "<pre>";
print_r($arr);
echo "</pre>";

 ?>