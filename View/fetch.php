<?php
	include("../Service/connect.php");
	$query="select * from fitems_info where product_category like '%$_REQUEST[search_key]%'";
	$data=mysqli_query($conn,$query);
	while($result=mysqli_fetch_assoc($data)){
		echo "<br/>"."$result[product_category]";
	}
?>