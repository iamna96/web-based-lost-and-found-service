<?php
	include("../Service/connect.php");
	if(isset($_GET['delete'])){
		$id=$_GET['delete'];
		$sql="DELETE FROM fitems_info WHERE id='$id'";
		$res=mysqli_query($conn,$sql);
		header('Location:../View/Admin.php');
	}
?>