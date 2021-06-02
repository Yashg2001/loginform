<html>
<head>
<title>
Display records</title>
</head>
<body>
<table border="2">
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
		</tr>";
	}
}
else
{
	echo "No records found";
}
?>
</table>
</body>
</html>