<!DOCTYPE html>
<html>
<head>
	<title>Blog Display</title>
</head>
<body>
	<font size="7"><b><p align="center">Our Blog</p></b></font>
<table border="0" cellspacing="25" width="60%" align="center">
			
</body>
</html>
<?php
include("connection.php");
error_reporting(0);
$query="SELECT * FROM blog";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0)
{
	while($result=mysqli_fetch_assoc($data))
	{
		echo "<tr>
		<td>
		<font size='6'>".$result['title']."<br><img src='".$result['file']."' height='225' width='300'></font>
		</td>
		<td align='justify'>".$result['content']."</td>
		</tr>

		";
	}
}
else
	{
		echo "No records found";
	}
?>