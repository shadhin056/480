<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Static</title>
</head>

<body>
<?php
function staticfunction()
{
    static $x=5;
    $y=5;
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";
    $x++;
} 
staticfunction();
staticfunction();
staticfunction();
staticfunction();
?>
</body>
</html>