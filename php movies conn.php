<?php

        include "config.php";

 
$movie_id = $_POST['movie_id'];
$t_id = $_POST['t_id'];
$movie_name = $_POST['movie_name'];
$cast = $_POST['cast'];
$desc = $_POST['desc'];
$release_date = $_POST['release_date'];
$image = $_POST['image'];
$video_url = $_POST['video_url'];
$status = $_POST['status'];

$query1 = "INSERT INTO `tbl_movie` VALUES ('$movie_id','$t_id','$movie_name','$cast','$desc','$release_date','$image','$video_url','$status');";

$result = mysqli_query($con,$query1);
if($result)
{
    echo 'Data Inserted';
}

else{
    echo "Data not inserted";
}


?>