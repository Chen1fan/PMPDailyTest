<?php
function search($n){
    //定义数组
    $arr = [1,2,5,8,9,10,16];
    //统计长度
    $len = count($arr);
    //求中间下标
    $center = ceil($len/2);
//    判断查找的值的下标大于
//    $n1=array_keys($arr,$n);
    if ($n>$arr[$center]){
        //取出右半部分数组
        $arr=array_slice($arr,$center,$center+1);
        //查找元素所在位置，加上中间下标等于原数组中的位置
        return array_search($n,$arr)+$center;
    }
    return array_search($n,$arr);
}
print_r(search(10));