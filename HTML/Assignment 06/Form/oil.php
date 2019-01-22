<html>
<body>
Welcome to My World Your Information is there 
<h2>Your Input:</h2>";
<?phps
	session_start();
	 $firstName = $_COOKIE['firstname'];
	echo $firstName;
	?>


First Name :  <?php echo $firstName ?><br>
First Name :  <?php echo $_POST["firstname"]; ?><br>
Last Name :  <?php echo $_POST["lastname"]; ?><br>
Gender: <?php echo $_POST["gender"]; ?><br>
Your email address is: <?php echo $_POST["email22"]; ?><br>
Phone Number :  <?php echo $_POST["telphone"]; ?><br>
Birth day :  <?php echo $_POST["Birth_day"]; ?><br>
password :  <?php echo $_POST["pass1"]; ?><br>


</body>
</html>