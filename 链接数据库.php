<?php 
    header("content-type:text/html;charset=utf-8");  
    //设置编码
    //注意header前面不能有任何html输出。
    
    $conn=mysql_connect("localhost","root","");
    //创建一个数据库资源
    
    mysql_select_db("test");
    //链接数据库
    
    mysql_query("set names utf8");
    //设置数据库编码，解决中文乱码

    $sql="select * from user";
    //查询一个表

    $rst=mysql_query($sql);
    //获得查询结果

    //输出结果
    while($row=mysql_fetch_assoc($rst)){  //逐个获取结果中的值
        echo "<p>UserName:{$row['UserName']}</p>";
        echo "<p>Password:{$row['Password']}</p>";        
    }

 ?>