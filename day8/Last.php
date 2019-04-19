<?php
/**
 * Created by PhpStorm.
 * User: Shinelon
 * Date: 2019/4/19
 * Time: 8:52
 */
class Last
{
    public static function LastRemaining_Solution($n, $m)
    {
//        $num = 1;//计数
//        $sum = range(0,$n-1);
//        foreach ($sum as $key=>$v){
//            if ($num==$n){
//                $num=1;
//                continue;
//            }
//            $num++;
//        }
//        return $sum[$num];
//    }
        $sum = range(0, $n - 1);
        $num = 1;
        if ($n==0) return 0;
        if ($n<1||$m<1) return -1;
        return (self::LastRemaining_Solution($n-1,$m)+$m)%$n;
    }
}