<html>
<head>
<title>
Display records</title>
<style>
#editbtn
{
	background-color:green;
	color:white;
	width:120px;
	font-size:15px;
	height:35px;
}
#deletebtn
{
	background-color:red;
	color:white;
	width:120px;
	font-size:15px;
	height:35px;
}
</style>
</head>
<body>
<table border="2" cellspacing="7">
<tr>
<th>Roll No</th>
<th>First Name</th>
<th>Last Name</th>
<th>Mobile</th>
<th>Email</th>
<th>Password</th>
<th>Confirm Password</th>
<th>Gender</th>
<th>DOB</th>
<th>Language Known</th>
<th>Address</th>
<th colspan="2" align="center">Operations</th>
</tr>

<?php
include("connection.php");
error_reporting(0);
$query="SELECT * FROM STUDENT";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

if($total!=0)
{
	//echo "Table has records";
	while($result=mysqli_fetch_assoc($data))
	{
		echo "
		<tr>
		<td>".$result['Rollno']."</td>
		<td>".$result['firstname']."</td>
		<td>".$result['lastname']."</td>
		<td>".$result['mobile']."</td>
		<td>".$result['email']."</td>
		<td>".$result['password']."</td>
		<td>".$result['conpassword']."</td>
		<td>".$result['gender']."</td>
		<td>".$result['dob']."</td>
		<td>".$result['languageknown']."</td>
		<td>".$result['address']."</td>
		
		<td><a href='update.php?rn=$result[Rollno]&fn=$result[firstname]&ln=$result[lastname]&mo=$result[mobile]&em=$result[email]&ge=$result[gender]&dob=$result[dob]&la=$result[languageknown]&ad=$result[address]'><input type='submit' value='Edit/Update' id='editbtn'></a></td>
		
		<td><a href='delete.php?rn=$result[Rollno]' onclick='return checkdelete()'><input type='submit' value='Delete' id='deletebtn'></a></td>
		</tr>";
	}
}
else
{
	echo "No records found";
}
?>
</table>
<script>
function checkdelete()
{
	return confirm('Are you sure to delete this record');
}
</script>
</body>
</html>