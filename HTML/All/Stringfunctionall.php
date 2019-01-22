<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>StringFucTIon</title>
</head>

<body>
<?php
//returns a string with backslashes in front of the specified characters.
$str =addcslashes("ShadhiN","N");
echo $str;
echo "<br>------------------<br>";
//Add a backslash in front of each double quote ("):
$str = addslashes('What does "yolo" mean?');
echo($str); 
echo "<br>------------------<br>";
//converts a string of ASCII characters to hexadecimal values and pack() function back it.
$str ="Hello World!";
echo bin2hex($str)."<br>";
echo Pack("H*",bin2hex("$str"));
echo "<br>------------------<br>";
//The chop() function removes whitespaces or other predefined characters from the right end of a string.
$str = "AMi SHADHIN   f.";
echo $str."<br>";
echo chop($str,"f.");
echo "<br>------------------<br>";

//Return characters from different ASCII values:

echo chr(52) . "<br>"; // Decimal value
echo chr(052) . "<br>"; // Octal value
echo chr(0x52) . "<br>"; // Hex value
echo "<br>------------------<br>";

//The chunk_split() function splits a string into a series of smaller parts.
$str = "Hello world!";
echo chunk_split($str,3,".");

echo "<br>------------------<br>";

$str = "Hello world!";
// Encode the string
$encodeString = convert_uuencode($str);
echo $encodeString . "<br>";

// Decode the string
$decodeString = convert_uudecode($encodeString);
echo $decodeString;
echo "<br>------------------<br>";
//a string with all the different characters used
$str = "Hello World!";
echo count_chars($str,3);

echo "<br>------------------<br>";

$str1="Hello world!";
$str2="What a nice day!";
echo $str1 , " " , $str2;
echo "<br>------------------<br>";

$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str));


echo"<br>";
?>
</body>
</html>