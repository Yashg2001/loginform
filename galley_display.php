<html>
<head>
<title>Display Images</title>
<style>
</style>
</head>
<body>

<?php
include("connection.php");
error_reporting(0);
$query="SELECT * FROM gallery1";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

if($total!=0)
{
	//echo "Table has records";
	while($result=mysqli_fetch_assoc($data))
	{
		echo "<img src='".$result['picsource']."' height='400' width='400'>";
	}
}
else
{
	echo "No records found";
}
?>