<?php
include("connection.php");
session_start();
?>
<form action="" method="POST">
Username<input type="text" name="firstname"><br><br>
Password<input type="text" name="password"><br><br>
<input type="submit" name="submit" value="Login"><br><br>
</form>
<?php
if(isset($_POST['submit']))
{
	$firstname=$_POST['firstname'];
	$pwd=$_POST['password'];
	
	$query="Select * from student WHERE firstname='$firstname' && password='$pwd'";
	$data=mysqli_query($conn,$query);
	$total=mysqli_num_rows($data);
	
	if($total==1)
	{
		//echo "Login OK";
		$_SESSION['username']=$firstname;
		header('location:homeadmin.php');
	}
	else
	{
		echo "Login Unsuccesful";
	}
}

?>