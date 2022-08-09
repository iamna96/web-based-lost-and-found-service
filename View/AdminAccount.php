<?php
session_start();
include("../Service/connect.php");
if (!$_SESSION['email']) {
	header('Location:Signin.php');
}
?>
<html>

<head>
	<title>User Account</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/frame.css">
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
				<?php
				$sql = "SELECT * FROM registration WHERE email='" . $_SESSION["email"] . "'";
				$query = mysqli_query($conn, $sql);
				//$result = mysqli_fetch_assoc($query);

				while ($data = mysqli_fetch_assoc($query)) {
					$name = $data['name'];
					$phone = $data['contactno'];
					$email = $data['email'];
					$user_type = $data['user_type'];
					if ($user_type == "admin") {
						echo '<table id="usertable" table border="0" align="center" width="100%">
								 <tr>
								   <td align="left" width="10%"><b><span>Name:</span></b></td>
								   <td align="left" width="30%">' . $name . '</td>
								   <td width="80%"></td>
								 </tr>
								 <tr>
								   <td align="left" width="10%"><b><span>Phone No:</span></b></td>
								   <td align="left" width="10%">' . $phone . '</td>
								   <td width="80%"></td>
								 </tr>
								 <tr>
								   <td align="left" width="10%"><b><span>Email:</span></b></td>
								   <td align="left" width="10%">' . $email . '</td>
								   <td width="80%"></td>
								 </tr>
								 <tr>
								   <td align="left" width="10%"><b><span>User_Type:</span></b></td>
								   <td align="left" width="10%">' . $user_type . '</td>
								   <td width="80%"></td>
								 </tr>
								 <tr>
								 <td width="90%"><lable><a href="AdminChange_password.php" style="color:#0dcbec;"><b>Password Change</b></lable></td>
								 </tr>
								 </tr>';
						echo ' </table>';
					}
				}
				?>
			</div>
		</div>
	</div>
	<div class="divFooter">
		Copyright © All Rights Reserved | Developed by Amna Rafique
	</div>
</body>

</html>