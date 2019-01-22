<!DOCTYPE html>
<html>

    <head>
        <link rel="stylesheet" type="text/css" href="mystyle.css">
    </head>

    <body>
        
        <script>
            function ValidateContactForm() {
                var jfull_name = ContactForm.firstname;
                var jnick_name = ContactForm.lastname;
                var jgender = ContactForm.gender;
                var jemail1 = ContactForm.email11;
                var jemail2 = ContactForm.email22;
                var jphone = ContactForm.telphone;
                var jbirthday = ContactForm.Birth_day;
                var jpassword1 = ContactForm.pass1;
                var jpassword2 = ContactForm.pass2;
                // full name java_script check
                if (jfull_name.value.length < 2) {
                    <?php 
                    echo 'window.alert("Can not less than 2 character java");
                    jfull_name.focus();';
                    ?>
                    
                    return false;
                }
                if (jfull_name.value.length > 20) {
                    window.alert("Can not greater than 20 character");
                    jfull_name.focus();
                    return false;
                }

                if (/[^a-zA-Z \-]/.test(jfull_name.value)) {
                    window.alert("Only letters and white ,- space allowed");
                    jfull_name.focus();
                    return false;
                }

// Nick name java_script check
                if (jnick_name.value.length < 2) {
                    window.alert("Can not less than 2 character");
                    jnick_name.focus();
                    return false;
                }
                if (jnick_name.value.length > 20) {
                    window.alert("Can not greater than 20 character");
                    jnick_name.focus();
                    return false;
                }

                if (/[^a-zA-Z \-\/]/.test(jnick_name.value)) {
                    window.alert("Only letters and white space allowed");
                    jnick_name.focus();
                    return false;
                }
                // gender check

                if (jgender.value == "")
                {
                    window.alert("Please enter gender");
                    jgender.focus();
                    return false;
                }
// email recheck
                if(jemail1.value != jemail2.value){
                    window.alert("email not match");
                     jemail2.focus();
                    return false;
                }

// email id duplicate checkdate
//                 if(jemail2.value!=""){
//                     <?php 
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "shadhin";
//$pemail = $_POST["email22"];
//
//
//// Create connection
//$conn = mysqli_connect($servername, $username, $password, $dbname);
//// Check connection
//					 
//if (!$conn) {
//	 die("Connection failed: " . mysqli_connect_error());
//	 echo 'window.alert("Connection failed");
//                    jfull_name.focus();
//                    return false;';
//         return false;
//}
//					 
//$sql = "SELECT Email FROM register WHERE Email ='$pemail'";
//$result = mysqli_query($conn, $sql);
//
//if (mysqli_num_rows($result) > 0) {
//     echo 'window.alert("already have account");
//                    jfull_name.focus();
//                    return false';
//	mysqli_close($conn);
//        return FALSE;
//        
//    }
// else {
//        echo 'window.alert("no have account");
//                    jfull_name.focus();
//                    ';
//        
//}                   
                    ?>//
//                 }
//
// 
    
    
    
                //phone number check
                if (jphone.value.length < 8)
                {
                    window.alert("should be greater then 8");
                    return false;
                }
                if (jphone.value.length > 20)
                {
                    window.alert("must be less then 20");
                    return false;
                }

                //birthday check
                if (jbirthday.value == "")
                {
                    window.alert("Please enter birthday");
                    return false;
                }
                var date_regex = /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/;
                if (!(date_regex.test(jbirthday.value)))
                {
                    window.alert("Please enter valid date ");
                    return false;
                }

                //password check 1
                if (jpassword1.value.length < 8)
                {
                    window.alert("should be greater then 8");
                    jpassword1.focus();
                    return false;
                }
                if (jpassword1.value.length > 20)
                {
                    window.alert("must be less then 20");
                    jpassword1.focus();
                    return false;
                }
                if (/[^a-zA-Z0-9]/.test(jpassword1.value)) {
                    window.alert("Only A-z,a-z,0-9 allow");
                    jpassword1.focus();
                    return false;
                }

                //password check 2

                if (jpassword2.value.length < 8)
                {
                    window.alert("should be greater then 8");
                    jpassword2.focus();
                    return false;
                }
                if (jpassword2.value.length > 20)
                {
                    window.alert("must be less then 20");
                    jpassword2.focus();
                    return false;
                }
                if (/[^a-zA-Z0-9]/.test(jpassword2.value)) {
                    window.alert("Only A-z,a-z,0-9 allow");
                    jpassword2.focus();
                    return false;
                }
                // 2 password recheck
                
                if(jpassword1.value != jpassword2.value)
                {
                    window.alert("Password Not match");
                    jpassword2.focus();
                    return false;
                }
                return true;

            }
        </script>
        <?php
        /*
          if($_POST)
          {

          $firstNameErr = $lastNmeErr = $email1Err = $email2Err = $genderErr = $telErr = $passErr2= $passErr1="";
          $firstName = $lastName = $email1 = $email2 =$gender = $comment = $tel = $pass01 = $pass02 = "";
          $errors = array();

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
          if(count($errors) == 0)
          {

          $pfull_name = $fName;
          $pNick_name = $lName;
          $pGender = $gName;
          $pEmail = $eemail;
          $pPhone=$Phone;
          $pBirthday = $Bname;
          $ppassword = $pname;

          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "shadhin";

          $conn = mysqli_connect($servername, $username, $password,$dbname);


          if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
          }
          echo "";


          $sql ="INSERT INTO register (Full_name, Nick_name, Gender,Email,Phone,Birthday,Password) VALUES ('$pfull_name','$pNick_name', '$pGender','$pEmail','$pPhone','$pBirthday','$ppassword');";

          if (mysqli_query($conn, $sql)) {
          echo "";
          } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
          mysqli_close($conn);

          }
          } */
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
                    <form method="post" target="_self" autocomplete="on" onsubmit="return ValidateContactForm();" name="ContactForm" action="a.php">
                        <?php /* echo htmlspecialchars($_SERVER["a.php"]); */ ?>

                        <input type="text" id="Hfull_name" name="firstname" value="<?php if (isset($_POST['firstname'])) echo $_POST['firstname']; ?>" placeholder="Full Name (Character Min:2 Max:20)" min="2" max="20" autofocus  required >
                        <input type="text" id="Hnick_name" name="lastname" value="<?php if (isset($_POST['lastname'])) echo $_POST['lastname']; ?>" placeholder="Nick Name (Character Min:2 Max:20)" required>

                        <br> Gender:
                        <input type="radio" id="Hgender" name="gender" <?php if (isset($gender) && $gender == "female") ; ?> value="female" required >Female
                        <input type="radio" id="Hgender" name="gender" <?php if (isset($gender) && $gender == "male") ; ?> value="male" required >Male

                        <input type="email" id="Hemail1" id="fname" value="<?php if (isset($_POST['email11'])) echo $_POST['email11']; ?>" name="email11" placeholder="Email" required>

                        <input type="email" id="Hemail2" name="email22" value="<?php if (isset($_POST['email22'])) echo $_POST['email22']; ?>" placeholder="Re-enter Email" required>

                        <span class="error">
                            <font size="2">
                            <?php if (isset($errors['emailechek02'])) echo $errors['emailechek02']; ?>
                            </font>
                        </span>

                        <input type="number" id="Htel" name="telphone" value="<?php if (isset($_POST['telphone'])) echo $_POST['telphone']; ?>" placeholder="Phone Number with Country Code (Min:8 Max:20)" required><br>


                        <label for="lname">Birth Day</label>
                        <input type="date" id="Hbirthday" placeholder="YYYY/MM/DD" name="Birth_day" required>
                        <input type="password" id="Hpass1" name="pass1" placeholder="Password character(Min:8 max:20)" required>

                        <input type="password" id="Hpass2" name="pass2" placeholder="Re-type Password character(Min:8 max:20)" required>


                        <div class="shadhin"><input id="Hiagree" type="radio" name="i" required> I agree to ShadhiN terms</div>
                        <div style=" width: 100%">
                            <div class="shadhin" style="float:left ; width: 50%"><input type="reset" value="Reset all">
                            </div>
                            <div class="shadhin" style="float:right; width: 50%"><input type="submit" value="Create an account">
                            </div>
                        </div>
                        <div style="; margin-bottom:5px; margin-top:5px;border: 2px solid black; width: 100% ; clear:both"></div>

                    </form>
                    <a href="Assignment07Login.php" target="_self"><button class="button"><span>User Login</span></button>
                    </a>
                    <a href="Assignment07LoginAdmin.php" target="_self"><button class="button"><span>Admin Login</span></button>
                    </a>
                </div>

            </article>

            <footer style="clear: both;">Copyright 2017 &copy; ShadhiN</footer>
        </div>
    </body>

</html>