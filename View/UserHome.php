<script>
    function f() {
        var txtSearchKey = document.getElementsByName("search_key")[0];

        //alert(txtSearchKey.value);

        var req = new XMLHttpRequest();
        req.open("GET", "fetch.php?search_key=" + txtSearchKey.value, true);
        req.onreadystatechange = function() {
            if (req.readyState == 4) {
                var span = document.getElementById("show");
                document.getElementById('show').style.display = "none";
                span.innerHTML = req.responseText;
            }
        }
        req.send();
    }
</script>

<?php
session_start();
if (!$_SESSION['email']) {
    header('Location:Signin.php');
}
?>
<html>

<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/frame.css">
    <link rel="stylesheet" type="text/css" href="css/Home.css">
    <link href="../View/css/fontawesome/fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet">
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
                <li><a class="active" href="UserHome.php"><b>Home</b></b></a></li>
            </ul>
        </nav>
    </header>

    <div class="banner">
        <div class="banner-content">
            <h1>Welcome to Web based lost & Found Service</h1>
            <div class="Lost">
                <h2 style="padding-bottom: 50px;">Lost Something? Search Here...</h2>
                <form method="post" action="UserProductList.php">
                    <input type="text" name="search_key" onkeyup="f()" autocomplete="on" placeholder="Search Here...." required />
                    <!--<input type="button" value="Search" onclick="f()" />-->
                    </br>
                    <input id="btnSubmit" type="submit" value="Search" /><br />
                    <span id="show"></span>
                </form>
            </div>
        </div>
    </div>
    <div class="userhomedivbody">


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
                        <input id="infobtn" type="submit" name="submit" value="Report Lost" />
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
                        <input id="infobtn" type="submit" name="submit" value="Report Found" />
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
                        <input id="infobtn" type="submit" name="submit" value="Lost List" />
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
                        <input id="infobtn" type="submit" name="submit" value="Found List" />
                    </form>
                </div>
            </div>
        </div>

        <div class="Aboutbody">
            <div class="Aboutwrapper">
                <h2>About Lost & Found</h2>
                <div class="Aboutline">
                </div>
                <div class="Aboutsingle-service">
                    <span></span>
                </div>
                <div>
                    <p class="Aboutcontent"><b>Web based Lost & Found service</b> is basically a web application which is developed for the Students who lost something or found something. If something gets missing the owner post on our application or if anyone found something and went to return post on our application. This web application gives user the facility to get any lost thing or return any found thing by just making post on our application. By using this application user can search things by Product category.User can see how many lost posts and found posts are there in this web application. </p>
                    <form method="post" action="UserAbout.php">
                        <h4></h4>
                        <input id="btnSubmit" type="submit" name="submit" value="Read More" />
                    </form>
                </div>

            </div>
        </div>
    </div>
    </div>
    <div class="divFooter">
        Copyright © All Rights Reserved | Developed by Amna Rafique
    </div>
</body>

</html>