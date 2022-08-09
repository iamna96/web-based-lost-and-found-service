<?php
session_start();
include("../Service/connect.php");
if (!$_SESSION['email']) {
	header('Location:Signin.php');
}
?>
<html>

<head>
	<title>Change Password</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/frame.css">
	<link rel="stylesheet" type="text/css" href="css/signin.css">
	<link rel="stylesheet" type="text/css" href="css/Admin.css">
</head>

<body>
	<header class="divNavigation">
		<img class="logo" src="../View/Image/homelogo.svg" width="25%" height="auto" alt="logo">
		<nav>
			<ul class="ulNavBar">
				<li id="liSign"><a href="SignOut.php"><b>Sign Out</b></a></li>
				<li><a class="active" href="Admin.php"><b>Home</b></a></li>
			</ul>
		</nav>
	</header>
	<div id="admindashboard">
		<h2> Admin Dashboard </h2>
	</div>
	<div class="Adminbody">
		<div class="Options">
			<form method="post" action="Admin_approve_ProductList.php"><input id="btnOptions" type="submit" value="Found Post Requests"></br></form>
			<form method="post" action="Admin_approve_LostProduct.php"><input id="btnOptions" type="submit" value="Lost Post Requests"></br></form>
			<form method="post" action="UserList.php"><input id="btnOptions" type="submit" value="User List"></form>
			<form method="post" action="messageList.php"><input id="btnOptions" type="submit" value="Message"></form>
		</div>
		<div class="Details_Body">
			<div class="adminacccontainer" align="center">
				<div class="adminaccdivHeader">
					<h2>Profile</h2>
				</div>
				<form class="loginForm" method="post">
					<label style="padding-left:60px;" class="labelstyle" for="email">Email:</label><br>
					<input class="forminput" type="text" placeholder="Enter Email" name="email"><br />
					<label style="margin-right: -130px;" class="labelstyle" for="newpassword">New Password:</label><br>
					<input class="forminput" type="password" placeholder="Enter New Password" name="new_password"><br />
					<label style="margin-right: -190px;" class="labelstyle" for="confirmnewpassword">Confirm New Password:</label><br>
					<input class="forminput" type="password" placeholder="Confirm New Password" name="confirm_password"><br />
					<input type="submit" id="btnSubmit" value="Submit">&nbsp;&nbsp;&nbsp;&nbsp; <a class="cancel" href="AdminAccount.php">Cancel</a>
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
include("../Service/connect.php");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$password = $_POST['new_password'];
	$confirm_password = $_POST['confirm_password'];
	$email = $_POST['email'];
	$error = true;
	if (strlen($password) < 5) {
		echo  "<script>alert('Password too short!');</script>";
		$error = true;
	} else {
		if (strlen($password) > 15) {
			echo  "<script>alert('Password too long');</script>";
			$error = true;
		} else {
			if (strlen($password) < 5) {
				echo  "<script>alert('Password too short!');</script>";
				$error = true;
			} else {
				if (!preg_match("#[0-9]+#", $password)) {
					echo  "<script>alert('Password must include at least one number!');</script>";
					$error = true;
				} else {
					if (!preg_match("#[a-z]+#", $password)) {
						echo  "<script>alert('Password must include at least one letter!');</script>";
						$error = true;
					} else {
						if (!preg_match("#[A-Z]+#", $password)) {
							echo  "<script>alert('Password must include at least one CAPS! ');</script>";
							$error = true;
						} else {
							if (preg_match("/[~`!@#$%^&*()_-+=\[\]{}\|\\:;\"\'<,>.]/", $password)) {
								echo  "<script>alert('Password must include at least one special character!');</script>";
								$error = true;
							} else {
								$error = false;
								//echo $password."<br/>";
								//echo "Your password is strong.<br/>";
							}
						}
					}
				}
			}
		}
	}
	if ($error == false) {
		if ($confirm_password != $password) {
			$error = true;
			echo  "<script>alert('Password not matched!!');</script>";
		} else {
			$error = false;
			$encrypt_new_pass = md5($password);
		}

		$email_check = mysqli_query($conn, "select * from registration where email='$email'");
		$count = mysqli_num_rows($email_check);

		if ($count != 0) {
			$query = "UPDATE registration SET password='$encrypt_new_pass' WHERE email='$email'";
			if (mysqli_query($conn, $query)) {
				echo  "<script>alert('Records added successfully.');</script>";
				header('Location:../View/Signin.php');
			} else {
				echo  "<script>alert('Records  not added.');</script>";
			}
		}
	}
}

?>