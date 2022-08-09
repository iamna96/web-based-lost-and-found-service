<?php
session_start();
include("../Service/connect.php");
if (!$_SESSION['email']) {
	header('Location:Signin.php');
}
?>
<html>

<head>
	<title>Contact</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/frame.css">
	<link rel="stylesheet" type="text/css" href="css/Contact.css">
</head>

<body>
	<header class="divNavigation">
		<img class="logo" src="../View/Image/homelogo.svg" width="25%" height="auto" alt="logo">
		<nav>
			<ul class="ulNavBar">
				<li id="liSign"><a href="SignOut.php"><b>Sign Out</b></a></li>
				<li id="liSign"><a href="UserAccount.php"><b>Setting</b></a></li>
				<li><a href="UserContact.php"><b>Contact Us</b></a></li>
				<li><a href="UserAbout.php"><b>About</b></a></li>
				<li><a class="active" href="UserHome.php"><b>Home</b></a></li>
			</ul>
		</nav>
	</header>
	<div class="Found">
		<form method="post" action="InfoForm.php">
			<h4></h4>
			<input id="infobtn" type="submit" name="submit" value="Report Found" />
		</form>
		<form method="post" action="LostForm.php">
			<h4></h4>
			<input id="infobtn" type="submit" name="submit" value="Report Lost" />
		</form>
	</div>
	<div class="signdivbody">
		<div class="container" align="center">
			<div class="contHeader">
				<h2>Contact Us</h2>
			</div>
			<form id="form1" action="../Service/ContactValidation.php" method="post">
				<?php
				$sql = "SELECT * FROM registration WHERE email='" . $_SESSION["email"] . "'";
				$query = mysqli_query($conn, $sql);
				$result = mysqli_fetch_assoc($query);

				$name = $result['name'];
				?>
				<label class="labelstyle" for="name">Full Name:</label><br>
				<input class="forminput" type="text" value="<?php echo $name ?>" id="userName" name="userName" /><br />
				<label class="labelstyle" for="email">Email:</label><br>
				<input class="forminput" type="text" value="<?php echo $_SESSION['email'] ?>" id="email" name="email" /><br />
				<label class="labelstyle" for="message">Message:</label><br>
				<input type="text" id="message" class="forminput" name="message" placeholder="message" /><br />
				<input id="btnSubmit" type="button" value="Sent" onclick="validation()" /><br />
			</form>
			<script>
				function NameValidation() {
					var name = document.getElementById("userName").value;
					var nameRE = /^[A-Za-z\s]+$/;
					if (name != "") {
						if (nameRE.test(name)) {
							//alert(name);
							return true;
						} else alert("Only A-Z or a-z should be on Name!!");
					} else {
						alert("User name missing!!");
						return false;
					}
				}

				function EmailValidation() {
					var userEmail = document.getElementById("email").value;
					var emailRE = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

					if (userEmail != "") {
						if (emailRE.test(userEmail)) {
							//alert(userEmail);
							return true;
						} else {
							alert("Invalid Email Format!!");
							return false;
						}
					} else {
						alert("Enter your email address");
						return false;
					}
				}

				function messageValidation() {
					var user_message = document.getElementById("message").value;
					if (user_message != "") {
						return true;
					} else {
						alert("Enter your message ");
						return false;
					}
				}

				function validation() {
					var form = document.getElementById("form1");
					if (NameValidation() == true && EmailValidation() == true && messageValidation() == true) {
						alert("Thank you");
						form.submit();
					}
				}
			</script>
		</div>
	</div>
	<div class="divFooter">
		Copyright © All Rights Reserved | Developed by Amna Rafique
	</div>
</body>

</html>