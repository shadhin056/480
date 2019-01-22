<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Assignment 01 no</title>
</head>

<body>
<?php
	$temperature = array("Red", "Green", "Yellow", "Red");
	$count=0;
	foreach($temperature as $key=>$value){
		if($value=="Red")
		{
			$count++;
		}
		
	}
	echo $count." Times";
	?>
</body>
</html>