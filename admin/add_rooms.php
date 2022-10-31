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
    <link rel="stylesheet" href="../style.css" type="text/css">
    <link rel="stylesheet" href="style.css" type="text/css">

    <style type="text/css">
    .row {
        width: 100%;
        height: auto;
        background-color: black;
        color: white;
    }

    .sidebar {
        width: 100%;
        height: auto;
        background: midnightblue;

    }

    ul li {
        list-style-type: none;
        padding: 20px;
        border-bottom: 2px solid white;
        color: white;
    }

    ul li:hover {
        background: silver;
        color: black;
    }

    .data {
        width: 100%;
        height: auto;
        background: silver;
        color: black;
        padding-top: 50px;
    }

    .adminlogo {
        margin: 3px 0px 3px 0px;
        background: white;
        border-radius: 50px;
        height: auto;
        width: 100px;
    }

    table {
        border-collapse: collapse;
        background-color: #fff;
        box-shadow: 0 10px 20px rgba(0, 0, 0, .5);
        border-radius: 10px;
        margin: auto;
    }

    th,
    td {
        border: 1px solid #f2f2f2;
        padding: 5px 15px;
        text-align: center;
        color: gray;
    }

    th {
        text-transform: uppercase;
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
    <div class="container">
        <div class="main">
            <?php
      session_start();

      if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
        header("location: login.php");
        exit;
      }
      ?>
            <div class="row">
                <div class="col-lg-3">
                    <img src="../img/1.png" alt="adminlogo" class="adminlogo">
                </div>
                <div class="col-lg-9">
                    <h6 style="text-align: center; margin: 20px;">THIS IS ADMIN PAGE</h6>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="sidebar col-lg-3">
                <ul>
                    <li><a href="index.php" style="color:white;">Home</a></li>
                    <li><a href="status.php" style="color:white;">Status</a></li>
                    <li><a href="add_rooms.php" style="color: white;">Add rooms</a></li>
                    <li><a href="update_rooms.php" style="color: white;">Update rooms</a></li>
                    <li><a href="feedback.php" style="color:white;">Feedback</a></li>
                    <li><a href="logout.php" style="color: white;">logout</a></li>
                </ul>
            </div>
            <div class="data col-lg-9">
                <div class="block">
                    <form name="form1" action="" method="post" enctype="multipart/form-data" autocomplete="off">
                        <table>
                            <tr class="table-borderless">
                                <th>
                                    <h3>Add Product</h3>
                                </th>
                            </tr>
                            <tr>
                                <td>Room Name</td>
                                <td><input type="text" name="Room_name"></td>
                            </tr>
                            <tr>
                                <td>Room Price</td>
                                <td><input type="text" name="Room_price"></td>
                            </tr>
                            <tr>
                                <td>Room Services</td>
                                <td><input type="text" name="Room_services"></td>
                            </tr>
                            <tr>
                                <td>Room Description</td>
                                <td>
                                    <textarea cols="15" rows="5" name="Room_desc">
                                    </textarea>

                                </td>
                            </tr>
                            <tr>
                                <td>Add image</td>
                                <td>
                                    <input type="file" name="img">
                                </td>
                            </tr>
                            <tr class="table-borderless">
                                <td><input type="submit" name="sb" value="upload"></td>

                            </tr>
                        </table>
                    </form>
                </div>
            </div>
            <!-- php code -->
            <?php
                $con = mysqli_connect("localhost", "root", "", "ohms");
                if (isset($_POST["sb"])) {
                $Room_name = $_POST["Room_name"];
                $Room_price = $_POST["Room_price"];
                $img = $_FILES['img']['name'];
                $Room_services = $_POST["Room_services"];
                $Room_desc = $_POST["Room_desc"];
                $tempimagename = $_FILES['img']['tmp_name'];
                move_uploaded_file($tempimagename, "../img/room/$img");

                $Sql1 = "INSERT INTO upload_hotel VALUES (NULL,'$Room_name','$img','$Room_price','$Room_services', '$Room_desc');";
                $result = mysqli_query($con, $Sql1);
                if ($result)
                {
                    echo "<script type='text/javascript'> alert('Room Added')</script>";
                } else {
                echo mysqli_error($con);
                }
                } else {
                echo mysqli_error($con);
                }
            ?>
        </div>
    </div>
    </div>
    <!-- Js Plugins -->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js">
    </script>
</body>

</html>