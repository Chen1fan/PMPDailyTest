<?php
function ReverseSentence($str){
    $arr = explode(' ',$str);//按空格分割成数组
    $arr = array_reverse($arr);//将数组元素逆序
    return $str = implode(' ',$arr);//字符串返回
}
$str = 'study love i';
echo ReverseSentence($str);