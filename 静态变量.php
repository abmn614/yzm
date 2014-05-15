<?php 
    function fun(){
        static $sum;
        $sum++;
        echo $sum."<br>";
    }
    fun();
    fun();
    fun();
    fun();
    fun();
 ?>