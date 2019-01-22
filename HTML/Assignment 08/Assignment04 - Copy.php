<!DOCTYPE html>
<html>

<head>
	<style>
		.button {
			width: 100%;
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
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
		input[type=reset] {
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
			background-color:#E6E7F7;
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

	<div class="container">

		<header>
			<h1>Welcome To Login</h1>
		</header>

		<nav>
			<img src="a.png" style="max-height: 100% ; max-width: 100%">
		</nav>
		<article>

			<h1 style="text-align: center">Login</h1>
			<div style="margin-right:50px;margin-left:50px">
				<form action="action_page.php"  autocomplete="on">


					<!--<label for="fname">Email</label>-->
					<input type="email" id="fname" name="email" placeholder="Email" autofocus required>
					<!--<br>-->
					<!--<label for="fname">Password </label>-->
					<input type="password" id="fname" name="reemail" placeholder="Password"  required>
					<!--<br>-->


					<div style="display: inline; margin-bottom:2px;margin-top:2px; width: 100%;">
					<div style="display: inline;"><input  type="reset" value="Reset all"></div> Or ,
						<div style="display: inline;"><input type="radio" name="agree"> Remember me</div>
<div style="display: inline;"><input  type="submit" value="Sign in"></div>



					</div>
						<div style="; margin-bottom:5px; margin-top:5px;border: 2px solid black; width: 100%"  ></div>


				</form>
<a href="Assignment04.php" target="_blank"><button class="button button2">Create a new account</button>
						</a>


			</div>

		</article


		<footer>Copyright 2017 &copy; ShadhiN</footer>

	</div>

</body>

</html>
