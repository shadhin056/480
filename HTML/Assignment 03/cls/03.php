<?php
$cars = array(1,2,3,4,5);
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
    for($y=0;$y<=$x;$y++)
    {
echo $cars[$y];
    }
    
    echo "<br>";
}
echo "<br>";
for($x = 0; $x < $arrlength; $x++) {
    for($y=0;$y<=$x;$y++)
    {
echo $cars[$y];
    }
    
    echo "<br>";
}

for($x =$arrlength; $x >0; $x--) {
    for($y=0;$y<$x;$y++)
    {
echo $cars[$y];
    }
    
    echo "<br>";
}
?>