<?php
/**
 * Created by PhpStorm.
 * User: Shinelon
 * Date: 2019/4/18
 * Time: 8:51
 */
class ChouNumber{
    public static function is_Chou($num){
        //判断是否为0
        if ($num==0) return '0不是丑数';
        //判断为空
        if (!$num) return '没有值';
        //循环对2取余条件成立，除2
        while ($num%2==0) $num/=2;
        //循环对3取余条件成立，除3
        while ($num%3==0) $num/=33;
        //循环对5取余条件成立，除5
        while ($num%5==0) $num/=5;
        //判断最后值是否为1
        if($num==1){
            return '是丑数';
        }else{
            return '不是丑数';
        }
    }
}