<?php
   $con=mysqli_connect("localhost","root","","ohms");
   $name= $_GET['name'];
   $deletequery = "delete from booking where name='$name'";
   $query = mysqli_query($con,$deletequery);

  if(mysqli_query($con,$deletequery)) 
  {
			echo "<script type='text/javascript'> alert('Delete')</script>";				
	}
   header('location:status.php');
?>