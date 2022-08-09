<?php
session_start();
include("../Service/connect.php");
if (!$_SESSION['email']) {
    header('Location:Signin.php');
}
?>
<html>

<head>
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../View/css/fontawesome/fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet">
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
            <?php
            include("../Service/connect.php");
            $sql = "SELECT id FROM Registration WHERE user_type='user' ORDER BY id";
            $query = mysqli_query($conn, $sql);
            $row = mysqli_num_rows($query);
            echo
            '<div class="adminsingle-service">
          <div class="social">
          <i class="fa fa-users" aria-hidden="true"></i>
          </div>
          <span></span>
          <h4> Total Registered Users:<br><br><br> <div class="TotalCount">' . $row . '</div> </h4>
          </div>'
            ?>
            <?php
            include("../Service/connect.php");
            $sql = "SELECT id FROM Message ORDER BY id";
            $query = mysqli_query($conn, $sql);
            $row = mysqli_num_rows($query);
            echo
            '<div class="adminsingle-service">
          <div class="social">
          <i class="far fa-envelope"></i>
          </div>
          <span></span>
          <h4> Total Users Messages:<br><br><br><br><div class="TotalCount">' . $row . '</div></h4>
          </div>'
            ?>
            <?php
            include("../Service/connect.php");
            $sql = "SELECT id FROM fitems_info ORDER BY id";
            $query = mysqli_query($conn, $sql);
            $row = mysqli_num_rows($query);
            echo
            '<div class="adminsingle-service">
          <div class="social">
          <i class="fas fa-search"></i>
          </div>
          <span></span>
          <h4> Total Found Product Posts:<br><br><br><br><div class="TotalCount">' . $row . '</div></h4>
          </div>'
            ?>
            <?php
            include("../Service/connect.php");
            $sql = "SELECT id FROM litems_info ORDER BY id";
            $query = mysqli_query($conn, $sql);
            $row = mysqli_num_rows($query);
            echo
            '<div class="adminsingle-service">
          <div class="social">
          <i class="fas fa-tasks"></i>
          </div>
          <span></span>
          <h4> Total Lost Product Posts:<br><br><br><br><div class="TotalCount">' . $row . '</div></h4>
          </div>'
            ?>
        </div>
    </div>
    <div class="divFooter">
        Copyright © All Rights Reserved | Developed by Amna Rafique
    </div>
</body>

</html>