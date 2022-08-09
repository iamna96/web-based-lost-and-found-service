<html>

<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/frame.css">
    <link rel="stylesheet" type="text/css" href="css/About.css">
    <link href="../View/css/fontawesome/fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet">

</head>

<body>
    <div style="background-color: #084cf7b0;">
        <img src="Image/signuplogo.svg" />
    </div>
    <div class="homesigndivbody">
        <div class="homecontainer" align="center">
            <h1 id="homeheading" style="color:black" ;>Welcome to Web based lost & Found Service</h1>
            <h3 id="homedetails">This is a web application. The Purpose of this web application is to help those students who have lost something, trying to get back his/her items and those student who have found that item, are willing to return the item to the right owner.</h3>
            <h3 id="homesubheading">In order to access this web portal, Click Here
            </h3>
            <div class="homeform">
                <form method="post" action="Signup.php">
                    <h4></h4>
                    <input id="homesignupbtn" type="submit" name="submit" value="SignUp" />
                </form>
                <form method="post" action="Signin.php">
                    <h4></h4>
                    <input id="homesignupbtn" type="submit" name="submit" value="SignIn" />
                </form>
            </div>
        </div>
    </div>
    <div class="servicebody">
        <div class="wrapper">
            <h2>Features</h2>
            <div class="line">
            </div>
            <div class="single-service">
                <div class="social">
                    <i class="fab fa-github-square"></i>
                </div>
                <span></span>
                <h3>Report Lost</h3>
                <p>Click on the report lost button To report your Lost item</p>
                <form method="post" action="LostForm.php" class="Found">
                    <h4></h4>
                    <input id="homeinfobtn" type="submit" name="submit" value="Report Lost" />
                </form>
            </div>
            <div class="single-service">
                <div class="social">
                    <i class="fas fa-cogs"></i>
                </div>
                <span></span>
                <h3> Report Found</h3>
                <p> Click on the report found button To report the lost item</p>
                <form method="post" action="InfoForm.php" class="Found">
                    <h4></h4>
                    <input id="homeinfobtn" type="submit" name="submit" value="Report Found" />
                </form>
            </div>
            <div class="single-service">
                <div class="social">
                    <i class="fas fa-user"></i>
                </div>
                <span></span>
                <h3> Lost List</h3>
                <p>Click on the Lost List button To see the list of lost items</p>
                <form method="post" action="disp_lost.php" class="Found">
                    <h4></h4>
                    <input id="homeinfobtn" type="submit" name="submit" value="Lost List" />
                </form>
            </div>
            <div class="single-service">
                <div class="social">
                    <i class="fa fa-cogs"></i>
                </div>
                <span></span>
                <h3> Found List</h3>
                <p> Click on the report found button To see list of foun item</p>
                <form method="post" action="disp_found.php" class="Found">
                    <h4></h4>
                    <input id="homeinfobtn" type="submit" name="submit" value="Found List" />
                </form>
            </div>
        </div>
    </div>
    <div class="divFooter">
        Copyright © All Rights Reserved | Developed by Amna Rafique
    </div>
</body>

</html>