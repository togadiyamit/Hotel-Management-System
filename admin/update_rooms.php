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
    <link rel="stylesheet" href="style.css" type="text/css">

    <style type="text/css">
    .r1 {
        /* width: 100%;
    height: auto; */
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
        box-shadow: 0 10px 20px 0 rgba(0, 0, 0, .3);
        border-radius: 10px;
        margin: auto;
    }

    th,
    td {
        border: 1px solid #f2f2f2;
        padding: 10px 6px;
        text-align: center;
        color: gray;
    }

    th {
        text-transform: uppercase;
        font-weight: 500;
    }

    td {
        font-size: 10px;
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
            <div class="row r1">
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
                <table class="table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">Sr_no.</th>
                            <th scope="col">Room_name</th>
                            <th scope="col">Room_price</th>
                            <th scope="col">Room_services</th>
                            <th scope="col">Room_desc</th>
                            <th scope="col">image</th>
                            <th scope="col" colspan="2">Opration</th>

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
                            <td><img src="../img/room/<?php echo $res['img']; ?>" height="100px" width="140px"></td>
                            <td><a href="update.php?rn=<?php echo $res['Room_name']; ?>&
                      rp=<?php echo $res['Room_price']; ?>&
                      rs=<?php echo $res['Room_services']; ?>&
                      rd=<?php echo $res['Room_desc']; ?>&
                      ri=<?php echo $res['img']; ?>">Update</a>
                            <td><a href="delete.php?rn=<?php echo $res['Room_name']; ?>&
                      rp=<?php echo $res['Room_price']; ?>&
                      rs=<?php echo $res['Room_services']; ?>&
                      rd=<?php echo $res['Room_desc']; ?>&
                      ri=<?php echo $res['img']; ?>">Delete</a></td>
                            </td>
                        </tr>

                        <?php
            }
            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<!-- Js Plugins -->
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
</script>

</html>