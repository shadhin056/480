
<html>

<body>
Welcome to My World Your Information is there 
<h2>Your Input:</h2>

	

 <?php
$myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>


</body>
</html>