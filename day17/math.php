<?php

function Combine($arr_A, $arr_B){
    //定义空数组
    $arr = [];
    $len = count($arr_A)+count($arr_B);
//    return $len;
    for ($i=0;$i<count($arr_A);$i++){
        $arr[$i]=$arr_A[$i];
    }
    for ($i=count($arr_A);$i<$len;$i++){
        for ($j=0;$j<count($arr_B);$j++) {
            $arr[$i] = $arr_B[$j];
        }
    }
    return $arr;
}
$arr_A=[1,3,6,9];
$arr_B=[2,4,5,8,20];
print_r(Combine($arr_A,$arr_B));