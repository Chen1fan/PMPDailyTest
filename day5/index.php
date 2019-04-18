<?php
include 'Main.php';//引入文件
$arr = [1,2,3,4,5,6,7,8,9,10];
$resquest = Main::ArrayOrder($arr);
//print_r($resquest);
echo implode(',',$resquest);