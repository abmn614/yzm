<?php
$str = 'http://localhost/yzm/index.php?id=11&name=user1';
$arr = parse_url($str);

parse_str($arr['query'],$rst);



echo "<pre>";
print_r($rst);
echo "</pre>";
 ?>