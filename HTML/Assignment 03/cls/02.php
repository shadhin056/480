<?php
$cars = array(1,2,3,4,5,6,7,8,9,10);
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    if($x<9)
    {

    echo "-";
    }
    else if($x==10)
    {
        break;
    }
    }
?>