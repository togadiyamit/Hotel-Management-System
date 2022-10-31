<?php
   $con=mysqli_connect("localhost","root","","ohms");
   $name= $_GET['name'];
   $deletequery = "delete from feedback where name='$name'";
   $query = mysqli_query($con,$deletequery);

  if(mysqli_query($con,$deletequery)) 
  {
			echo "Delete Feedback data";				
	}
?>