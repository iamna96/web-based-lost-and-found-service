<?php
session_start();
include("../Service/connect.php");
if (!$_SESSION['email']) {
	header('Location:Signin.php');
}
?>
<html>

<head>
	<title>Admin</title>
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
				<li id="liSign"><a href="AdminAccount.php"><b>Setting</b></a></li>
				<li><a class="active" href="Admin.php"><b>Home</b></a></li>
			</ul>
		</nav>
	</header>
	<div id="admindashboard">
		<h2> Admin Dashboard </h2>
	</div>
	<div class="AdminBody">
		<div class="Options">
			<form method="post" action="Admin_approve_ProductList.php"><input id="btnOptions" type="submit" value="Found Post Requests"></br></form>
			<form method="post" action="Admin_approve_LostProduct.php"><input id="btnOptions" type="submit" value="Lost Post Requests"></br></form>
			<form method="post" action="UserList.php"><input id="btnOptions" type="submit" value="User List"></form>
			<form method="post" action="messageList.php"><input id="btnOptions" type="submit" value="Message"></form>
		</div>
		<div class="Details_Body">
			<div class="container" align="center">
				<div class="contHeader">
					<h2>Message List</h2>
				</div>
				<?php
				include("../Service/connect.php");
				if ($_SERVER['REQUEST_METHOD'] == "POST") {
					$sql = "SELECT * FROM message";
					$query = mysqli_query($conn, $sql);
					echo "<table border='1' align='center' width='100%'>
					 <tr> 
						 <td align='left' width='25%'><b><span>Name</b></td>
						 <td align='left' width='25%'><b><span>Email</b></td>
						 <td align='left' width='25%'><b><span>Message</b></td>
						 <td align='left' width='25%'><b><span>Action</b></td>
						 </tr>
				 </table>";

					while ($result = mysqli_fetch_assoc($query)) {
						$user_id = $result['id'];
						$user_name = $result['user_name'];
						$user_email = $result['user_email'];
						$message = $result['message'];

						echo "<table border='1' align='center' width='100%'>

						 <tr>
						   <td align='left' width='25%'>$user_name</td>
						   <td align='left' width='25%'>$user_email</td>
						   <td align='left' width='25%'>$message</td>
						  <td align='left' width='25'><a href='DeleteMessage.php?delete=$result[id]'>Delete</a></td>
						 </tr>";
					}
					echo " </table>";
				}
				?>
			</div>
		</div>
		<div class="divFooter">
			Copyright © All Rights Reserved | Developed by Amna Rafique
		</div>
	</div>
</body>

</html>