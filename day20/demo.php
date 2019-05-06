<?php
/**
 * Created by PhpStorm.
 * User: Shinelon
 * Date: 2019/5/6
 * Time: 8:43
 */
function CountSteps($x,$y) {
    if ($x==1 || $y==1){
        //x或y任意一个为1，都只有两种走法
        return 2;
    }
    return (($x-1)*$x)+(($y-1)*$y);
}
echo CountSteps(3,3);