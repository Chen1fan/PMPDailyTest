<?php
function Sum_Solution($n){
    $sum = $n;//附初始值
    $sum&&$sum+=Sum_Solution($n-1);
    return $sum;//返回值
}
echo Sum_Solution(5);