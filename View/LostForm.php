<?php
session_start();
if (!$_SESSION['email']) {
	header('Location:Signin.php');
}
?>
<html>

<head>
	<title>Information</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/information.css">
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
	<div class="divBody">
		<form id="form1" action="../Service/Lostinformation_validation.php" method="post">
			<div class="container" align="center">
				<div class="contHeader">
					<h2>Report a Lost Item</h2>
				</div>
				<label style="padding-right: 180px;" class="labelstyle" for="name">Name:</label><br>
				<input class="forminput" type="text" placeholder="Name" id="Name" name="Name" /><br />
				<label style="padding-right: 45px;" for="select Category" class="labelstyle">Select Product Category:</label><br>
				<select class="forminput" name="Category">
					<option class="forminput">Select Product Category</option>
					<option value="Mobile Phone">Mobile Phone</option>
					<option value="Laptop">Laptop</option>
					<option value="Documents">Documents</option>
					<option value="Student Card">Student Card</option>
					<option value="Sporting Goods">Sporting Goods</option>
					<option value="Books">Books</option>
					<option value="ID Card">ID Card</option>
					<option value="Bag">Bag</option>
					<option value="Wallet">Wallet</option>
					<option value="Others">Others</option>
				</select><br>
				<label style="padding-right: 120px;" for="product name" class="labelstyle">Product Name:</label><br>
				<input class="forminput" type="text" placeholder="Product name" id="Product_name" name="Product_name"><br />
				<label style="padding-right: 50px;" for="Lost_Location" class="labelstyle">Select a Last seen Location:</label><br>
				<select id="Lost_Location" class="forminput" name="Lost_Location">
					<option value="None">Select a Last seen Location...</option>
					<option value="Cafeteria">Cafeteria</option>
					<option value="Library">Library</option>
					<option value="Rose Garden">Rose Garden</option>
					<option value="Jasmine Garden">Jasmine Garden</option>
					<option value="Islamic Center">Islamic Center</option>
					<option value="Academic Blocks">Academic Blocks</option>
					<option value="Bus Stand">Bus Stand</option>
					<option value="Parking Area">Parkng Area</option>
					<option value="Others">Others</option>
				</select>
				<br />
				<label for="specfic Location Description" class="labelstyle">Specific Location Description:</label><br>
				<input class="forminput" type="text" placeholder="Specific Location Description" id="Specific Location Description" name="Specific Location Description" /><br />
				<label style="padding-right: 130px;" for="contactno" class="labelstyle">Contact No/Email:</label><br>
				<input class="forminput" id="contactNo" type="text" placeholder="Contact/Email" id="Contact" name="Contact" /><br />
				<input id="btnSubmit" class="forminput" type="button" value="Submit" onclick="validation()" /><br />

		</form>
	</div>
	</div>
	<div class="divFooter">
		Copyright © All Rights Reserved | Developed by Amna Rafique
	</div>
</body>

</html>

<script>
	function validation() {
		var form = document.getElementById("form1");
		// if(PhoneValidation()==true)
		{
			alert("Item Added Successfully");
			form.submit();
		}
	}
</script>