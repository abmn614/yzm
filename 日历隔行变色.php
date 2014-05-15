<?php 
    header("content-type:text/html;charset=utf-8");  
    $days=31;
    $h=0;
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    for($i=1; $i<=$days;){
        $h++;

        if ($h%2==1) {
            echo "<tr style='background: #ccc;'>";
        }else{
            echo "<tr>";
        }

        for ($j=0; $j<7; $j++) {
            if ($i>31) {
                echo " ";
            }else{
                echo "<td>{$i}</td>";
            }
            
            $i++;
        }

        echo "</tr>";
        
    }
    echo "</table>";
 ?>