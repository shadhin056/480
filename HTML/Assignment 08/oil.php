<html>
<?php
session_start();
?>
<body>
Welcome to My World Your Information is there 
<h2>Your Input:</h2>

	


First Name :  <?php echo $_SESSION['firstname']; ?><br>
Last Name :  <?php echo $_SESSION['lastname']; ?><br>
Gender: <?php echo $_SESSION['gender'] ?><br>
Your email address is: <?php echo $_SESSION['email22'] ; ?><br>
Phone Number :  <?php echo $_SESSION['telphone'] ?><br>
Birthday :  <?php echo $_SESSION['Birth_day'] ?><br>
Password :  <?php echo $_SESSION['pass2'] ?><br>
session_destroy();


</body>
</html>