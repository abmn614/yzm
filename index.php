<?php
$str = "Linux and PHP are brother.";

$ptn = '/Linux/';

$rep = 'Mysql';

echo preg_replace($ptn, $rep, $str);

 ?>