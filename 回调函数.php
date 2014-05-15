<?php 
function sum($i,$j){
    return $i+$j;
}

function fun($a,$b,$c){
    return $c($a,$b);
}
echo fun(1,2,"sum")
 ?>