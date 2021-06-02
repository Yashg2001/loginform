<?php
include("connection.php");
error_reporting(0);
?>
<html>
<head>
<style>
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
<body>
<form action="" method="POST" enctype="multipart/form-data">
<br><br>
	<p align="center" style="font-size:160%;"><b>Upload Picture</b></p>
	<br><br><br>
	<table align="center" cellspacing="30">
	<tr>
	<td><font size="5">Choose File: <input type="file" name="uploadfile"></font>
	</td></tr>
	<tr>
	<td align="center">
<input type="submit" value="Upload" name="submit" id="btn"></td>
</tr>
</table>
</form>
</body>
</html>

<?php
if($_POST['submit'])
{
$filename=$_FILES["uploadfile"]["name"];
$tempname=$_FILES["uploadfile"]["tmp_name"];
$folder ="gallery1/".$filename;
move_uploaded_file($tempname,$folder);
if($filename!="")
{
	$query="INSERT INTO gallery1 VALUES('$folder')";
	$data=mysqli_query($conn,$query);
if($data)
{
	echo "inserted";
}
}
else
{
	echo "failed";
}
}

?>