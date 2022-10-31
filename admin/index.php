<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css"
        rel="stylesheet">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <!-- <link rel="stylesheet" href="style.css" type="text/css">
     -->
<style type="text/css">
body{
    margin: 0px;
    border: 0px;
}
.row{
    width: 100%;
    height: auto;
    background-color: black;
    color:white;
}
p{
    padding-top: 20px;
}

.sidebar{
    width: 100%;
    height: auto;
    background:midnightblue;

}
.data{
    height:auto;
    background:silver;
    color: black;
    padding-top: 50px;
}
.adminlogo
{
    margin:3px 0px 3px 0px;
    background:white;
    border-radius: 50px;
    height:auto;
    width:100px;
}
ul li{
    list-style-type:none;
    padding: 20px;
    border-bottom: 2px solid white;
    color: white;
}
ul li:hover{
    background:silver;
    color:black;
}
 /*status*/
 .user-image {
    margin: 25px auto;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;
max-height:170px;
max-width:170px;
}
.top-navbar{
margin:0px;
}
.top-navbar .navbar-brand {
color: #fff;
width: 260px;
text-align: left;
height: 60px;
font-size: 30px;
font-weight: 700;
text-transform: uppercase;
line-height: 30px;
}
.top-navbar .nav > li {
position: relative;
display: inline-block;
}
.top-navbar .nav > li > a {
position: relative;
display: block;
padding: 19px 15px;
color: #77C0FD;
}
.top-navbar .nav > li > a:hover, .top-navbar .nav > li > a:focus {
text-decoration: none;
background-color: #225081;
color: #fff;
}
.top-navbar .dropdown-menu{
min-width: 230px;
border-radius: 0 0 4px 4px;
}
.top-navbar .dropdown-menu > li > a:hover, .top-navbar .dropdown-menu > li > a:focus{
color: #225081;
background:none;
}
.dropdown-tasks{
width: 255px;
}
.dropdown-tasks .progress {
height: 8px;
margin-bottom: 8px;
overflow: hidden;
background-color: #f5f5f5;
border-radius: 0px;
}
.dropdown-tasks > li > a { 
padding: 0px 15px;
}
.dropdown-tasks p {
font-size: 13px;
line-height: 21px;
padding-top: 4px;
}
.active-menu {
    background-color:#225081!important;
}

.arrow {
    float: right;
}

.fa.arrow:before {
    content: "\f104";
}

.active > a > .fa.arrow:before {
    content: "\f107";
}


    </style>

</head>

<body>
    <div class="container">
        <div class="main">
            <?php
session_start();

if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!=true){
  header("location: login.php");
  exit;
}
?>
        <div class="row">
            <div class="col-lg-3">
                <img src="../img/1.png" alt="adminlogo" class="adminlogo">
            </div>
            <div class="col-lg-9" >
                <h6 style="text-align: center; margin: 20px;">THIS IS ADMIN PAGE</h6>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="sidebar col-lg-3">
                <ul>
                    <li><a href="index.php" style="color:white;">Home</a></li>
                    
      <li><a href="add_admin.php" style="color:white;">Admin</a></li>
                    <li><a href="status.php" style="color:white;">Status</a></li>
                    <li><a href="add_rooms.php" style="color: white;">Add rooms</a></li>
                    <li><a href="feedback.php" style="color:white;">Feedback</a></li>
                    <li><a href="logout.php" style="color: white;">logout</a></li>

                </ul>
            </div>

            <div class="data col-lg-9">
                <center>
                    <h4>welcome-<?php echo $_SESSION['admin_email']?></h4>
                </center>
            </div>
        </div>
        </div>
    </div>
    <!-- Js Plugins -->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript">
    </script>
</body>

</html>