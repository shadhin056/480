<?php
// Start the session
session_start();
$getIDlogin1=$_SESSION['email22'];

if(isset($_SESSION['email22'])){
    echo "you logged in as </br>", $_SESSION['email22'];
    echo "<br/><a href='logout.php'>logout</a>";
}else{header("Location: Login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="Up.css">
<style>
body {
    margin: 0;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 25%;
    background-color: #f1f1f1;
    position: fixed;
    height: 100%;
    overflow: auto;
}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

li a.active {
    background-color: #4CAF50;
    color: white;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;
}
</style>
</head>
<body>
<?php 
  if($_POST)                 // if form is submitted
    {
        
$firstNameErr = $lastNmeErr = $email1Err = $email2Err = $genderErr = $telErr = $passErr2= $passErr1="";
$firstName = $lastName = $email1 = $email2 =$gender = $comment = $tel = $pass01 = $pass02 = "";
        $errors = array();

        //start validation
      
// first name check 
$fName = test_input( $_POST[ "firstname5" ] );
		if (strlen($fName)<2) {
			$errors['Name10'] = "Minimum 2 charecter";
		}
		else{
          $fName = $_POST[ "firstname5"];
		}
		$fName = test_input( $_POST[ "firstname5" ] );
		if ( !preg_match("/^[a-zA-Z]*$/",$fName) ) {
			$errors['Name11'] = "Only letters and white space allowed";
		}
		else{
          $fName = $_POST[ "firstname5"];
		}
		$fName = test_input( $_POST[ "firstname5" ] );
        if(strlen($_POST['firstname5']) < 2)
        {
            $errors['Name12'] = "Your Full Name must be atleast 2 characters long";
        } 
		else{
          $fName = $_POST[ "firstname5"];
		}
		$fName = test_input( $_POST[ "firstname5" ] );
		if(strlen($_POST['firstname5']) > 20)
        {
            $errors['Name13'] = "Your Full Name must be less than 20 characters long";
        }  
		else{
          $fName = $_POST[ "firstname5"];
		}
// surname name check 
		$lName = test_input( $_POST["lastname5"] );
		if (strlen($lName)<2){
			$errors['Name20'] = "Minimum 2 charecter";
		}else{
          $lName = $_POST[ "lastname5"];
		}
		$lName = test_input( $_POST[ "lastname5" ] );
		if ( !preg_match( "/^[a-zA-Z ]*$/", $lName ) ) {
			$errors['Name21'] = "Only letters and white space allowed";
		}else{
          $lName = $_POST[ "lastname5"];
		}
		
        if(strlen($_POST['lastname5']) < 2)
        {
            $errors['Name22'] = "Your nick name must be atleast 2 characters long";
        } else{
          $lName = $_POST[ "lastname5"];
		}
		if(strlen($_POST['lastname5']) > 10)
        {
            $errors['Name23'] = "Your Nick name must be less than 10 characters long";
        }else{
          $lName = $_POST[ "lastname5"];
		}  
// gender check 
		
		if ( empty( $_POST[ "gender5" ] ) ) {
			$errors['gender'] = "Gender is required";
		}
		else{
          $gName = $_POST[ "gender5"];
		}  
// email  check
//		if ( strcmp( $_POST["email115"], $_POST["email225"] )!=0 ) {
//			$errors['email'] ="Email Not match";
//		}
//		else{
//          $eemail = $_POST[ "email225"];
//		} 
// password check 
             $mystring = $_POST["pass25"];

if (preg_match('/\s/', $mystring)) {
			$errors['pnew'] = "space not allow";
		}else{
          $pname = $_POST[ "pass25"];
		} 
		if ( strcmp( $_POST["pass15"], $_POST["pass25"] )!=0 ) {
			$errors['password'] = "password Not match";
		}else{
          $pname = $_POST[ "pass25"];
		}  
      
        if(strlen($_POST['pass15']) < 8)
        {
            $errors['password11'] = "Password must be atlest 8 characters long";
        }else{
          $pname = $_POST[ "pass25"];
		} 

		if(strlen($_POST['pass15']) > 20)
        {
            $errors['password12'] = "Password must be less than 20 characters long";
        }else{
          $pname = $_POST[ "pass25"];
		} 
		if(strlen($_POST['pass25']) < 8)
        {
            $errors['password21'] = "Password must be atlest 8 characters long";
        }else{
          $pname = $_POST[ "pass25"];
		} 
	
		if(strlen($_POST['pass25']) > 20)
        {
            $errors['password22'] = "Password must be less than 20 characters long";
        }else{
          $pname = $_POST[ "pass25"];
		} 
		// tel check
        if(strlen($_POST['telphone5']) < 8)
        {
            $errors['telphone1'] = "telphone must be atlest 8 characters long";
        }else{
          $Phone = $_POST[ "telphone5"];
		}

		if(strlen($_POST['telphone5']) > 20)
        {
            $errors['telphone2'] = "telphone must be less than 20 characters long";
        }else{
          $Phone = $_POST[ "telphone5"];
		}
		$Phone = test_input( $_POST[ "telphone5" ] );
		
           if ( !preg_match( "/[0-9]/", $Phone ) ) {
			$errors['telphone3'] = "Only number is allow";
		}else{
          $Phone = $_POST[ "telphone5"];
		}
		$telErr = test_input( $_POST[ "telphone5" ] );
		
           if ( preg_match( "/^[a-zA-Z ]*$/", $telErr ) ) {
			$errors['telphone4'] = "Only number is allow";
		}else{
          $Phone = $_POST[ "telphone5"];
		}
		//birthday checkdate
$Bname = test_input( $_POST[ "Birth_day5" ] );
		if ( !empty($Bname) ) {
			$Bname = $_POST[ "Birth_day5"];
		}
		
        //check errors
        if(count($errors) == 0)
        {
            //redirect to success pages
              $_SESSION['firstname'] = $fName;
			  $_SESSION['lastname'] = $lName;
			  $_SESSION['gender'] = $gName;
                          $eemail = $_POST[ "email22"];
			  $_SESSION['email22'] = $eemail;
                          
			  $_SESSION['telphone']=$Phone;
			  $_SESSION['Birth_day'] = $Bname;
			  $_SESSION['pass2'] = $pname;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shadhin";
//$ami="paru";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "";
	
	
	$sql ="UPDATE register SET Full_name = '$fName', Nick_name = '$lName', Gender = '$gName', Email = '$getIDlogin1', Phone = '$Phone', Birthday = '$Bname', Password = '$pname' WHERE register.Email = '$getIDlogin1'";
	$sql1 ="UPDATE admin SET Password = '$pname' WHERE admin.aEmail = '$getIDlogin1'";
	mysqli_query($conn, $sql1);
	if (mysqli_query($conn, $sql)) {
            $_SESSION['email22'] = $getIDlogin1;
    header("Location:CV.php");
} else {
    header("Location: N.php");
}
	// Close connection
		
mysqli_close($conn);
           
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

<ul>
  <li><a class="active" href="#home">
    Basic Information
  </a></li>
  <li><a href="#home">
    Profile
  </a></li>
  <li><a href="#news">
    Contact Information
  </a></li>
  <li><a href="#contact">
    Activities & Interest
  </a></li>
  <li><a href="#about">
    Education And Qualification
  </a></li>
  <li><a href="#about">
    Skills
  </a></li>
  <li><a href="#about">
    Work Experience
  </a></li>
  <li><a href="#about">
    About Me
  </a></li>
  
  <li style=" background: #4CAF50"><a href="#about">
    Edit/Update this Info
  </a></li>
  <li style=" background: #CFA6CD"><a href="CV.php">
    Home
  </a></li>
  <li style=" background: #CFA6CD"><a href="logout.php">
    Logout
  </a></li>
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
				  <?php 
	//echo $_SESSION['email22'];
	$getIDlogin=$_SESSION['email22'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "outzone";	
		
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM register where email = '$getIDlogin'";
$result = mysqli_query($conn, $sql);
//
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
                
                echo  $row['Full_name'];
                echo  $row['Nick_name'];
                echo  $row['Gender'];
			
			echo $row['Email'];
                echo $row['Phone'];
                echo $row['Birthday'];
                echo $row['Password'];
			
        // Free result set. mysqli_free_result() function frees the memory associated with the result.
        mysqli_free_result($result);
	mysqli_close($conn);
	?>
				
				
				<form method="post" target="_self" autocomplete="on" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
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


					<input type="text" name="firstname5" value="<?php echo $row['Full_name'] ?>" placeholder="Full Name (Character Min:2 Max:20)"  autofocus required>

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
					<input type="text" name="lastname5" value="<?php echo $row['Nick_name'] ?>" placeholder="Nick Name (Character Min:2 Max:20)" required>

					<br> Gender:
					<input type="radio" name="gender5" <?php if (isset($gender) && $gender=="female" ) ;?> value="female" required >Female
					<input type="radio" name="gender5" <?php if (isset($gender) && $gender=="male" ) ;?> value="male" required >Male
					<span class="error">
						<font size="2">
							<?php if(isset($errors['gender'])) echo $errors['gender'];?>
						</font>
					</span>
					
			
					<input type="number" id="lname"  name="telphone5" value="<?php echo $row['Phone'] ?>"  placeholder="Phone Number with Country Code (Min:8 Max:20)" required><br>
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
					<input type="date" id="lname" value="<?php echo $row['Birthday'] ?>" placeholder="YYYY/MM/DD" name="Birth_day5" required>
					<input type="password" id="fname" name="pass15" placeholder="Password character(Min:8 max:20)" required>

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
					<input type="password" id="fname" name="pass25" placeholder="Re-type Password character(Min:8 max:20)" required>

					<span class="error">
						<?php if(isset($errors['pnew'])) echo $errors['pnew'];?>
					</span>

					
					<span class="error">
						<font size="2">
							<?php if(isset($errors['password']))  echo " ".$errors['password'];?>
						</font>
					</span>
					
					<span class="error">
						<font size="2">
							<?php if(isset($errors['password21']))  echo " ".$errors['password21'];?>
						</font>
					</span>
					
					<span class="error">
						<font size="2">
							<?php if(isset($errors['password22']))  echo " ".$errors['password22'];?>
						</font>
					</span>
					
					<div style=" width: 100%">
						<div class="shadhin" style="float:left ; width: 50%"><input type="reset" value="Reset all">
						</div>
                                            <div class="shadhin" style="float:right; width: 50%"><input type="submit" name="update" value="Update">
						</div>
					</div>
					<div style="; margin-bottom:5px; margin-top:5px;border: 2px solid black; width: 100% ; clear:both"></div>

				</form>
</div>

</body>
</html>
