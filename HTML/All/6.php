<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Assignment 01 no</title>
</head>

<body>
<?php
	$temperature = array("Tokyo", "Mexico City", "New York City", "Mumbai","Seoul"," Shanghai", "Lagos", "Buenos Aires", "Cairo", "London", "Dhaka", "Sydney");
	
	echo "<br><br>unordered list<br><br>";
	foreach($temperature as $key=>$value){
		
echo "<ul><li>$value</li></ul>";

	}
	?>
</body>
</html>