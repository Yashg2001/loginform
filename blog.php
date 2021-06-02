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
	<title>Dynamic Blog Insert</title>
</head>
<body>
<form accept="" method="POST" enctype="multipart/form-data">
	<input type="text" name="title" size="56"><br><br>
	<input type="file" name="uploadfile"><br><br>
	<textarea cols="52" rows="10" name="content" required></textarea><br><br>
	<input type="submit" name="submit">
</form>
<script>
history.pushState({}, "", "")
</script>
</body>
</html>
<?php
include("connection.php");
error_reporting(0);

if($_POST['submit'])
{
	$title=$_POST['title'];
	$content=$_POST['content'];
	$filename=$_FILES["uploadfile"]["name"];
	$tempname=$_FILES["uploadfile"]["tmp_name"];
	$folder="blog/".$filename;
	move_uploaded_file($tempname,$folder);

    if($title!="" && $filename!="" && $content!="")
    {
    	$query="INSERT INTO blog VALUES ('$title','$folder','$content')";
    	$data=mysqli_query($conn,$query);
    	if($data)
    	{
    		echo "<script>alert('Blog Uploaded')</script>";
    	}
    }
        else
    	{
    		echo "Failed to upload";
    	}
    
}

?>
