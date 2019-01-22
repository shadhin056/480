<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body><?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");

while(!feof($myfile)) {
  echo fgetc($myfile) . "<br>";
}
fclose($myfile);
?>
</body>
</html>