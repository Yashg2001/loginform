<?php
include("connection.php");
error_reporting(0);
$rn=$_GET['rn'];
$fn=$_GET['fn'];
$ln=$_GET['ln'];
$mo=$_GET['mo'];
$em=$_GET['em'];
$ge=$_GET['ge'];
$dob=$_GET['dob'];
$la=$_GET['la']; 
$b=explode(",",$la);
$ad=$_GET['ad'];
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
width:120px;
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
<form action="" method="GET">
<table align="center" cellspacing="15">
<tr>
<td>
	Roll No
	<td><input type="number" name="roll" value="<?php echo "$rn" ?>">
	</td>
</tr>

<tr>
<td>
	First Name
	<td><input type="text" name="firstname" value="<?php echo "$fn" ?>">
	</td>
</tr>
<tr>
<td>
	Last Name
	<td><input type="text" name="lastname" value="<?php echo "$ln" ?>">
	</td>
</tr>
<tr>
<td>
	Mobile No
	<td><input type="number" name="mobileno" value="<?php echo "$mo" ?>">
	</td>
</tr>
<tr>
<td>
	Email Address
	<td><input type="text" name="emailadd" value="<?php echo "$em" ?>">
</td>
</tr>
<tr>
<td>
	Gender
	<td><input type="radio" name="gender" value="Male"
	<?php 
	if($ge=="Male")
	{ echo "checked"; }
	?>>Male
	<input type="radio" name="gender" value="Female" <?php 
	if($ge=="Female")
	{ echo "checked"; }
	?>>Female
	</td>
</tr>

<tr>
<td>
	DOB
	<td><input type="date" name="dob"  value="<?php echo "$dob" ?>" required>
	</td>
</tr>

<tr>
<td>
	Languages Known
	<td>
<input type="checkbox" name="lk[]" value="Hindi"
<?php
if(in_array("Hindi",$b))
{
	echo "checked";
}
?>>Hindi
<input type="checkbox" name="lk[]" value="English" 
<?php
if(in_array("English",$b))
{
	echo "checked";
}
?>>English<br>
<input type="checkbox" name="lk[]" value="Punjabi"
<?php
if(in_array("Punjabi",$b))
{
	echo "checked";
}
?>>Punjabi
</td>
</tr>

<tr>
<td>
	Address
	<td>
<textarea rows="5" name="add"><?php echo "$ad"?>
</textarea>
</td>
</tr>

<td align="center" colspan="2">
	<input type="submit" id="btn" name="submit" value="Update Details"></td></tr>
</table>


</form>
<script>
history.pushState({}, "", "")
</script>
</body>
</html>

<?php
if($_GET['submit'])
{
$rollno=$_GET['roll'];
$firstname=$_GET['firstname'];
$lastname=$_GET['lastname'];
$mobile=$_GET['mobileno'];
$email=$_GET['emailadd'];
$gender=$_GET['gender'];
$do=date('Y-m-d',strtotime($_GET['dob']));
$lakn=$_GET['lk'];
$laknstr=implode(",",$lakn );
$address=$_GET['add'];

$query="UPDATE student SET Rollno='$rollno',firstname='$firstname',lastname='$lastname',mobile='$mobile',email='$email',gender='$gender',dob='$do',languageknown='$laknstr',address='$address' WHERE Rollno='$rollno'";
$data=mysqli_query($conn,$query);

if($data)
{
	echo "<script>alert('Record Updated')</script>";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost:8080/htmlform/deleteobuttondirectly.php">
<?php
}
else
{
	echo "failed to update record";
	mysqli_connect_error();
}
}
?>