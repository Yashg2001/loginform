<?php
include("connection.php");
session_start();
error_reporting(0);
$user = $_SESSION['username'];
if($user==true)
{

}
else
{
	header('location:adminloginpanel.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		a
		{
			text-decoration: none;
			color: white;
		}
	</style>
</head>
<body>
	<table bgcolor="black" width="100%" height="100">
		<tr>
			<td align="right"><font color="white" size="7"><b><?php
			session_start();
			echo "Welcome ".$user." !"."&#128526";
			?></b></font>
				
			</td>
		</tr>
	</table>
<br>
<br><br>
    <table width="100%" border="0" height="200" cellspacing="10">
		<tr>
			<td width="25%" bgcolor="red" rowspan="2" align="center"><font color="white" size="6.5">Total Students<br><br>
			<?php
			$query="SELECT * FROM STUDENT";
			$data=mysqli_query($conn,$query);
			$total=mysqli_num_rows($data);
			if($data!=0)
			{
				echo "$total";
			}
			else
			{
				echo "No records found";
			}
			?>

			</font></td>
			<td width="25%" bgcolor="red" rowspan="2" align="center"><font color="white" size="6.5">Gallery Images<br><br>
			<?php
			$query="SELECT * FROM multiplepics";
			$data=mysqli_query($conn,$query);
			$total=mysqli_num_rows($data);
			if($data!=0)
			{
				echo "$total";
			}
			else
			{
				echo "No records found";
			}
			?></font></td>
			<td width="25%" bgcolor="red" rowspan="2" align="center"><font color="white" size="6.5">Total Blog<br><br>
            <?php
			$query="SELECT * FROM blog";
			$data=mysqli_query($conn,$query);
			$total=mysqli_num_rows($data);
			if($data!=0)
			{
				echo "$total";
			}
			else
			{
				echo "No records found";
			}
			?>
			</font></td>
			<td width="25%" bgcolor="green" align="center"><font size="6"><a href="changepassword.php">Change Password</a></font></td>
		</tr>
		<tr>
			<td bgcolor="orange" align="center"><font size="6"><a href="logout.php" target="_parent">Logout</a></font></td>
		</tr>
	</table>

</body>
</html>