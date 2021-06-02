<?php
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
		p
		{
			color: grey;
		}
		table
		{
			color: grey;
		}
		.bblog
		{
			color: white;
		}
		.bblog:hover
		{
			color:black;
		}
		.colorchange:hover
		{
			color: white;
		}
		a
		{
			text-decoration: none;
			color: grey;
		}
        a:hover
        {
        	color: white;
        }
	</style>
</head>
<body bgcolor="black">
<p><font size="5" class="colorchange"><b>Operations</b></font></p>
<br><br>
<table width="100%" border="0" cellspacing="15">
	<tr>
		<td class="colorchange"><font size="5"><a href="rightframes.php" target="right">Dashboard</a></font></td>
	</tr>
	<tr>
		<td class="colorchange"><font size="5"><a href="deleteobuttondirectly.php" target="right">Database</a></font></td>
	</tr>
	<tr>
		<td bgcolor="green" class="colorchange"><font color="white" size="5"><b><a href="blog_display.php" target="_parent"><font class="bblog">Blog</font></a></b></font></td>
	</tr>
	<tr>
		<td class="colorchange"><font size="5"><a href="blog.php" target="right">Add</a></font></td>
	</tr>
	<tr>
		<td class="colorchange"><font size="5">Update</font></td>
	</tr>
	<tr>
		<td class="colorchange"><font size="5">Delete</font></td>
	</tr>
	<tr>
		<td bgcolor="green"><font color="white"><font size="5"><b><a href="galley_display.php" target="_parent"><font class="bblog">Gallery</font></b></font></td>
	</tr>
	<tr>
		<td class="colorchange"><font size="5"><a href="gallery_upload.php" target="right">Add</a></font></td>
	</tr>
	<tr>
		<td class="colorchange"><font size="5">Delete</font></td>
	</tr>
</table>
</body>
</html>