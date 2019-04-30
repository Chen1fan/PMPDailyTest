<?php
//定义函数
function NumberOf1($n){
    $str = decbin($n);//将十进制数变为二进制
//    return $str;
    return substr_count($str,'1');//统计1出现的次数，并返回
}
$n=161;
echo NumberOf1($n);