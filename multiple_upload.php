<html>
<head>
<title>Multiple photos upload</title>
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
	Upload Pic
<input type="file" name="multiplepics[]" multiple><br>
<br>
<input type="submit" value="Upload" name="submit">
</form>
</body>
</html>

<?php

include("connection.php");
if(isset($_POST['submit']))
{
foreach($_FILES['multiplepics']['name'] as $key=>$val)
{
	$random=rand('11111','99999');
	$file=$random.'_'.$val;
	move_uploaded_file($_FILES['multiplepics']['tmp_name'][$key],'multiplepics/'.$file);
	$query="INSERT INTO multiplepics (picsource) VALUES('$file')";
	$data=mysqli_query($conn,$query);
	if($data)
{
	//echo "inserted";
}
else
{
	echo "failed";
}
}
}

?>