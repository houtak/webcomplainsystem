<?php
session_start();
require_once ('database.php');

if (isset($_POST['Submit'])) {
// echo "";
// }else{
// $file=$_FILES['image']['tmp_name'];
// $image = $_FILES["image"] ["name"];
// $image_name= addslashes($_FILES['image']['name']);
// $size = $_FILES["image"] ["size"];
// $error = $_FILES["image"] ["error"];
// 
// if ($error > 0){
// die("Error uploading file! Code $error.");
// }else{
// 	if($size > 10000000) //conditions for the file
// 	{
// 	die("Format is not allowed or file size is too big!");
// 	}
// 	
// else
// 	{
//move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]);			
//$location=$_FILES["image"]["name"];

$matricno=$_SESSION['matricno'];
$issue=$_POST['issue'];
$description=$_POST['description'];
$inasis=$_SESSION['inasis'];
$location=$_POST['location'];
$status='Submitted';
$comment='NO';
date_default_timezone_set("Asia/Kuala_Lumpur");
$datereport=date("Y-m-d");
$timereport=date("H:i:s");
$timestamp=strtotime("now");

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO complain (matricno, issue, description,inasis,location,status,comment,datereport,timereport,timestamp)
VALUES ('$matricno', '$issue', '$description', '$inasis', '$location' ,'$status', '$comment','$datereport','$timereport','$timestamp')";

$conn->exec($sql);
echo "<script>alert('Successfully Added!!!'); window.location='studentmainpg.php'</script>";
// }
}
// }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
   <link   href="css/bootstrap.min.css" rel="stylesheet">
	<body background="images/b.png">
	<style>
	.form { 
	margin: 0 auto; 
	width:250px;
	line-height: 200%:
	}
	</style>
</head>
 
<body>
			<div class="form">
                <h3>Complain Form</h3>
            </div>
    <form method="post" action="complain.php"  enctype="multipart/form-data" class="form">
<table class="table1">
	<tr>
		<td><label style="color:#3a87ad; font-size:18px;">Issue</label></td>
		<td width="30"></td>
		<td><input type="text" name="issue" placeholder="issue"  /></td>
	</tr>
	<tr>
		<td><label style="color:#3a87ad; font-size:18px;">Location/Room No</label></td>
		<td width="30"></td>
		<td><input type="text" name="location" placeholder="Location/Room No" /></td>
	</tr>
	<tr>
		<td><label style="color:#3a87ad; font-size:18px;">Description</label></td>
		<td width="30"></td>
		<td><textarea type="text" name="description" placeholder="description" rows="8" cols="50"></textarea></td>
	</tr>
</table>
    </div>
    <div>
	<a class="btn" href="studentmainpg.php" class="btn btn-primary">Back</a>
		<button type="submit" name="Submit" class="btn btn-primary">Submit</button>
    </div>
</form>
  </body>
</html>