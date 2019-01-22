
<html>
<?php
session_start();
?>
<?php
// Date in the past
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");
?>
<body>
Welcome to My World Your Information is there 
<h2>Your Input:</h2>

	
<?php
$myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
	$cars=file("newfile.txt");
echo "First Name :".$cars[0]."<br>"; 
echo "Last Name :".$cars[1]."<br>"  ;
echo "Gender:".$cars[2]."<br>" ;
echo "Your email address is:".$cars[3]."<br>"  ;
echo "Phone Number : ".$cars[4]."<br>"  ;
echo "Birthday : ".$cars[5]."<br>"  ;
echo "Password : ".$cars[6]."<br>"  ;
	
 
 ?>

First Name :  <?php echo $_SESSION['firstname']; ?><br>
Last Name :  <?php echo $_SESSION['lastname']; ?><br>
Gender: <?php echo $_SESSION['gender'] ?><br>
Your email address is: <?php echo $_SESSION['email22'] ; ?><br>
Phone Number :  <?php echo $_SESSION['telphone'] ?><br>
Birthday :  <?php echo $_SESSION['Birth_day'] ?><br>
Password :  <?php echo $_SESSION['pass2'] ?><br>
session_destroy();
<?php
$myfile = fopen("newfile.txt", "a+") or die("Unable to open file!");
// Output one character until end-of-file
while(!feof($myfile)) {
	echo "<br>";
  echo fgets($myfile);
}
	print_r(file("newfile.txt"));
	
	$cars=file("newfile.txt");
	
fclose($myfile);
?>



</body>
</html>