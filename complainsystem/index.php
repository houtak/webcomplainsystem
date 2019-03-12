<?php
session_start();

require_once ('database.php');

if (isset($_POST['login'])) {
	
	$type=$_POST['user'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	//require_once('database.php');
	
	if($type == "staff"){
		
	$result = $conn->prepare("SELECT * FROM staff WHERE username='$username' AND password=md5('$password')");
	$result->execute();
	$row = $result->fetch();
	
	if(is_array($row) && !empty($row)) {
		$validuser = $row['username'];
        $_SESSION['valid'] = $validuser;
        $_SESSION['name'] = $row['name'];
        $_SESSION['staffid'] = $row['staffid'];
		echo "<script>alert('Login Successful!!!'); window.location='staffmain.php'</script>";
	}else{
		echo "<script>alert('Login Failed!!!'); window.location='index.php'</script>";
	}
	}
	if($type == "student"){
		
	$result = $conn->prepare("SELECT * FROM student WHERE username='$username' AND password=md5('$password')");
	$result->execute();
	$row = $result->fetch();
	
	if(is_array($row) && !empty($row)) {
		$validuser = $row['username'];
        $_SESSION['valid'] = $validuser;
        $_SESSION['name'] = $row['name'];
        $_SESSION['matricno'] = $row['matricno'];
		$_SESSION['icno'] = $row['icno'];
		$_SESSION['inasis'] = $row['inasis'];
		$_SESSION['roomno'] = $row['roomno'];
		echo "<script>alert('Login Successful!!!'); window.location='studentmainpg.php'</script>";
	}else{
		echo "<script>alert('Login Failed!!!'); window.location='index.php'</script>";
	}
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Inasis Reporting System</title>
	<link   href="css/bootstrap.min.css" rel="stylesheet">
	<body background="images/b.png">
	
</head>
<body>
	<div class="header">
		<br>
	    <center> <h1>UUM Inasis Reporting System</h1> </center>
		<br>
		<br>
		<center> <h3>Login</h3> </center>
		<br>

	</div>
	<form method="post" action="index.php">
	<center>
		<div class="input-group">
			<label>Type of User</label>
			<select name="user" name="type" >
				<option value="staff">Staff</option>
				<option value="student">Student</option>
			</select>
		</div>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn btn-success" name="login">Login</button>
		</div>
		<p>
				<br>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
		</center>
	</form>
</body>
</html>