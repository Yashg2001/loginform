<?php
include("connection.php");
error_reporting(0);
session_start();
?>

<html>
<head>
<title>
	Signup form
</title>
<style>
table{
color:white;
background-color:black;
border-radius:25px;
}
#btn{
background-color:green;
color:white;
height:40px;
width:130px;
border-radius:25px;
}
#btn:hover{
	background-color: red ;
}
span{
	color:red;
	font-size: 14px;
}
</style>
</head>
<body>
<br><br><br><br><br><br><br>
<form action="" onsubmit="return validation()" method="POST">
<table align="center" cellspacing="15">
<tr>
<td>
	ID(Firstname)
	<td><input type="text" name="id">
	</td>
</tr>

<tr>
<td>
	Roll No
	<td><input type="number" name="rollno">
	</td>
</tr>

<tr>
<td>
	Password
	<td><input type="text" name="password" id="pass">
		<span id="passs"></span>
	</td>
</tr>
<tr>
<td>
	Confirm Password
	<td><input type="text" name="conpassword" id="conpass">
		<span id="conpasss"></span>
	</td>
</tr>


<td align="center" colspan="2">
	<input type="submit" id="btn" name="submit" value="Change Password"></td></tr>
</table>

</form>
<script type="text/javascript">
	function validation()
    {   var pass = document.getElementById('pass').value;
		var conpass = document.getElementById('conpass').value;

    	if(pass == "")
		{
			document.getElementById('passs').innerHTML="**Please enter the password";
			return false;
		}
		  if(pass.length<6)
		  {
		  	document.getElementById('passs').innerHTML="**Please enter password of atleast 6 length";
		  	return false;
		  }
		  if(pass.search(/[0-9]/)==-1)
		  {
		  	document.getElementById('passs').innerHTML="**Please enter password with atleast one numeric";
		  	return false;
		  }
		  if(pass.search(/[A-Z]/)==-1)
		  {
		  	document.getElementById('passs').innerHTML="**Please enter password with atleast one uppercase letter";
		  	return false;
		  }
		  if(pass.search(/[@\$\&\*\^\#]/)==-1)
		  {
		  	document.getElementById('passs').innerHTML="**Please enter password with atleast special symbol";
		  	return false;
		  }
		  else
		  {
		  	document.getElementById('passs').innerHTML="";
		  }

		if(conpass != pass)
		{
			document.getElementById('conpasss').innerHTML="**Password not matched";
			return false;
		}
		  else
		  {
		  	document.getElementById('conpasss').innerHTML="";
		  }
	}
</script>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
$roll=$_POST['rollno'];
$id=$_POST['id'];
$pwd=$_POST['password'];
$conpwd=$_POST['conpassword'];
$result="SELECT * from student WHERE Rollno='$roll' && firstname='$id'";
$data1=mysqli_query($conn,$result);
$total=mysqli_num_rows($data1);
if($total==1)
{
 $query="UPDATE student SET password='$pwd',conpassword='$conpwd' WHERE Rollno='$roll'";
$data=mysqli_query($conn,$query);
echo "<script>alert('PassWord Changed')</script>";
}
else
{
	echo "<script>alert('Failed to Change PassWord')</script>";
}
}
?>