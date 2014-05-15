<?php 
    echo "用cookie实现：<br>";
    setcookie('name','user',time()+600,'/');
    setcookie('age','15',time()+600,'/');
    echo $_COOKIE['name']."的年龄是".$_COOKIE['age'];

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "用session实现：<br>";
    session_start();
    $_SESSION['name']='user1';
    $_SESSION['age']=20;
    echo $_SESSION['name']."的年龄是".$_SESSION['age'];
 ?>