
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
	<title>Admin Panel</title>
	<style>
	</style>
</head>
<frameset cols="14%,*" noresize border="0">
	<frame src="leftframes.php" name="left"></frame>
    <frame src="rightframes.php" name="right"></frame>
</frameset>
</html>