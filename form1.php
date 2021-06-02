<?php
include("connection.php");
error_reporting(0);
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
background-color:white;
color:black;
height:30px;
width:70px;
border-radius:25px;
}
#btn:hover{
	background-color: blue ;
}
span{
	color:red;
	font-size: 14px;
}
</style>
</head>
<body>
<br><br><br><br><br><br><br>
<form action="#" onsubmit="return validation()">
<table align="center" cellspacing="15">
<tr>
<td>
	First Name
	<td><input type="text" id="userf" name="firstname" placeholder="Enter your first name">
		<br><span id="userff"></span>
	</td>
</tr>
<tr>
<td>
	Last Name
	<td><input type="text" id="userl" name="lastname" placeholder="Enter your last name">
		<br><span id="userll"></span>
	</td>
</tr>
<tr>
<td>
	Mobile No
	<td><input type="number" id="mobile" name="mobileno" placeholder="Mobile(Do not write +91)">
		<span id="mobilee"></span>
	</td>
</tr>
<tr>
<td>
	Email Address
	<td><input type="text" id="email" name="emailadd" placeholder="Enter your email">
	<span id="emaill"></span>
</td>
</tr>
<tr>
<td>
	Password
	<td><input type="Password" id="pass" name="password" placeholder="Enter your password">
		<span id="passs"></span>
	</td>
</tr>
<tr>
<td>
	Confirm Password
	<td><input type="Password" id="conpass" name="conpassword" placeholder="Retype password">
		<span id="conpasss"></span>
	</td>
</tr>
<tr>
<td>
	Gender
	<td><input type="radio" name="gender" value="Male">Male<input type="radio" name="gender" value="Female">Female
	</td>
</tr>

<tr>
<td>
	DOB
	<td><input type="date" name="dob">
	</td>
</tr>

<tr>
<td>
	Languages Known
	<td>
<input type="checkbox" name="lk[]" value="Hindi">Hindi
<input type="checkbox" name="lk[]" value="English">English<br>
<input type="checkbox" name="lk[]" value="Tamil">Tamil
<input type="checkbox" name="lk[]" value="Punjabi ">Punjabi
</td>
</tr>

<tr>
<td>
	Address
	<td>
<textarea rows="5" name="add">
</textarea>
</td>
</tr>

<td align="center" colspan="2">
	<input type="submit" id="btn" name="submit"></td></tr>
</table>


</form>
<script type="text/javascript">
	function validation()
	{
		var userf = document.getElementById('userf').value;
		var userl = document.getElementById('userl').value;
		var mobile = document.getElementById('mobile').value;
		var email = document.getElementById('email').value;
		var pass = document.getElementById('pass').value;
		var conpass = document.getElementById('conpass').value;
		if(userf == "")
		{
			document.getElementById('userff').innerHTML="**Please write username";
			return false;
		}
		  if(userf.length<2)
		  {
			  document.getElementById('userff').innerHTML="**Please write more than one charactor for username";
			  return false;
		  }
		  if(!isNaN(userf))
		  {
			  document.getElementById('userff').innerHTML="**Please only write alphabets";
			  return false;
		  }
		  else
		  {
			  document.getElementById('userff').innerHTML="";
		  }

		if(userl == "")
		{
			document.getElementById('userll').innerHTML="**Please write lastname";
			return false;
		}
		  if(userl.length<2)
		  {
			  document.getElementById('userll').innerHTML="**Please write more than one charactor for lastname";
			  return false;
		  }
		  if(!isNaN(userl))
		  {
			  document.getElementById('userll').innerHTML="**Please only write alphabets";
			  return false;
		  }
		  else
		  {
			  document.getElementById('userll').innerHTML="";
		  }

		if(isNaN(mobile))
		{
			document.getElementById('mobilee').innerHTML="**Please write digits only";
			return false;
		}
		  if(mobile.length<10)
		  {
			  document.getElementById('mobilee').innerHTML="**Please write 10 digit number";
			  return false;
		  }
		  if(mobile.length>10)
		  {
			  document.getElementById('mobilee').innerHTML="**Please write 10 digit number";
			  return false;
		  }
		  else
		  {
			  document.getElementById('mobilee').innerHTML="";
		  }

		if(email == "")
		{
			document.getElementById('emaill').innerHTML="**Please write email in the box";
			return false;
		}
		  if(email.indexOf('@')<=0)
		  {
			document.getElementById('emaill').innerHTML="**Invalid position of @";
			return false;
		  }
		  if(email.charAt(email.length-4)!='.' && email.charAt(email.length-3)!='.')
		  {
			document.getElementById('emaill').innerHTML="**Invalid position of .";
			return false;
		  }
		  else
		  {
		  	document.getElementById('emaill').innerHTML="";
		  }

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
if($_GET['submit'])
{
$fn=$_GET['firstname'];
$ln=$_GET['lastname'];
$mo=$_GET['mobileno'];
$em=$_GET['emailadd'];
$pa=$_GET['password'];
$co=$_GET['conpassword'];
$ge=$_GET['gender'];
$dob=date('Y-m-d',strtotime($_GET['dob']));
$lakn=$_GET['lk'];
$laknstr=implode(",",$lakn);
$ad=$_GET['add'];

$query="INSERT INTO student VALUES ('$fn','$ln',$mo,'$em','$pa','$co','$ge','$dob','$laknstr','$ad')";
$data=mysqli_query($conn,$query);

if($data)
{
	//echo "data inserted";
}
else
{
	echo "failed to insert";
	mysqli_connect_error();
}
}
?>