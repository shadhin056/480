<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Global index</title>
</head>

<body>
<?php
$x=5;
$y=6;
function Globalfunction(){
$GLOBALS['x']=$GLOBALS['x']+$GLOBALS['y'];
	}
Globalfunction();
echo $x;

?>
</body>
</html>