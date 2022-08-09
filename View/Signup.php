<html>

<head>
	<title>Signup</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/frame.css">
	<link rel="stylesheet" type="text/css" href="css/signin.css">
</head>

<body>
	<div style="background-color: #084cf7b0;">
		<img src="Image/signuplogo.svg" />
	</div>
	<div id="NavBar">
		<h2>Welcome To Lost And Found Portal Of Hazara University</h2>
	</div>
	<div class="divBody">
		<div class="container" align="center">
			<div class="contHeader">
				<h2>Registration</h2>
			</div>
			<form id="form1" action="../Service/SignUp_validation.php" method="post">
				<label class="labelstyle" for="name">Full Name:</label><br>
				<input class="forminput" type="text" placeholder="Name" id="userName" name="userName" required /><br />
				<label style="padding-right: 40px;" class="labelstyle" for="email">Email:</label><br>
				<input class="forminput" type="text" placeholder="Email" id="email" name="email" required /><br />
				<label class="labelstyle" for="contactNo">Contact No:</label><br>
				<input class="forminput" type="number" placeholder="Contact no" id="contactNo" name="contactNo" required /><br />
				<label class="labelstyle" for="password">Password:</label><br>
				<input id="password" class="forminput" type="password" placeholder="Password" name="password" required /><br />
				<label style="padding-left: 60px;" class="labelstyle" for="confirm_password">Confirm Password:</label><br>
				<input id="confirm_password" class="forminput" type="password" placeholder="Confirm Password" name="confirm_password" required /><br />
				<label style="padding-right: 15px;" class="labelstyle" for="gender">Gender:</label><br>
				<input id="Male" class="radioBtn" type="radio" value="Male" name="gender" />
				<label>Male</label>
				<input id="Female" class="radioBtn" type="radio" value="Female" name="gender" />
				<label>Female</label><br />
				<input id="btnSignin" type="button" value="Sign up" onclick="validation()" /><br />
				<p><b>Already have an account?<b> &nbsp; <a href="Signin.php" style="color:#0dcbec;">Signin</a></p>
			</form>
			<script>
				function NameValidation() {
					var name = document.getElementById("userName").value;
					var nameRE = /^[A-Za-z\s]+$/;
					if (name != "") {
						if (nameRE.test(name)) {
							//alert(name);
							return true;
						} else alert("Only A-Z or a-z should be on Name!!");
					} else {
						alert("User name missing!!");
						return false;
					}
				}

				function EmailValidation() {
					var userEmail = document.getElementById("email").value;
					var emailRE = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

					if (userEmail != "") {
						if (emailRE.test(userEmail)) {
							//alert(userEmail);
							return true;
						} else {
							alert("Invalid Email Format!!");
							return false;
						}
					} else {
						alert("Enter your email address");
						return false;
					}
				}

				function PhoneValidation() {
					var phoneNo = document.getElementById("contactNo").value;
					var phoneNoRE = /^\d+$/;

					if ((phoneNo.length < 12) && (phoneNo.length > 10)) {
						if (phoneNoRE.test(phoneNo)) {
							var tmp1 = phoneNo.charAt(0);
							var tmp2 = phoneNo.charAt(2);
							if (tmp1 == 0) {
								if (tmp2 == 0 || tmp2 == 1 || tmp2 == 2 || tmp2 == 3 || tmp2 == 4) {
									// alert (phoneNo);
									return true;
								} else {
									alert("Phone Operator Do Not Exist !!!");
									return false;
								}
							} else {
								alert("Invalid Phone Number!!Must start with 0!");
								return false;
							}
						}
					} else {
						alert("Invalid Phone Number");
						return false;
					}
				}

				function genderChecked() {
					if (document.getElementById("Male").checked == true) {
						//alert("Male");
						return true;
					} else if (document.getElementById("Female").checked == true) {
						//alert("Female");
						return true;
					} else {
						alert("Please Select Gender!!");
						return false;
					}
				}

				function passwordChecked() {
					var password = document.getElementById("password").value;
					var pCapital = /[A-Z]/g;
					var pSmall = /[a-z]/g;
					var pNumber = /[\d]/g;
					var pSymbol = /[!@#$%^&*()-_,.<>?]/g;
					if (password != "") {
						if (password.length > 5) {
							if (password.length < 20) {
								if (password.match(pCapital) != null) {
									if (password.match(pSmall) != null) {
										if (password.match(pNumber) != null) {
											if (password.match(pSymbol) != null) {
												//alert("Password OK");
												return true;
											} else {
												alert("Password Must Contain a Special Charecter!!");
												return false;
											}
										} else {
											alert("Password Must Contain a Number!!");
											return false;
										}
									} else {
										alert("Password Must Contain a Lowercase Letter!!");
										return false;
									}
								} else {
									alert("Password Must Contain a UpperCase Letter!!");
									return false;
								}
							} else {
								alert("Password too Long!!20 Char Maximum!!");
								return false;
							}
						} else {
							alert("Password too Short!!At least 6 Char Required!!");
							return false;
						}
					} else {
						alert("Password Can't be Empty!!");
						return false;
					}
				}

				function confirmPassword() {
					var password = document.getElementById("password").value;
					var confirm_password = document.getElementById("confirm_password").value;
					if (confirm_password != "") {
						if (password == confirm_password) {
							//alert("Password Matched!!");
							return true;
						} else {
							alert("Password Didn't Matched!!");
							return false;
						}
					} else {
						alert("Confirm Password Field Required!!!!");
						return false;
					}
				}

				function validation() {
					var form = document.getElementById("form1");
					if (NameValidation() == true && EmailValidation() == true && PhoneValidation() == true && genderChecked() == true && passwordChecked() == true && confirmPassword() == true) {
						alert("Registration Successfull");
						form.submit();
					}
				}
			</script>
		</div>
	</div>
	<div class="divFooter">
		Copyright © All Rights Reserved | Developed by Amna Rafique
	</div>
</body>

</html>