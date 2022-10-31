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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css"
        rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <!--Reg style css-->
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /*body{
      background:rgb(177, 184, 184);
    }*/
    .container {
        text-align: center;
        border-radius: 30px;
        background-image: radial-gradient(#f2dcc7 10%, #ebcbab 15%, #dfa974 50%);
        box-shadow: 12px 12px 22px gray;
        background-size: 100% 100%;
        /*height: 100vh;
*/
    }

    .btn1 {
        border: none;
        outline: none;
        height: 50px;
        width: 100%;
        background-color: black;
        color: white;
        border-radius: 4px;
        font-weight: bold;
    }

    .btn1:hover {
        background-color: white;
        border: 1px solid;
        color: #dfa974;
    }

    a:hover {
        color: red;
        background-color: transparent;
        text-decoration: underline;
    }

    form {
        padding-bottom: 5px !important;
    }
    </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <div class="container">
        <div class="main">
            <h1 class="font-weight-bold py-3">OHMS</h1>
            <h4>Payment page</h4>
            <!--Beginning Form-->
            <form action="" method="post" autocomplete="off">
                <div class="form-row">
                    <div class="col-lg-12">
                        <input type="text" name="Name" placeholder="Enter your name" class="form-control my-3 p-4">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-lg-12">
                        <input type="text" name="amount" placeholder="Enter amount" class="form-control my-3 p-4">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-lg-12">
                        <input type="text" name="payment_date" placeholder="Enter payment date"
                            class="form-control my-3 p-4 example">
                    </div>
                </div>

                <div class="form-row col-lg-12">
                    <select id="inputState" name="payment_type" class="form-control my-3 "
                        style="box-sizing: content-box;padding: 4px 0;">
                        <option selected>
                            <--Select Payment type-->
                        </option>
                        <option>COD</option>
                        <option>Online</option>
                    </select>
                </div>

                <div class="form-row">
                    <div class="col-lg-6">
                        <a href="index.php"> <button type="submit" name="sub1" class="btn1 mt-3 mb-5">Pay Now
                            </button></a>
                    </div>
                    <div class="col-lg-6">
                        <a href="index.php"> <button type="submit" name="sb2" class="btn1 mt-3 mb-5">Cancle
                            </button></a>
                    </div>
                </div>
            </form>
            <?php
      $con=mysqli_connect("localhost","root","","ohms");
        if(isset($_POST["sub1"]))
        {
          $Name=$_POST["Name"];
          $amount=$_POST["amount"];
          $payment_date=$_POST["payment_date"];
          $payment_type=$_POST["payment_type"];

          $Sql1="INSERT INTO payment() VALUES (NULL,'$Name', '$amount',
          '$payment_date','$payment_type');";
          $result = mysqli_query($con , $Sql1);
          if($result)
          {
            echo "<script type='text/javascript'> alert('Payment Successfully')</script>";
          }
          else
          {
            echo mysqli_error($con);
          }
        }
        else
        {
          echo mysqli_error($con);
        }

      ?>
            <!--Ending From-->
        </div>
    </div>

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript">
    // When the document is ready
    $(document).ready(function() {

        $('.example').datepicker({
            autoclose: true,
            format: "dd/mm/yyyy"
        });

    });
    </script>
</body>

</html>