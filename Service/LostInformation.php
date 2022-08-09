<?php
	session_start();
	include("connect.php");

	$query="INSERT INTO litems_info(name,product_category,product_name,lost_location,specific_location_description,contact) VALUES ('$_SESSION[Name_in_session]','$_SESSION[Product_category_in_session]','$_SESSION[Product_name_in_session]','$_SESSION[Product_Lost_Location_in_session]','$_SESSION[Product_Specific_Location_Description_in_session]','$_SESSION[Found_Contact_in_session]')";
	if(mysqli_query($conn,$query)){
		echo "Records added successfully.";
		header('Location:../View/UserHome.php');
	}
	else{
		echo "Records  not added.";
	}	
	
?>