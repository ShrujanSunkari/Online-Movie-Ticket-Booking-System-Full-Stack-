<?php

        include "config.php";


$s_id = $_POST['s_id'];
$st_id= $_POST['st_id'];
$theatre_id=$_POST['theatre_id'];
$movie_id=$_POST['movie_id'];
$start_date=$_POST['start_date'];
$status=$_POST['status'];
$r_status=$_POST['r_status'];

$query ="INSERT INTO `tbl_shows` (`s_id`, `st_id`, `theatre_id`, `movie_id`,`start_date`,  `status`, `r_status`) VALUES ($s_id, $st_id, $theatre_id, $movie_id, $start_date, $status, $r_status)";

$result = mysqli_query($con,$query);

if($result)
{
    echo 'Data Inserted';
}

else{
    echo 'Data Not Inserted';
}


?>
