<!DOCTYPE html>
<html>

<head>
	<style>
		.error {
			color: #FF0000;
		}
		
		input[type=password],
		select {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		
		.button {
			width: 100%;
			background-color: #4CAF50;
			/* Green */
			border: none;
			color: white;
			padding: 16px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			-webkit-transition-duration: 0.4s;
			/* Safari */
			transition-duration: 0.4s;
			cursor: pointer;
		}
		
		.button2 {
			background-color: white;
			color: black;
			border: 2px solid #008CBA;
		}
		
		.button2:hover {
			background-color: #008CBA;
			color: white;
		}
		
		input[type=reset],
		select {
			background-color: #3B5998;
			color: white;
			padding: 10px;
			margin: 2px;
			border-radius: 5px;
			cursor: pointer;
		}
		
		input[type=reset]:hover {
			background-color: Black;
		}
		
		input[type=email],
		select {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		
		input[type=tel],
		select {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		
		input[type=date],
		select {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		
		article {
			margin-left: 250px;
			margin-right: 250px;
			margin-bottom: 20px;
			margin-top: 20px;
			border: 1px solid Black;
			overflow: hidden;
			border-radius: 25px;
			background-color: #F0DEF1;
			padding-left: 20px;
			padding-right: 20px;
			padding-bottom: 50px;
			padding-top: 5px;
		}
		
		input[type=text],
		select {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		
		input[type=submit] {
			background-color: #3B5998;
			color: white;
			padding: 10px;
			margin: 2px;
			border-radius: 5px;
			cursor: pointer;
		}
		
		input[type=submit]:hover {
			background-color: Black;
		}
		
		div.container {
			width: 100%;
			border: 5px solid black;
			padding: 2px;
		}
		
		header,
		footer {
			padding: 5px;
			color: white;
			background-color: black;
			clear: left;
			text-align: center;
		}
		
		footer {
			padding: 10px;
		}
		
		nav {
			float: left;
			max-width: 160px;
			margin: 0;
			padding-left: 100px;
			max-width: 30%;
			height: 100%;
		}
	</style>
</head>

<body>
<?php
    
    if($_POST)                         // if form is submitted
    {
        //not empty
        //atleast 6 characters long
$firstNameErr = $lastNmeErr = $email1Err = $email2Err = $genderErr = $telErr = $passErr2= $passErr1="";
$firstName = $lastName = $email1 = $email2 =$gender = $comment = $tel = $pass01 = $pass02 = "";
        $errors = array();

        //start validation
      
// first name check 
		$firstName = test_input( $_POST[ "firstname" ] );
		if ( !preg_match( "/^[a-zA-Z ]*$/", $firstName ) ) {
			$errors['Name11'] = "Only letters and white space allowed";
		}
        if(strlen($_POST['firstname']) < 2)
        {
            $errors['Name12'] = "Your first name must be atleast 2 characters long";
        }  
		if(strlen($_POST['firstname']) > 20)
        {
            $errors['Name13'] = "Your first name must be less than 20 characters long";
        }  
// surname name check 
		
		$lastName = test_input( $_POST[ "lastname" ] );
		if ( !preg_match( "/^[a-zA-Z ]*$/", $lastName ) ) {
			$errors['Name21'] = "Only letters and white space allowed";
		}
        if(strlen($_POST['lastname']) < 2)
        {
            $errors['Name22'] = "Your last name must be atleast 2 characters long";
        }  
		if(strlen($_POST['lastname']) > 20)
        {
            $errors['Name23'] = "Your last name must be less than 20 characters long";
        }  
// gender check 
		
		if ( empty( $_POST[ "gender" ] ) ) {
			$errors['gender'] = "Gender is required";
		} 
// email  check
		if ( strcmp( $_POST["email11"], $_POST["email22"] )!=0 ) {
			$errors['email'] ="Email Not match";
		} 
// password check 
		if ( strcmp( $_POST["pass1"], $_POST["pass2"] )!=0 ) {
			$errors['password'] = "password Not match";
		} 
      
        if(strlen($_POST['pass1']) < 8)
        {
            $errors['password11'] = "Password must be atlest 8 characters long";
        }

		if(strlen($_POST['pass1']) > 20)
        {
            $errors['password12'] = "Password must be less than 20 characters long";
        }
		if(strlen($_POST['pass2']) < 8)
        {
            $errors['password21'] = "Password must be atlest 8 characters long";
        }

		if(strlen($_POST['pass2']) > 20)
        {
            $errors['password22'] = "Password must be less than 20 characters long";
        }
		// tel check
		

      
        if(strlen($_POST['telphone']) < 8)
        {
            $errors['telphone1'] = "telphone must be atlest 8 characters long";
        }

		if(strlen($_POST['telphone']) > 20)
        {
            $errors['telphone2'] = "telphone must be less than 20 characters long";
        }
		$tel = test_input( $_POST[ "telphone" ] );
		
           if ( !preg_match( "/[0-9]/", $tel ) ) {
			$errors['telphone3'] = "Only number is allow";
		}
		$telErr = test_input( $_POST[ "telphone" ] );
		
           if ( preg_match( "/^[a-zA-Z ]*$/", $telErr ) ) {
			$errors['telphone4'] = "Only number is allow";
		}
        //check errors
        if(count($errors) == 0)
        {
            //redirect to success pages
            header("Location: oil.php");
            exit();
        }
    }
function test_input( $data ) {
		$data = trim( $data );
		$data = stripslashes( $data );
		$data = htmlspecialchars( $data );
		return $data;
	}
?>


	<?php
	
	/*if ( $_SERVER[ "REQUEST_METHOD" ] == "POST" ) {
*/
		/*$email2 = test_input( $_POST["email22"] );
		$s1="email11";
		$s2="email22";
		
		// check if e-mail address is well-formed
		if ( strcmp($s1,$s2)==0) {
			$email2Err = "Email Not match";
		}*/
/*		if ( strcmp( $_POST["email11"], $_POST["email22"] )!=0 ) {
			$email2Err = "Email Not match";
		} else {
			$email2 = test_input( $_POST[ "email22" ] );
		}
		if ( strcmp( $_POST["pass1"], $_POST["pass2"] )!=0 ) {
			$passErr2 = "Password Not match";
		} else {
			$pass02 = test_input( $_POST[ "pass2" ] );
		}
		
*//*
	}
*/
	
	?>
	<div class="container">

		<header>
			<h1>Welcome To Sign Up</h1>
		</header>

		<nav>
			<img src="a.png" style="max-height: 100% ; max-width: 100%">
		</nav>
		<article>

			<h1 style="text-align: center">Create a new account</h1>
			<div style="margin-right:50px;margin-left:50px">
				<form method="post" target="_blank" autocomplete="on" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<!--<label for="fname">First Name </label>-->

					<span class="error">
						<?php if(isset($errors['Name11'])) echo $errors['Name11'];?>
					</span>
					<span class="error">
						<?php if(isset($errors['Name12'])) echo $errors['Name12'];?>
					</span>
					<span class="error">
						<?php if(isset($errors['Name13'])) echo $errors['Name13'];?>
					</span>


					<input type="text" name="firstname" placeholder="First Name" autofocus required>

					<!-- <br><label for="lname">Last Name</label>-->
					<span class="error">
						<?php if(isset($errors['Name21'])) echo $errors['Name21'];?>
					</span>
					<span class="error">
						<?php if(isset($errors['Name22'])) echo $errors['Name22'];?>
					</span>
					<span class="error">
						<?php if(isset($errors['Name23'])) echo $errors['Name23'];?>
					</span>
					<input type="text" name="lastname" placeholder="Last Name"  required>

					<br> Gender:

					<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female" ) ;?> value="female">Female

					<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male" ) ;?> value="male" >Male
					
					<!--<br><br>-->
					<!--<label for="fname">Email</label>-->
					<span class="error" >
					<font size="2"><?php if(isset($errors['gender'])) echo $errors['gender'];?></font></p>
					</span>
					<input type="email" id="fname" name="email11" placeholder="Email" maxlength="30" required>
					<!--<br>-->
					<!--<label for="fname">Re-enter Email </label>-->
					<input type="email" id="fname" name="email22" placeholder="Re-enter Email" maxlength="30" required>
					<span class="error" >
					<font size="2"><?php if(isset($errors['email'])) echo $errors['email'];?></font></p>
					</span>
					<!--<label for="lname">Phone Number</label>-->
					<input type="tel" id="lname" name="telphone" placeholder="Phone Number with Country Code"  required><br>
					<span class="error" >
					<font size="2"><?php if(isset($errors['telphone1'])) echo " ".$errors['telphone1'];?></font></p>
					</span>
						<span class="error" >
					<font size="2"><?php if(isset($errors['telphone2']))  echo " ".$errors['telphone2'];?></font></p>
					</span>
						<span class="error" >
					<font size="2"><?php if(isset($errors['telphone3']))  echo " ".$errors['telphone3'];?></font></p>
					</span>
					<span class="error" >
					<font size="2"><?php if(isset($errors['telphone4']))  echo " ".$errors['telphone4'];?></font></p>
					</span>

					<label for="lname">Birth Day</label>
					<input type="date" id="lname" name="Birth_day" required><br>

					<!--<label for="fname">Password </label>-->
					<input type="password" id="fname" name="pass1" placeholder="Password " required>
					<br>
					<span class="error" >
					<font size="2"><?php if(isset($errors['password11']))  echo " ".$errors['password11'];?></font></p>
					</span>
					</span>
						<span class="error" >
					<font size="2"><?php if(isset($errors['password12']))  echo " ".$errors['password12'];?></font></p>
					</span>
					<!--<label for="fname">Re-type Password </label>-->
					<input type="password" id="fname" name="pass2" placeholder="Re-type Password"  required>
					
					
					</span>
						<span class="error" >
					<font size="2"><?php if(isset($errors['password']))  echo " ".$errors['password'];?></font></p>
					</span>
					</span>
						<span class="error" >
					<font size="2"><?php if(isset($errors['password21']))  echo " ".$errors['password21'];?></font></p>
					</span>
					</span>
						<span class="error" >
					<font size="2"><?php if(isset($errors['password22']))  echo " ".$errors['password22'];?></font></p>
					</span>
					
					
					<div style="display: inline; margin-bottom:2px;margin-top:2px; width: 100%;">
						<div style="display: inline;"><input type="reset" value="Reset all">
						</div> Or ,
						<div style="display: inline;"><input type="radio" name="i" checked> I agree to ShadhiN terms</div>
						<div style="display: inline;"><input type="submit" value="Create an account">
						</div>
					</div>
					<div style="; margin-bottom:5px; margin-top:5px;border: 2px solid black; width: 100%"></div>


				</form>
				<a href="Assignment04 - Copy.php" target="_blank"><button class="button button2">Login</button>
						</a>
			</div>

		</article>
		<?php
		/*echo "<h2>Your Input:</h2>";
		echo $firstName;
		echo "<br>";
		echo $lastName;
		echo "<br>";
		echo $gender;
		echo "<br>";
		echo $email2;
		echo "<br>";
		echo $tel;
		echo "<br>";*/
		?>
		<footer>Copyright 2017 &copy; ShadhiN</footer>
	</div>
</body>

</html>