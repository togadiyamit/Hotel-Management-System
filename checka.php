<?php
    $c=mysqli_connect("localhost","root","","");
    if(isset($_POST["ca"]))
    {
        $Check_in=$_POST["cn"];
        $Check_out=$_POST["co"];
        $Guest=$_POST["gt"];
        $room=$_POST["rm"];
        $sql1="INSERT into check_avaibility VALUES('$Check_in','$Check_out','$Guest','$room');";
        $result=mysqli_query($c,$sql1);
        if($result)
        {
            echo "roomavailable";
        }
        else
        {
            echo  "room not available";
        }
    }
    else
    {
        echo mysqli_error($c);
    }
?>