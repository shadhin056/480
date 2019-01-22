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
	$firstNameErr = $lastNmeErr = $email1Err = $email2Err = $genderErr = $telErr = "";
	$firstName = $lastName = $email1 = $email2 =$gender = $comment = $tel = "";
	if ( $_SERVER[ "REQUEST_METHOD" ] == "POST" ) {


		$firstName = test_input( $_POST[ "firstname" ] );
		if ( !preg_match( "/^[a-zA-Z ]*$/", $firstName ) ) {
			$firstNameErr = "Only letters and white space allowed";
		}

		$lastName = test_input( $_POST[ "lastname" ] );
		if ( !preg_match( "/^[a-zA-Z ]*$/", $lastName ) ) {
			$lastNmeErr = "Only letters and white space allowed";
		}
		if ( empty( $_POST[ "gender" ] ) ) {
			$genderErr = "Gender is required";
		} else {
			$gender = test_input( $_POST[ "gender" ] );
		}

		/*$email2 = test_input( $_POST["email22"] );
		$s1="email11";
		$s2="email22";
		
		// check if e-mail address is well-formed
		if ( strcmp($s1,$s2)==0) {
			$email2Err = "Email Not match";
		}*/
		if ( strcmp( $_POST["email11"], $_POST["email22"] )!=0 ) {
			$email2Err = "Email Not match";
		} else {
			$email2 = test_input( $_POST[ "email22" ] );
		}
		

	}

	function test_input( $data ) {
		$data = trim( $data );
		$data = stripslashes( $data );
		$data = htmlspecialchars( $data );
		return $data;
	}
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
				<form method="post" autocomplete="on" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<!--<label for="fname">First Name </label>-->

					<span class="error">
						<?php echo $firstNameErr;?>
					</span>


					<input type="text" id="fname" name="firstname" placeholder="First Name" maxlength="20" autofocus required>

					<!-- <br><label for="lname">Last Name</label>-->
					<span class="error">
						<?php echo $lastNmeErr;?>
					</span>
					<input type="text" id="lname" name="lastname" placeholder="Last Name" maxlength="20" required>

					<br> Gender:

					<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female" ) ;?> value="female">Female

					<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male" ) ;?> value="male" >Male
					
					<!--<br><br>-->
					<!--<label for="fname">Email</label>-->
					<span class="error" >
					<font size="2"><?php echo " ".$genderErr;?></font></p>
					</span>
					<input type="email" id="fname" name="email11" placeholder="Email" maxlength="30" required>
					<!--<br>-->
					<!--<label for="fname">Re-enter Email </label>-->
					<input type="email" id="fname" name="email22" placeholder="Re-enter Email" maxlength="30" required>
					<span class="error" >
					<font size="2"><?php echo " ".$email2Err;?></font></p>
					</span>
					<!--<label for="lname">Phone Number</label>-->
					<input type="tel" id="lname" name="telphone" placeholder="Phone Number with Country Code" min="5" max="20" required><br>

					<label for="lname">Birth Day</label>
					<input type="date" id="lname" name="Birth_day" required><br>

					<!--<label for="fname">Password </label>-->
					<input type="password" id="fname" name="pass" placeholder="Password " min="2" max="20" required>
					<br>
					<!--<label for="fname">Re-type Password </label>-->
					<input type="password" id="fname" name="pass" placeholder="Re-type Password" min="2" max="20" required>
					<br>
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
		echo "<h2>Your Input:</h2>";
		echo $firstName;
		echo "<br>";
		echo $lastName;
		echo "<br>";
		echo $gender;
		echo "<br>";
		echo $email2;
		echo "<br>";
		echo $tel;
		echo "<br>";
		?>
		<footer>Copyright 2017 &copy; ShadhiN</footer>
	</div>
</body>

</html>