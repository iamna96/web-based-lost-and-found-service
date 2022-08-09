<?php
session_start();
if (!$_SESSION['email']) {
	header('Location:Signin.php');
}
?>
<html>

<head>
	<title>Product List</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"><b>
		<link rel="stylesheet" type="text/css" href="css/frame.css">
		<link rel="stylesheet" type="text/css" href="css/disp.css">

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
		<div class="container" align="center">
			<div class="contHeader">
				<h2>List Of Lost Items</h2>
			</div>
			<?php
			include("../Service/connect.php");
			// session_start();
			{
				$sql = "SELECT * FROM litems_info";
				$query = mysqli_query($conn, $sql);
				echo '<table id="producttable" border="1" align="center" width="100%">
							 <tr>
							   <th align="left" width="15%"><b><span>Name</b></th>
							   <th align="left" width="15%"><b><span>Product Category</b></th>
							   <th align="left" width="15%"><b><span>Product Name</b></th>
							   <th align="left" width="15%"><b><span>Lost Location</b></th>
							   <th align="left" width="15%"><b><span>Specific Location Description</b></th>
							   <th align="left" width="15%"><b><span>Contact No/Email</b></th>
							 </tr>';
				while ($result = mysqli_fetch_assoc($query)) {
					$product_id = $result['id'];
					$name = $result['name'];
					$category = $result['product_category'];
					$product_name = $result['product_name'];
					$lost_location = $result['lost_location'];
					$specific_location_description = $result['specific_location_description'];
					$Phone = $result['contact'];

					echo "<table id='producttable' border='1' align='center' width='100%'>
							 <tr>
							   <td align='left' width='15%'>$name</td>
							   <td align='left' width='15%'>$category</td>
							   <td align='left' width='15%'>$product_name</td>
							   <td align='left' width='15%'>$lost_location</td>
							   <td align='left' width='15%'>$specific_location_description</td>
							   <td align='left' width='15%'>$Phone</td>	   
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