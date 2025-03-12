<?php
include('config.php');
session_start();
$email = $_POST["Email"];
$pass = $_POST["Password"];
$qry1=mysqli_query($con,"select * from tbl_admin_login where username='$email' and password='$pass'");
if(mysqli_num_rows($qry1))
{
	$usr1=mysqli_fetch_array($qry1);
	if($usr1['user_type']==2)
	{
		$_SESSION['user']=$usr1['userid'];
		if(isset($_SESSION['show']))
		{
			header('location:booking.php');
		}
		else
		{
			header('location:admin page.php');
		}
	}
	else
	{
		$_SESSION['error']="Login Failed!";
		header("location:admin login.php");
	}
	
}
else
{
	$_SESSION['error']="Login Failed!";
	header("location:admin login.php");
}
?>