<?php

$s="012345671289";
//    ^從這個往後找
$pos=strpos($s,"12",2);   
//8
// $result=substr($s,3,4);
$result=str_replace("12","-",$s);

echo $result;
?>aaa