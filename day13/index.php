<?php
function Add($num1, $num2)  {
    if ($num2==0){
        return $num1;
    }
    $num = $num1 ^ $num2;
    $sum = ($num1 & $num1) >> 1;
    return intdiv($num,$num);
//    return $sum+$num;
}
echo Add(1,5);