<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Time in pHp</title>
</head>

<body>
 <?php
	echo "Today is ". date("Y/M/D")."<br>"; 
	echo "Today is ". date("y/m/d")."<br>";
	echo "Today is ". date("D")."<br>";
	echo "Today is ". date("l")."<br>";
	echo "Today is ". date("Y-m-d")."<br>";
	echo "© 2010 - ".date("Y")."<br>";
	date_default_timezone_set("Asia/Dhaka");
	echo "The Time is " . date("h:i:sa");
	
	?>
	<?php
	echo "<br><br>";
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
?>
<?php
	echo "<br><br>";
	$startTime = strtotime("sunday");
	
	//echo date("M",$startTime);
	
	$EndTime = strtotime("+4 weeks",$startTime);
	
	while($EndTime>$startTime){
		echo date("l",$startTime);
		echo "<br>";
		$startTime=strtotime("+1 week",$startTime);
	}
	
	?>
<?php
var_dump(checkdate(12,31,-400));
echo "<br>";
var_dump(checkdate(2,29,2003));
echo "<br>";
var_dump(checkdate(2,8,2004));
?>
<?php
echo date_default_timezone_get();
?>
<?php
$date1=date_create("2013-03-15");
$date2=date_create("2013-12-12");
$diff=date_diff($date1,$date2);
	
?>
<?php echo "<br>";
$date1=date_create("2017-02-08");	
	
date_add($date1,date_interval_create_from_date_string("21 years"));
echo date_format($date1,"Y");
	
	
?>
<?php
	echo "<br>";
$date1=date_create("2013-03-15");
$date2=date_create("2013-12-12");
//echo $diff->format("%R%a days");
?>
<?php
echo(strftime("%B %d %Y, %X %Z",mktime(20,0,0,12,31,98))."<br>");

setlocale(LC_ALL,"hu_HU.UTF8");
echo(strftime("%Y. %B %d. %A. %X %Z"));
?>
</body>
</html>