<!DOCTYPE html>
<html>

<head>
	<style>
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
			width: 100%;
			background-color: #3B5998;
			color: white;
			padding: 10px 10px;
			margin: 8px 0;
			border: none;
			border-radius: 10px;
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

	<div class="container">

		<header>
			<h1>Welcome To Home</h1>
		</header>

		<nav>
			<img src="a.png" style="max-height: 100% ; max-width: 100%">
		</nav>
		<article>

			<h1 style="text-align: center">Create a new account</h1>
			<div style="margin-left: 50px">
				<form action="action_page.php">
					<label for="fname">First Name</label>
					<input type="text" id="fname" name="firstname" required>
					<br><br>
					<label for="lname">Last Name</label>
					<input type="text" id="lname" name="lastname" required>
					<br><br>

					<label for="fname">Email</label>
					<input type="email" id="fname" name="email" required>
					<br><br>
					<label for="fname">Re-enter Email </label>
					<input type="email" id="fname" name="reemail" required>
					<br><br>
					<label for="lname">Phone Number</label>
					<input type="tel" id="lname" name="tel" required><br>
					<br><br>
					<label for="lname">Birth Day</label>
					<input type="date" id="lname" name="Birth_day" required><br>
					<br><br> Gender:
					<input type="radio" name="gender" value="female">Female
					<input type="radio" name="gender" value="male">Male
					<input type="reset">
<br><br><br><br><div>
				<div style="float: left"><input type="radio" name="gender" value="female" > I agree </div>
				<div style="float: right"><input type="submit" value="Create an account" ></div>
					
					
					
					
					</div>
					
				</form>



			</div>

		</article>


		<footer>Copyright 2017 &copy; ShadhiN</footer>

	</div>

</body>

</html>