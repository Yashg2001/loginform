<?php
$servername="localhost";
$username="root";
$password="";
$dbname="html_form";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
	//echo "connection succesfull";
}
else
{
	echo "connection unsuccesfull".mysqli_connect_error();
}
?>