<html>

<head>
	<title>Forget Password</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/frame.css">
	<link rel="stylesheet" type="text/css" href="css/signin.css">
</head>

<body>
	<div style="background-color: #084cf7b0;">
		<img src="Image/signuplogo.svg" />
	</div>
	<div id="NavBar">
		<h2>Welcome To Lost And Found Portal Of Hazara University</h2>
	</div>
	<div class="forgetdivBody">
		<div class="container" align="center">
			<div class="contHeader">
				<h2>Reset Your Password</h2>
			</div>
			<form class="loginForm" method="post">
				<label style="padding-right:10px;" class="labelstyle" for="email">Email:</label><br>
				<input class="forminput" type="text" placeholder="Enter Email" name="email"><br />
				<label style="margin-right: -70px;" class="labelstyle" for="newpassword">New Password:</label><br>
				<input class="forminput" type="password" placeholder="Enter New Password" name="new_password"><br />
				<label style="margin-right: -140px;" class="labelstyle" for="confirmnewpassword">Confirm New Password:</label><br>
				<input class="forminput" type="password" placeholder="Confirm New Password" name="confirm_password"><br />
				<input type="submit" id="btnSubmit" value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;<a class="cancel" href="Signin.php" style="color:#0dcbec;"><b>Cancel</b></a>

			</form>
			<script>
				function Cancel() {

				}
			</script>
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
	$new_password = $_POST['new_password'];
	$confirm_password = $_POST['confirm_password'];
	$email = $_POST['email'];
	if ($confirm_password != $new_password) {
		echo "Password not matched!!";
	} else {
		$encrypt_new_pass = md5($new_password);
	}

	$email_check = mysqli_query($conn, "select * from registration where email='$email'");
	$count = mysqli_num_rows($email_check);

	if ($count != 0) {
		$query = "UPDATE registration SET password='$encrypt_new_pass' WHERE email='$email'";
		if (mysqli_query($conn, $query)) {
			echo "Records added successfully.";
			header('Location:../View/Signin.php');
		} else {
			echo "<h1>*Records  not added.</h1>";
		}
	} else {
		echo "<h1>*email not exits</h1>";
	}
}

?>