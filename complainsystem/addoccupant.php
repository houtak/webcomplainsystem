<?php
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
$id=$_POST['id'];
$name=$_POST['name'];
$contactnumber=$_POST['contactnumber'];
$age=$_POST['age'];
$weight=$_POST['weight'];
$height=$_POST['height'];
$race=$_POST['race'];
$religion=$_POST['religion'];


$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO occupant (id,name,contactnumber,age,weight,height,race,religion)
VALUES ('$id', '$name', '$contactnumber', '$age', '$weight', '$height', '$race', '$religion')";

$conn->exec($sql);

// }
}
// }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
	
	
</head>
 
<body> 
  
         <h1><strong> <span style= "background-color: #FFC733;"> A Management Dashboard For Rumah Sinar Harapan</span></strong></h1>
        <p> ADD OCCUPANT </p>
		 <form method="post" action="addoccupant.php"  enctype="multipart/form-data">
<table class="occupant">
	<tr>
		<td><label style="color:#3a87ad; font-size:18px;">Id:</label></td>
		<td width="30"></td>
		<td><input type="text" name="id" placeholder="" required /></td>
	</tr>
	<tr>
		<td><label style="color:#3a87ad; font-size:18px;">Name:</label></td>
		<td width="30"></td>
		<td><input type="text" name="name" placeholder="" required /></td>
	</tr>
	<tr>
		<td><label style="color:#3a87ad; font-size:18px;">ContactNumber:</label></td>
		<td width="30"></td>
		<td><input type="text" name="contactnumber" placeholder="" required /></td>
	</tr>
	<tr>
		<td><label style="color:#3a87ad; font-size:18px;">Age:</label></td>
		<td width="30"></td>
		<td><input type="text" name="age" placeholder="" required /></td>
	</tr>
	<tr>
		<td><label style="color:#3a87ad; font-size:18px;">Weight:</label></td>
		<td width="30"></td>
		<td><input type="text" name="weight" placeholder="" required /></td>
	</tr>
	<tr>
		<td><label style="color:#3a87ad; font-size:18px;">Height:</label></td>
		<td width="30"></td>
		<td><input type="text" name="height" placeholder="" required /></td>
	</tr>
	<tr>
		<td><label style="color:#3a87ad; font-size:18px;">Race:</label></td>
		<td width="30"></td>
		<td><input type="text" name="race" placeholder="" required /></td>
	</tr>
	<tr>
		<td><label style="color:#3a87ad; font-size:18px;">Religion:</label></td>
		<td width="30"></td>
		<td><input type="text" name="religion" placeholder="" required /></td>
	</tr>
	</table>	 
		 
		 
		 <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
		 <a class= "btn" href="adddiseases.php" class="btn btn-primary">Next</a>
		<a class= "btn" href="logout.php" class="btn btn-primary">Logout</a>
		 </form>
		 </div>
		 </div>
		 
		
		
</body>
</html>
  
