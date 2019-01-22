
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
<h1 style="color: red; width: 100% ;text-align: center ;border: 2px solid green">Welcome to My World Your Information is there</h1> 
<h2 style="color: #897AE5; width: 100% ;text-align: center ;border: 2px solid green">Your Input: Using File with Array</h2>

	
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
<h2 style="color: #897AE5; width: 100% ;text-align: center ;border: 2px solid green">Your Input: Using SessioN </h2>
First Name :  <?php echo $_SESSION['firstname']; ?><br>
Last Name :  <?php echo $_SESSION['lastname']; ?><br>
Gender: <?php echo $_SESSION['gender'] ?><br>
Your email address is: <?php echo $_SESSION['email22'] ; ?><br>
Phone Number :  <?php echo $_SESSION['telphone'] ?><br>
Birthday :  <?php echo $_SESSION['Birth_day'] ?><br>
Password :  <?php echo $_SESSION['pass2'] ?><br>


<h2 style="color: #897AE5; width: 100% ;text-align: center ;border: 2px solid green">Your Input: Using File </h2>
<?php
$myfile = fopen("newfile.txt", "a+") or die("Unable to open file!");
// Output one character until end-of-file
while(!feof($myfile)) {
	echo "<br>";
  echo fgets($myfile);
}
	
	
	$cars=file("newfile.txt");
	
fclose($myfile);
?>
<h2 style="color: #897AE5; width: 100% ;text-align: center ;border: 2px solid green">Your Input: Using File  Just print Array </h2>
<?php
print_r(file("newfile.txt"));	?>
<?php session_destroy(); ?>
</body>
</html>