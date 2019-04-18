<?php
class Main{
    public static function ArrayOrder($arr){
        $odd=[];//定义奇数的空数组
        $even=[];//定义偶数的空数组
        for ($i=0;$i<count($arr);$i++){
            if ($arr[$i]%2==1){//判断为奇数
                $odd[$i] = $arr[$i];
            }else{//否则为偶数
                $even[$i]=$arr[$i];
            }
        }
        return array_merge($odd,$even);//数组拼接返回
    }
}