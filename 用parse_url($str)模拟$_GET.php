<?php
$str = 'http://localhost/yzm/index.php?id=10&name=user1';
$arr = parse_url($str);
$query = $arr['query'];
$keyval = explode('&',$query);

foreach ($keyval as $val) {
    $idname = explode('=',$val);
    $rst[$idname[0]] = $idname[1];    
}

echo "<pre>";
print_r($rst);
echo "</pre>";
 ?>