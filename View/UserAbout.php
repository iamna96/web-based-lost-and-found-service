<?php
session_start();
if (!$_SESSION['email']) {
	header('Location:Signin.php');
}
?>

<html>

<head>
	<title>About</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/frame.css">
	<link rel="stylesheet" type="text/css" href="css/About.css">
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
			<h2 id="details">Welcome to Web based Lost & Found Service.</h2>
			<h3 id="details" style="background-color:darkcyan;">Purpose</h3>
			<h4 id="details">The Purpose of this web Portal is to help those students who have lost something, trying to getting back his/her items and those student who have found that item, are willing to return the item to the right owner.</h4>
			<h3 id="details" style="background-color:darkcyan;">Did you Lost Something?</h3>
			<h4 id="details">If you have lost something, don't worry just give it a try on the search box. If you see your item listed there, go for the best match with your lost one. Another student may have lost the same item, so before you contact with the provider please try to re-check details as possible.</h4>
			<h3 id="details" style="background-color:darkcyan;">Did you found something?</h3>
			<h4 id="details">If you want to return a item to its owner you might not know, give the item information here as correct as possible and your cantact details, so that the owner can easily find his/her item and can contact you to get his/her item back.</h4>
		</div>
	</div>
	<div class="divFooter">
		Copyright © All Rights Reserved | Developed by Amna Rafique
	</div>
</body>

</html>