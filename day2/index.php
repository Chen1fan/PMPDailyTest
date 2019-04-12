<?php

    if (!empty($_POST)){
    $number = $_POST['number'];//获取输入的值
    $hurder = floor($number/100);//求百位
    $ten = floor($number%100/10);//求十位
    $one = floor($number%10);//求个位
//    判断个位的三次方加十位的三次方加百位的三次方是否等于输入的值
    if ($hurder*$hurder*$hurder+$ten*$ten*$ten+$one*$one*$one == $number){
        echo $number.'是水仙花数';
    }else{
        echo $number.'不是水仙花数';
    }
}

?>
<form action="index.php" method="post">
请输入一个三位数：<input type="text" maxlength="3" name="number">
    <input type="submit">
</form>