<!DOCTYPE html>
<html>
<body>
<?php 
$x=5;
$y=6;
function myText(){
	$GLOBALS['x']=$GLOBALS['x']+['y'];	
}
myText();
echo $x;
?>
</body>
</html>