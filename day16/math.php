<?php
function find($target,$array){
//    //循环遍历该数组
//    foreach($array as $item=>$value){
//        foreach ($value as $t){
//            if (@in_array($target,$t)){
//                return true;
//            }else{
//                return false;
//            }
//        }
//    }
    $len =  count($array);
    $str = '';
    //将二维数组变为一维数组
    for ($i=0;$i<$len;$i++){
        $str.=implode(',',$array[$i]).',';
    }
    $array = explode(',',$str);
    if (in_array($target,$array)){
        return true;
    }else{
        return false;
    }

}
$array = [[1,2,8,9],[2,4,9,12],[4,7,10,13],[6,8,11,15]];
$target = 13;
var_dump(find($target,$array));