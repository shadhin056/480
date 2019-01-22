<!DOCTYPE html>
<html>

<head>
	<style>
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
		
		article {
			margin-left: 170px;
			border-left: 1px solid red;
			padding: 1em;
			overflow: hidden;
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

			<h1>Create a new account</h1>
			<div>
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
<br><br>
  Gender:
  <input type="radio" name="gender"  value="female">Female
  <input type="radio" name="gender"  value="male">Male
  
  <br><br>

					<input type="reset">
					<input type="submit" value="Submit">
				</form>



			</div>

		</article>


		<footer>Copyright 2017 &copy; ShadhiN</footer>

	</div>

</body>

</html>