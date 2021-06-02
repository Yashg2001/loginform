<?php
include("connection.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login Page Design</title>
	<style>
		table
		{
			background-color: black;
			border:5px solid white;
			border-radius: 25px;
			background: rgba(0,0,0,0.4);
		}

		#type
		{
			width: 325px;
			border:0;
			outline: 0;
			background:transparent;
			border-bottom: 3px solid white;
			color:white;
			font-size: 25px;
			text-align: center;
		}

		input::-webkit-input-placeholder
		{
			font-size:20px;
			line-height: 3;
			color:white;
			text-align: center;
		}

		#btn
		{
			width: 100px;
			background-color: orange;
			height: 35px;
			border-radius: 25px;
			font-size: 20px;
			font-family: arial;

		}
		#btn:hover
		{
	         background-color: green ;
			 color:white;
        }
	</style>
</head>
<body background="black.jpg">
<br><br><br><br><br>
<form action="" method="POST">
<table width="27%" border="0" align="center" cellspacing="30">
	<tr>
		<td align="center">
			<img src="user_login.png">>
		</td>
	</tr>
	<tr>
		<td>
			<input type="text" placeholder="Username" id="type" name="firstname">
		</td>
	</tr>
	<tr>
		<td>
			<input type="password" placeholder="***********" id="type" name="password">
		</td>
	</tr>
	<tr>
		<td align="center">
			<input type="submit" value="Login" id="btn" name="login">
		</td>
	</tr>
	<tr>
		<td align="center">
			<input type="submit" value="Sign Up" id="btn" name="signup">
		</td>
	</tr>
</table>
</form>
<script>
history.pushState({}, "", "")
</script>
</body>
</html>
<?php
if(isset($_POST['login']))
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
		header('location:frames.php');
	}
	else
	{
		echo "Login Unsuccesful";
	}
}

?>
<?php
if(isset($_POST['signup']))
{
	/*$firstname=$_POST['firstname'];
	$pwd=$_POST['password'];
	
	$query="Select * from student WHERE firstname='$firstname' && password='$pwd'";
	$data=mysqli_query($conn,$query);
	$total=mysqli_num_rows($data);*/
	
	//if($total==1)
	//{
		//echo "Login OK";
		//$_SESSION['username']=$firstname;
		header('location:postmethodform.php');
	//}
	//else
	//{
		//echo "Login Unsuccesful";
	//}
}

?>