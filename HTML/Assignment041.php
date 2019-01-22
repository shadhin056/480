<?php
// Start the session
session_start();
?>

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
			padding: 6px 10px;
			margin: 2px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		
		input[type=password]:focus {
			color: white;
			background: #5F5F5F;
			width: 100%;
			padding: 6px 10px;
			margin: 2px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		
		.button {
			display: inline-block;
			border-radius: 4px;
			background-color: #f4511e;
			border: none;
			color: #FFFFFF;
			text-align: center;
			font-size: 20px;
			padding: 10px;
			width: 100%;
			transition: all 0.5s;
			cursor: pointer;
			margin: 2px;
		}
		
		.button span {
			cursor: pointer;
			display: inline-block;
			position: relative;
			transition: 0.5s;
		}
		
		.button span:after {
			content: '\00bb';
			position: absolute;
			opacity: 0;
			top: 0;
			right: -20px;
			transition: 0.5s;
		}
		
		.button:hover span {
			padding-right: 25px;
		}
		
		.button:hover span:after {
			opacity: 1;
			right: 0;
		}
		
		input[type=email],
		select {
			width: 100%;
			padding: 6px 10px;
			margin: 2px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		
		input[type=email]:focus {
			width: 100%;
			padding: 6px 10px;
			margin: 2px 0;
			background: #5F5F5F;
			color: white;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		
		input[type=number],
		select {
			width: 100%;
			padding: 6px 10px;
			margin: 2px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		
		input[type=number]:focus {
			color: white;
			background: #5F5F5F;
			width: 100%;
			padding: 6px 10px;
			margin: 2px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		
		input[type=date],
		select {
			width: 100%;
			padding: 6px 10px;
			margin: 2px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		
		input[type=date]:focus {
			background: #5F5F5F;
			color: white;
			width: 100%;
			padding: 6px 10px;
			margin: 2px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		
		article {
			max-width: 70%;
			margin-left: 50%;
			margin-right: 50px;
			margin-bottom: 20px;
			margin-top: 100px;
			border: 1px solid white;
			overflow: auto;
			border-radius: 25px;
			background-color: #FFFFFF;
			padding-left: 2px;
			padding-right: 2px;
			padding-bottom: 50px;
			padding-top: 5px;
		}
		
		input[type=text],
		select {
			width: 100%;
			padding: 6px 10px;
			margin: 2px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		
		input[type=text]:focus {
			width: 100%;
			padding: 6px 10px;
			margin: 2px 0;
			display: inline-block;
			border: 1px solid #ccc;
			background: #5F5F5F;
			color: white;
			border-radius: 4px;
			box-sizing: border-box;
		}
		
		input[type=submit] {
			background-color: #3B5998;
			color: white;
			padding: 10px;
			width: 100%;
			max-width: 100%;
			margin: 2px;
			border-radius: 5px;
			cursor: pointer;
		}
		
		input[type=submit]:hover {
			background-color: Black;
		}
		
		input[type=reset],
		select {
			background-color: #3B5998;
			color: white;
			padding: 10px;
			margin: 2px;
			width: 100%;
			max-width: 100%;
			border-radius: 5px;
			cursor: pointer;
		}
		
		input[type=reset]:hover {
			background-color: Black;
		}
		
		div.container {
			max-width: 100%;
			max-height: 100%;
			overflow: auto;
			width: 100%;
		}
		
		header {
			position: fixed;
			width: 100%;
			top: 0;
			color: white;
			font-family: Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", "monospace";
			background-color: black;
			clear: left;
			text-align: center;
		}
		
		footer {
			position: fixed;
			width: 100%;
			bottom: 0;
			padding-top: 5px;
			padding-bottom: 5px;
			color: white;
			font-family: Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", "monospace";
			background-color: black;
			clear: left;
			text-align: center;
		}
		
		nav {
			float: left;
			margin: 0;
			padding-top: 150px;
			padding-left: 100px;
			max-width: 30%;
			height: 100%;
		}
		
		.shadhin {
			display: inline-block;
		}
	</style>
</head>

<body>
	<?php 
    if($_POST)                         // if form is submitted
    {
        
$firstNameErr = $lastNmeErr = $email1Err = $email2Err = $genderErr = $telErr = $passErr2= $passErr1="";
$firstName = $lastName = $email1 = $email2 =$gender = $comment = $tel = $pass01 = $pass02 = "";
        $errors = array();

        //start validation
      
// first name check 
$fName = test_input( $_POST[ "firstname" ] );
		if (strlen($fName)<2) {
			$errors['Name10'] = "Minimum 2 charecter";
		}
		else{
          $fName = $_POST[ "firstname"];
		}
		$fName = test_input( $_POST[ "firstname" ] );
		if ( !preg_match( "/^[a-zA-Z]*$/", $fName ) ) {
			$errors['Name11'] = "Only letters and white space allowed";
		}
		else{
          $fName = $_POST[ "firstname"];
		}
		$fName = test_input( $_POST[ "firstname" ] );
        if(strlen($_POST['firstname']) < 2)
        {
            $errors['Name12'] = "Your Full Name must be atleast 2 characters long";
        } 
		else{
          $fName = $_POST[ "firstname"];
		}
		$fName = test_input( $_POST[ "firstname" ] );
		if(strlen($_POST['firstname']) > 20)
        {
            $errors['Name13'] = "Your Full Name must be less than 20 characters long";
        }  
		else{
          $fName = $_POST[ "firstname"];
		}
// surname name check 
		$lName = test_input( $_POST["lastname"] );
		if (strlen($lName)<2){
			$errors['Name20'] = "Minimum 2 charecter";
		}else{
          $lName = $_POST[ "lastname"];
		}
		$lName = test_input( $_POST[ "lastname" ] );
		if ( !preg_match( "/^[a-zA-Z ]*$/", $lName ) ) {
			$errors['Name21'] = "Only letters and white space allowed";
		}else{
          $lName = $_POST[ "lastname"];
		}
		
        if(strlen($_POST['lastname']) < 2)
        {
            $errors['Name22'] = "Your nick name must be atleast 2 characters long";
        } else{
          $lName = $_POST[ "lastname"];
		}
		if(strlen($_POST['lastname']) > 10)
        {
            $errors['Name23'] = "Your Nick name must be less than 10 characters long";
        }else{
          $lName = $_POST[ "lastname"];
		}  
// gender check 
		
		if ( empty( $_POST[ "gender" ] ) ) {
			$errors['gender'] = "Gender is required";
		}
		else{
          $gName = $_POST[ "gender"];
		}  
// email  check
		if ( strcmp( $_POST["email11"], $_POST["email22"] )!=0 ) {
			$errors['email'] ="Email Not match";
		}
		else{
          $eemail = $_POST[ "email22"];
		} 
// password check 
             $mystring = $_POST["pass2"];

if (preg_match('/\s/', $mystring)) {
			$errors['pnew'] = "space not allow";
		}else{
          $pname = $_POST[ "pass2"];
		} 
		if ( strcmp( $_POST["pass1"], $_POST["pass2"] )!=0 ) {
			$errors['password'] = "password Not match";
		}else{
          $pname = $_POST[ "pass2"];
		}  
      
        if(strlen($_POST['pass1']) < 8)
        {
            $errors['password11'] = "Password must be atlest 8 characters long";
        }else{
          $pname = $_POST[ "pass2"];
		} 

		if(strlen($_POST['pass1']) > 20)
        {
            $errors['password12'] = "Password must be less than 20 characters long";
        }else{
          $pname = $_POST[ "pass2"];
		} 
		if(strlen($_POST['pass2']) < 8)
        {
            $errors['password21'] = "Password must be atlest 8 characters long";
        }else{
          $pname = $_POST[ "pass2"];
		} 
	
		if(strlen($_POST['pass2']) > 20)
        {
            $errors['password22'] = "Password must be less than 20 characters long";
        }else{
          $pname = $_POST[ "pass2"];
		} 
		// tel check
		

      
        if(strlen($_POST['telphone']) < 8)
        {
            $errors['telphone1'] = "telphone must be atlest 8 characters long";
        }else{
          $Phone = $_POST[ "telphone"];
		}

		if(strlen($_POST['telphone']) > 20)
        {
            $errors['telphone2'] = "telphone must be less than 20 characters long";
        }else{
          $Phone = $_POST[ "telphone"];
		}
		$Phone = test_input( $_POST[ "telphone" ] );
		
           if ( !preg_match( "/[0-9]/", $Phone ) ) {
			$errors['telphone3'] = "Only number is allow";
		}else{
          $Phone = $_POST[ "telphone"];
		}
		$telErr = test_input( $_POST[ "telphone" ] );
		
           if ( preg_match( "/^[a-zA-Z ]*$/", $telErr ) ) {
			$errors['telphone4'] = "Only number is allow";
		}else{
          $Phone = $_POST[ "telphone"];
		}
		//birthday checkdate
$Bname = test_input( $_POST[ "Birth_day" ] );
		if ( !empty($Bname) ) {
			$Bname = $_POST[ "Birth_day"];
		}
		


        //check errors
        if(count($errors) == 0)
        {
            //redirect to success pages
			

              $_SESSION['firstname'] = $fName;
			  $_SESSION['lastname'] = $lName;
			  $_SESSION['gender'] = $gName;
			  $_SESSION['email22'] = $eemail;
			  $_SESSION['telphone']=$Phone;
			  $_SESSION['Birth_day'] = $Bname;
			  $_SESSION['pass2'] = $pname;
			
			
			 $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");

					 $ok=" ".PHP_EOL;
			
              fwrite($myfile, $fName);
			  fwrite($myfile, $ok);
			  fwrite($myfile, $lName);
			   fwrite($myfile, $ok);
			  fwrite($myfile, $gName);
			fwrite($myfile, $ok);
			  fwrite($myfile, $eemail);
			fwrite($myfile, $ok);
			  fwrite($myfile, $Phone);
			fwrite($myfile, $ok);
			  fwrite($myfile, $Bname);
			fwrite($myfile, $ok);
			  fwrite($myfile, $pname);
		fclose($myfile);
			
					
            header("Location: oil2.php");
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


	<div class="container">

		<header>
			<h4>Welcome To Sign Up</h4>
		</header>

		<nav>
			<img src="a.png" style="max-height: 100% ; max-width: 100%">
		</nav>
		<article>

			<h1 style="text-align: center">Create a new account</h1>
			<div style="margin-right:50px;margin-left:50px">
				<form method="post" target="_blank" autocomplete="on" action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]);?>">
					<!--<label for="fname">First Name </label>-->
					<span class="error">
						<?php if(isset($errors['Name10'])) echo $errors['Name10'];?>
					</span>

					<span class="error">
						<?php if(isset($errors['Name11'])) echo $errors['Name11'];?>
					</span>
					<span class="error">
						<?php if(isset($errors['Name12'])) echo $errors['Name12'];?>
					</span>
					<span class="error">
						<?php if(isset($errors['Name13'])) echo $errors['Name13'];?>
					</span>


					<input type="text" name="firstname" value="<?php if(isset($_POST['firstname'])) echo $_POST['firstname']; ?>" placeholder="Full Name (Character Min:2 Max:20)" min="2" max="20" autofocus required>

					<!-- <br><label for="lname">Last Name</label>-->
					<span class="error">
						<?php if(isset($errors['Name20'])) echo $errors['Name20'];?>
					</span>
					<span class="error">
						<?php if(isset($errors['Name21'])) echo $errors['Name21'];?>
					</span>
					<span class="error">
						<?php if(isset($errors['Name22'])) echo $errors['Name22'];?>
					</span>
					<span class="error">
						<?php if(isset($errors['Name23'])) echo $errors['Name23'];?>
					</span>
					<input type="text" name="lastname" value="<?php if(isset($_POST['lastname'])) echo $_POST['lastname']; ?>" placeholder="Nick Name (Character Min:2 Max:10)" required>

					<br> Gender:
					<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female" ) ;?> value="female" required >Female
					<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male" ) ;?> value="male" required >Male
					<span class="error">
						<font size="2">
							<?php if(isset($errors['gender'])) echo $errors['gender'];?>
						</font>
					</span>
					<input type="email" id="fname" value="<?php if(isset($_POST['email11'])) echo $_POST['email11']; ?>" name="email11" placeholder="Email" required>

					<input type="email" id="fname" name="email22" value="<?php if(isset($_POST['email22'])) echo $_POST['email22']; ?>" placeholder="Re-enter Email" required>
					<span class="error">
						<font size="2">
							<?php if(isset($errors['email'])) echo $errors['email'];?>
						</font>
					</span>

					<input type="number" id="lname" name="telphone" value="<?php if(isset($_POST['telphone'])) echo $_POST['telphone']; ?>" placeholder="Phone Number with Country Code (Min:8 Max:20)" required><br>
					<span class="error">
						<font size="2">
							<?php if(isset($errors['telphone1'])) echo " ".$errors['telphone1'];?>
						</font>
					</span>
					<span class="error">
						<font size="2">
							<?php if(isset($errors['telphone2']))  echo " ".$errors['telphone2'];?>
						</font>
					</span>
					<span class="error">
						<font size="2">
							<?php if(isset($errors['telphone3']))  echo " ".$errors['telphone3'];?>
						</font>
					</span>
					<span class="error">
						<font size="2">
							<?php if(isset($errors['telphone4']))  echo " ".$errors['telphone4'];?>
						</font>
					</span>

					<label for="lname">Birth Day</label>
					<input type="date" id="lname" placeholder="YYYY/MM/DD" name="Birth_day" required>
					<input type="password" id="fname" name="pass1" placeholder="Password character(Min:8 max:20)" required>

					<span class="error">
						<font size="2">
							<?php if(isset($errors['password11']))  echo " ".$errors['password11'];?>
						</font>
					</span>

					<span class="error">
						<font size="2">
							<?php if(isset($errors['password12']))  echo "".$errors['password12'];?>
						</font>
					</span>
					<input type="password" id="fname" name="pass2" placeholder="Re-type Password character(Min:8 max:20)" required>

					<span class="error">
						<?php if(isset($errors['pnew'])) echo $errors['pnew'];?>
					</span>

					</span>
					<span class="error">
						<font size="2">
							<?php if(isset($errors['password']))  echo " ".$errors['password'];?>
						</font>
					</span>
					</span>
					<span class="error">
						<font size="2">
							<?php if(isset($errors['password21']))  echo " ".$errors['password21'];?>
						</font>
					</span>
					</span>
					<span class="error">
						<font size="2">
							<?php if(isset($errors['password22']))  echo " ".$errors['password22'];?>
						</font>
					</span>
					<div class="shadhin"><input type="radio" name="i" required> I agree to ShadhiN terms</div>
					<div style=" width: 100%">
						<div class="shadhin" style="float:left ; width: 50%"><input type="reset" value="Reset all">
						</div>
						<div class="shadhin" style="float:right; width: 50%"><input type="submit" value="Create an account">
						</div>
					</div>
					<div style="; margin-bottom:5px; margin-top:5px;border: 2px solid black; width: 100% ; clear:both"></div>

				</form>
				<a href="Assignment04 - Copy.php" target="_blank"><button class="button"><span>Login</span></button>
						</a>
			</div>

		</article>
		<?php

		?>
		<footer style="clear: both;">Copyright 2017 &copy; ShadhiN</footer>
	</div>
</body>

</html>