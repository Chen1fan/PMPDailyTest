<?php
function FindNumbersWithSum($array, $sum){
    $len = count($array);
    $a = [];///定义一个空数组，用于存放满足条件的结果集
    if ($len<2) return false;//数组元素小于2，终止
    for($i=0;$i<$len;$i++){
        for ($j=1;$j<$len;$j++){
            if ($array[$i]+$array[$j]==$sum){
                $a[] = $array[$i]*$array[$j];
            }
        }
    }
    //对数组按照大小排序
    sort($a);
    //数组最小值返回
    return $a[0];

}
$array = range(1,8);
print_r(FindNumbersWithSum($array,14));