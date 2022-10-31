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
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">


    <style>
    table {
        border-collapse: collapse;
        background-color: #fff;
        box-shadow: 0 10px 20px 0 rgba(0, 0, 0, .3);
        border-radius: 10px;
        margin: auto;
    }

    th,
    td {
        border: 1px solid #f2f2f2;
        padding: 10px 40px;
        text-align: center;
        color: gray;
    }

    th {
        text-transform: uppercase;
        font-weight: 500;
    }

    td {
        font-size: 14px;
    }

    .fa {
        font-size: 18px;
    }

    .fa-check-square {
        color: #63c76a;
    }

    .fa-trash {
        color: #ff0000
    }
    </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        <a href="hotel_booking.php" class="bk-btn">Booking Now</a>
        <nav class="mainmenu mobile-menu">
            <ul>
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="rooms.php">Rooms</a></li>
                <li><a href="about-us.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="top-social">
            <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
            <a href="https://www.tripadvisor.com/"><i class="fa fa-tripadvisor"></i></a>
            <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
        </div>
        <ul class="top-widget">
            <li><i class="fa fa-phone"></i> +(91) 63545 67890</li>
            <li><i class="fa fa-envelope"></i> info.ohms@gmail.com</li>
        </ul>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section header-normal">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tn-left">
                            <li><i class="fa fa-phone"></i> +(91) 63545 67890</li>
                            <li><i class="fa fa-envelope"></i> info.ohms@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="tn-right">
                            <div class="top-social">
                                <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.tripadvisor.com/"><i class="fa fa-tripadvisor"></i></a>
                                <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                            </div>
                            <a href="hotel_booking.php" class="bk-btn">Booking Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="index.php">
                                <img src="img/logo.jpeg" height="auto" width="80%">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li class="active"><a href="rooms.php">Rooms</a></li>
                                    <li><a href="about-us.php">About Us</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Our Rooms</h2>
                        <div class="bt-option">
                            <a href="rooms.php">Home</a>
                            <span>Rooms</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Rooms Section Begin -->
    <table class="table-responsive">
        <thead>
            <tr>
                <th>Sr_no.</th>
                <th>Room_name</th>
                <th>Room_price</th>
                <th>Room_services</th>
                <th>Room_desc</th>
                <th>image</th>
                <th>Booking</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $con = mysqli_connect("localhost", "root", "", "ohms");
            $sql = "select * from upload_hotel";
            $re = mysqli_query($con, $sql);
            $nums = mysqli_num_rows($re);
            while ($res = mysqli_fetch_array($re)) {
            ?>
            <tr>
                <td><?php echo $res['upload_id']; ?></td>
                <td><?php echo $res['Room_name']; ?></td>
                <td><?php echo $res['Room_price']; ?></td>
                <td><?php echo $res['Room_services']; ?></td>
                <td><?php echo $res['Room_desc']; ?></td>
                <td><img src="./img/room/<?php echo $res['img']; ?>" height="auto" width="100%"></td>
                <td><a href="hotel_booking.php"> BOOKING NOW</a></td>
            </tr>

            <?php
            }
            ?>



        </tbody>
    </table>
    </div>
    </div>
    </div>
    <!-- Rooms Section End -->

    <!-- Footer Section Begin -->
    <footer class="bg-dark py-5">
        <div class="container">
            <h3 style="text-align:center!important; color:#f0f3f5;">
                Online Hotel Mangement system
            </h3>
        </div>
    </footer>
    <!-- Footer Section End -->
    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>