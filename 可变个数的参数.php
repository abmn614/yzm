<?php 
    function fun(){
        echo func_num_args();  //取出所有参数的个数
        //echo func_get_args();  //得到所有参数的值，是一个数组
        //return array_sum(func_get_args());  //用了array_sum()函数输出数组内数字的值

        //不用array_sum()的方法：
        $arr = func_get_args();
        $num = func_num_args();
        $sum = null;
        for ($i=0; $i < $num; $i++) { 
            $sum += $arr[$i];
        }

        return $sum;
    }

    echo fun(1,2,3,4);
 ?>