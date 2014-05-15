<?php
// 要求：去全班成绩的平均值
// 方法：array_sum($arr)

$arr=array(10,20,30,40);

$avg=array_sum($arr)/count($arr);

echo $avg;

 ?>