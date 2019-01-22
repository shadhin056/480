<!DOCTYPE html>
<html>
<body>

<?php
//Result of raising $x to the $y'th power (Introduced in PHP 5.6)
$x = 3;  
$y = 2;

echo $x**$y;
	echo "<br>";
//Returns true if $x is equal to $y, and they are of the same type
$x = 100;  
$y = "100";

var_dump($x === $y);
	echo "<br>";
// returns false because values are equal
	$x = 100;  
$y = "100";

var_dump($x <> $y); 
	echo "<br>";
// returns true because types are not equal
	$x = 100;  
$y = "100";

var_dump($x !== $y); 
	echo "<br>";
	//True if either $x or $y is true, but not both
	$x = 100;  
$y = 50;

if ($x == 100 xor $y == 80) {
    echo "Hello world!";
}
	//	True if $x is not true
	echo "<br>";
	$x = 100;  

if ($x !== 90) {
    echo "Hello world!";
}
	echo "<br>";
	//Appends $txt2 to $txt1
	$txt1 = "Hello";
$txt2 = " world!";
$txt1 .= $txt2;
echo $txt1;
	echo "<br>";
	//PHP Array Operators
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

print_r($x + $y);
	echo "<br>";
	$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x == $y);
	echo "<br>";
	$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x === $y);
	echo "<br>";
	$x = array("a" => 5, "b" => "green");  
$y = array("a" => "red", "b" => "green");  

var_dump($x !== $y);
?>

</body>
</html>