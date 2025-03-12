<?php

        include "config.php";

 
$t_id = $_POST['t_id'];
$theatre_name = $_POST['theatre_name'];
$address = $_POST['address'];
$place = $_POST['place'];
$state = $_POST['state'];
$pin = $_POST['pin'];

$query1 = "INSERT INTO `tbl_theatre` VALUES ('$t_id','$theatre_name','$address','$place','$state','$pin');";

$result = mysqli_query($con,$query1);
if($result)
{
    echo 'Data Inserted';
}

else{
    echo "Data not inserted";
}


?>