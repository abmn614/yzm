<?php
$str = 'http://localhost/yzm/index.php?id=11&name=user1';
$arr = parse_url($str);

$arr2 = preg_split('/&|=/', $arr['query']);

for($i=0;$i<count($arr2);$i++){ 
    $rst[$arr2[$i]] = $arr2[++$i];
}

echo "<pre>";
print_r($rst);
echo "</pre>";
 ?>