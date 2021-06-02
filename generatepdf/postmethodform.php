
<html>
<head>
<title>
	
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
</style>
</head>
<body>
<br><br><br><br><br><br><br>
<form action="pdf.php" method="POST">
<table align="center" cellspacing="15">
<tr>
<td>
	Roll No
	<td><input type="number" id="rollno" name="roll" placeholder="Enter your Roll no">
	</td>
</tr>

<tr>
<td>
	First Name
	<td><input type="text" id="userf" name="firstname" placeholder="Enter your first name">
	</td>
</tr>
<tr>
<td>
	Last Name
	<td><input type="text" id="userl" name="lastname" placeholder="Enter your last name">
	</td>
</tr>
<tr>
<td>
	Mobile No
	<td><input type="number" id="mobile" name="mobileno" placeholder="Mobile(Do not write +91)">
	</td>
</tr>
<tr>
<td>
	Email Address
	<td><input type="text" id="email" name="emailadd" placeholder="Enter your email">
</td>
</tr>
<tr>
<td>
	Password
	<td><input type="Password" id="pass" name="password" placeholder="Enter your password">
	</td>
</tr>
<tr>
<td>
	Confirm Password
	<td><input type="Password" id="conpass" name="conpassword" placeholder="Retype password">
	</td>
</tr>
<tr>
<td>
	Gender
	<td><input type="radio" name="gender" value="Male">Male
	<input type="radio" name="gender" value="Female">Female
	</td>
</tr>

<tr>
<td>
	DOB
	<td><input type="date" name="dob" required>
	</td>
</tr>

<tr>
<td>
	Languages Known
	<td>
<input type="checkbox" name="lk[]" value="Hindi">Hindi
<input type="checkbox" name="lk[]" value="English">English<br>
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
<script>
history.pushState({}, "", "")
</script>
</body>
</html>
