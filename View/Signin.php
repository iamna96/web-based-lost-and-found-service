	<html>

	<head>
		<title>Signin</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/frame.css">
		<link rel="stylesheet" type="text/css" href="css/signin.css">
		<script src="login.js"></script>
	</head>

	<body>
		<div style="background-color: #084cf7b0;">
			<img src="Image/signuplogo.svg" />
		</div>
		<div id="NavBar">
			<h2>Welcome To Lost And Found Portal Of Hazara University</h2>
		</div>
		<div class="signdivBody">
			<div class="logincontainer" align="center">
				<div class="contHeader">
					<h2>Login</h2>
				</div>
				<form class="loginForm" action="Signin.php" method="post">
					<label style="padding-right: 25px;" class="labelstyle" for="email">Email:</label><br>
					<input class="forminput" type="text" name="email" placeholder="Email" value="<?php if (isset($_COOKIE["Email"])) {
																										echo $_COOKIE["Email"];
																									} ?>" /></br>
					<label style="padding-left: 10px;" class="labelstyle" for="password">Password:</label><br>
					<input class="forminput" type="password" name="password" placeholder="Password" value="<?php if (isset($_COOKIE["Password"])) {
																												echo $_COOKIE["Password"];
																											} ?>" /></br>
					<input id="checkbox" type="checkbox" name="remember" <?php if (isset($_COOKIE["Email"])) { ?> checked <?php } ?>><b>Remember me <br>
						<input type="submit" id="btnSignin" name="Signin" value="Signin">
						<h4 style="margin-left: -350px;"><a href="Forget_password.php" style="color:#0dcbec;">Forget Password</a></h4>
						<p><b>Not Registered yet?<b> &nbsp; <a href="Signup.php" style="color:#0dcbec;">Signup</a></p>
				</form>
			</div>
		</div>
		<div class="divFooter">
			Copyright © All Rights Reserved | Developed by Amna Rafique
		</div>
	</body>

	</html>

	<?php
	session_start();
	include("../Service/connect.php");
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		if (!empty($_POST["email"]) && !empty($_POST["password"])) {
			$getPass = $_POST["password"];
			$encryptPass = md5($getPass);
			$sql = "SELECT * FROM registration WHERE email='" . $_POST["email"] . "' AND Password= '" . "$encryptPass" . "'";
			$query = mysqli_query($conn, $sql);
			$result = mysqli_fetch_assoc($query);
			//var_dump("$result");
			if ($result) {
				if (!empty($_POST["remember"])) {
					setcookie("Email", $_POST["email"], time() + 200);
					setcookie("Password", $_POST["password"], time() + 200);
				} else {
					if (isset($_COOKIE["Email"])) {
						setcookie("Email", "");
					}
					if (isset($_COOKIE["Password"])) {
						setcookie("Password", "");
					}
				}
				//  $_SESSION['email']=$_POST["email"];
				//$_SESSION['user_type']=$_POST["user_type"];
				//  header("Location:UserHome.php");
				if ($_SESSION['email'] = $_POST["email"]) {
					if ($result["user_type"] == "user") {
						// echo "user";
						header('Location:UserHome.php');
					} elseif ($result["user_type"] == "admin") {
						// echo "admin";
						header('Location:Admin.php');
					}
				}
			} else {
				echo "<script>alert('Invalid username or password!')</script>";
			}
		}
	}
	?>