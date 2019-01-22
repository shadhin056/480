<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Assignment 01 no</title>
</head>

<body>
<?php
	$temperature=array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
	rsort($temperature);
	echo "<br> Highest temperature  :".$temperature[0];
	
	sort($temperature);
	echo "<br> Lowest temperature :"  .$temperature[0];
	
	
	$c=count($temperature);
	$sum=array_sum($temperature);
	$avg=$sum/$c;
	echo "<br> Average temperature  :".$avg;
	
	
	?>
</body>
</html>