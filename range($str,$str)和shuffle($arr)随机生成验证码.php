<?php
// 要求：随机生成验证码
// 方法：
// 1、array_rand(str1,str2)，从指定范围内生成随机数
// 2、array_merge($arr1,$arr2,$arr3)，将随机生成的数字和大小写字母合并
// 3、shuffle($arr)打乱顺序
// 4、array_slice($arr,$offset,$num)取验证码个数
// 5、join($str,$arr)将数组中的值连接成验证码字符串

$arr=array_merge(range(0,9),range(a,z),range(A,Z));
shuffle($arr);
$arr1=array_slice($arr,0,4);
$str=join(" ",$arr1);

echo "<pre>";
print_r($str);
echo "</pre>";


 ?>