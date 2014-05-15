<?php 
$arr=array(1,2,array(3,4));
foreach($arr as $val){
    if(!is_array($val)){  //如果不是数组就输出
        echo $val."<br>";
    }else{
        foreach($val as $val2){  //如果是数组就再次循环
            echo $val2."<br>";
        }
    }
    
}
 ?>