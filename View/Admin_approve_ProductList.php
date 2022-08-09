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
					<h2>Admin Approve Product List</h2>
				</div>
				<?php
				include("../Service/connect.php");
				session_start();
				if ($_SERVER['REQUEST_METHOD'] == "POST") {
					$sql = "SELECT * FROM fitems_info";
					$query = mysqli_query($conn, $sql);
					echo '<table border="1" align="center" width="100%">
							 <tr>
							   <td align="left" width="15%"><b><span>Name</b></td>
							   <td align="left" width="15%"><b><span>Product Category</b></td>
							   <td align="left" width="15%"><b><span>Product Name</b></td>
							   <td align="left" width="15%"><b><span>Found Location</b></td>
							   <td align="left" width="15%"><b><span>Specific Location Description</b></td>
							   <td align="left" width="15%"><b><span>Contact No/ Email</b></td>
							   <td align="left" width="10%"><b><span>Action</b></td>
							 </tr>';
					while ($result = mysqli_fetch_assoc($query)) {
						$product_id = $result['id'];
						$name = $result['name'];
						$category = $result['product_category'];
						$product_name = $result['product_name'];
						$found_location = $result['found_location'];
						$specific_location_description = $result['specific_location_description'];
						$Phone = $result['contact'];

						echo "<table border='1' align='center' width='100%'>
							 <tr>
							   <td align='left' width='15%'>$name</td>
							   <td align='left' width='15%'>$category</td>
							   <td align='left' width='15%'>$product_name</td>
							   <td align='left' width='15%'>$found_location</td>
							   <td align='left' width='15%'>$specific_location_description</td>
							   <td align='left' width='15%'>$Phone</td>	   
							   <td align='left' width='10%'> <a href='DeleteProduct.php?delete=$result[id]'>Delete</a></td>
							 </tr>";
					}
					echo " </table>";
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