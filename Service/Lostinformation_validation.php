<?php
session_start();
if($_SERVER['REQUEST_METHOD']=="POST"){
	    $Name=$_POST['Name'];
		$Product_category=$_POST['Category'];	
		$Product_name=$_POST['Product_name'];
		$Product_Lost_Location=$_POST['Lost_Location'];
		$Product_Specific_Location_Description=$_POST['Specific_Location_Description'];
		$Found_Contact = @$_POST["Contact"];

		$error = true;

		if($Name!=""){
		 $error = false;
     	}else{
		$error = true;
     	}
		if($Product_category!=""){
			if($Product_category==="Select Category"){
				$error = true;
			}else{
				$error = false;
		}
		}else{
			$error = true;
		}
		if($Product_name!=""){
			$error = false;
		}else{
			$error = true;
		}
		if($Product_Lost_Location!=""){
			$error = false;
		}else{
			$error = true;
		}
		if($Product_Specific_Location_Description!=""){
			$error = false;
     	}else{
		$error = true;
     	}
		if($Found_Contact!=""){
			$error = false;
		}else{
			$error = true;
		}
		
		if($error == false){
			echo $Product_category;
			echo $Name;
			echo $Product_name;
			echo $Product_Lost_Location;
			echo $Product_Specific_Location_Description;
			echo $Found_Contact;
			$_SESSION['Name_in_session']=$Name;
			$_SESSION['Product_category_in_session']=$Product_category;
			$_SESSION['Product_name_in_session']=$Product_name;
			$_SESSION['Product_Lost_Location_in_session']=$Product_Lost_Location;
			$_SESSION['Product_Specific_Location_Description_in_session']=$Product_Specific_Location_Description;
			$_SESSION['Found_Contact_in_session']=$Found_Contact;
			header('Location:LostInformation.php');
		}
		else{
			echo"Registration faill";
		}
}	 
?>