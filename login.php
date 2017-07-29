<?php
session_start();
if (isset($_POST['submit']))
{
	$conn = mysqli_connect("localhost","root","","face2face");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
$username=$_POST['username'];
$password=$_POST['password'];
$sql = "SELECT * FROM user_info WHERE username = '$username' AND password = '$password';";
$sql_result = mysqli_query ($conn, $sql) or die ('request "Could not execute SQL query" '.$sql);
		$user = mysqli_fetch_assoc($sql_result);
		if(!empty($user)){
			$_SESSION['user_info'] = $user['username'];
			$message='Logged in successfully';
		}
		else{
			$message = 'Wrong Username or password.';
		}
	echo "<script type='text/javascript'>alert($message);</script>";
}
?>
<!DOCTYPE html>
<head>
	<title>Face2Face | Login</title>
	<link rel="stylesheet" href="style.css"  /> 
	<style type="text/css">
	</style>
</head>
<body id="login_body">
<nav id="navbar">
<ul>
		<li><img src="images/meeting.jpg" height="65px" width="65px"></li>
		<li><a href="index.html">Home</a></li>
		<li><a href="create_event.php">Events</a></li>
		<li><a href="meeting.php">Fix a meeting</a></li>
		<li><a href="signup.php">Login/Signup</a></li>
</ul>
</nav>
<div id="login">
	<h2 align="center">LOGIN HERE...</h2>
	<form name="login" method="post" action="login.php">
		<table cellpadding="3" cellspacing="5">
			</tr>
				<td>Username</td>
				<td><input type="text" name="username" placeholder="Enter username" required>
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" placeholder="Enter password"required>
				</td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="Login" name="submit">
				</td>
			</tr>
		</table>
	</form>
</div>
<footer id="footer" style="margin-top: 250px">
	<a href="index.html">Face2Face</a> is developed for study purpose as a project for <a href="https://dashboard.hasura.io/login">Hasura</a> internship only.
	This webapp is not for any commercial purpose.
</footer>
</body>
</html>