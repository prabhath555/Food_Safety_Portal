<?php
$servername="localhost";
$username="root";
$password="";
$database="feedback";
$con=mysqli_connect($servername,$username,$password,$database);
//$con=mysqli_connect("localhost","root","","library");
if(!$con)
{
	die("error detected" .mysqli_error($con));
}
else
{
	echo"connection established successfully";
}
?>