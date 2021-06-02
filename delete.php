<?php
include("connection.php");
error_reporting(0);

$rollno=$_GET['rn'];
$query="DELETE FROM STUDENT WHERE ROLLNO = '$rollno'";
$data=mysqli_query($conn,$query);
if($data)
{
	echo "<script>alert('Record deleted from database')</script>";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost:8080/htmlform/deleteobuttondirectly.php">
<?php
}
else
{
	echo "<font color='red'>Record not deleted</font>";
}

?>