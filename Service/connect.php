<?php
$server_name = "localhost";
$name = "root";
$password="";
$database_name="lostfound";

$conn = mysqli_connect($server_name,$name,$password,$database_name);
if(!$conn){
	die("Connection failed: ");
}else
   {
	// echo "Connection successull<br/>";
	}
?>