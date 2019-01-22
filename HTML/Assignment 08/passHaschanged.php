<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
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
//email recheck
		
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shadhin";
$eemail2 = $_POST[ "email22"];
$eemailcheck;		
		
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   // die("Connection failed: " . mysqli_connect_error());
	$errors['emailechek01'] ="Connection failed";
}

$sql = "SELECT Email FROM register WHERE Email ='$eemail2'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   $errors['emailechek02'] ="Already Have Account";
	mysqli_close($conn);
    }
 else {
	  $eemail = $_POST[ "email22"];
    mysqli_close($conn);
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
			
					
           header("Location: Assignment07createAccountSuccess2.php");
            //header("Location: Assignment07createAccountSuccess.php");
			
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
				<form method="post" target="_self" autocomplete="on" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<!--<label for="fname">First Name </label>-->
					


					<input type="password" id="fname" name="pass1" placeholder="Current Password(Min:8 max:20)" required>

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
					<input type="password" id="fname" name="pass2" placeholder="New Password (Min:8 max:20)" required>

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
					<input type="password" id="fname" name="pass1" placeholder="Password Re-type(Min:8 max:20)" required>
					<div style=" width: 100%">
						
						<div class="shadhin" style="float:right; width: 100%"><input type="submit" value="Change the Password">
						</div>
					</div>
					

				</form>
			</div>

		</article>
		<?php

		?>
		<footer style="clear: both;">Copyright 2017 &copy; ShadhiN</footer>
	</div>
</body>

</html>