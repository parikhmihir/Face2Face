<?php
session_start();
$conn = mysqli_connect("localhost","root","","face2face");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
if (isset($_POST['submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$contact=$_POST['contact'];
$addr_building=$_POST['addr_building'];
$addr_street=$_POST['addr_street'];
$addr_city=$_POST['addr_city'];
$addr_state=$_POST['addr_state'];
$occupation=$_POST['occupation'];
$hobby=$_POST['hobby'];
$username=$_POST['username'];
$password=$_POST['password'];
$sql = "INSERT INTO user_info (fname, lname, gender, contact, addr_building, addr_street, addr_city, addr_state, occupation, hobby, username, password) VALUES ('$fname', '$lname', '$gender', '$contact', '$addr_building', '$addr_street', '$addr_city', '$addr_state', '$occupation', '$hobby', '$username', '$password');";
	if(mysqli_query($conn, $sql))
{  
	$message = "You have been successfully registered";
}
else
{  
	$message = "Could not insert record"; 
}
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
<!DOCTYPE html>
<head>
	<title>Face2Face | Signup</title>
	<link rel="stylesheet" href="style.css"/>
	<script type="text/javascript" src="validation.js"></script>
</head>
<body id="signup_body">
<nav id="navbar">
<ul>
		<li><img src="images/meeting.jpg" height="65px" width="65px"></li>
		<li><a href="index.html">Home</a></li>
		<li><a href="create_event.php">Events</a></li>
		<li><a href="meeting.php">Fix a meeting</a></li>
		<li><a href="">Login/Signup</a></li>
</ul>
</nav><br>
<center>
	Already have an account ? <a href="login.php"><button id="login_button">LOGIN HERE!</button></a>
</center>
<div id="submit">
	<h2 align="center">SIGNUP HERE...</h2>
	<form name="register" method="post" action="signup.php">
		<table cellpadding="3" cellspacing="5">
			<tr>
				<td>First Name</td>
				<td><input type="text" name="fname" placeholder="Enter your First name"required>
				</td>
			</tr>
			<tr>
				<td>Last Name</td>
				<td><input type="text" name="lname" placeholder="Enter your Last name"required>
				</td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><input type="text" name="gender" placeholder="Enter your gender" required>
				</td>
			</tr>
			<tr>
				<td>Contact</td>
				<td><input type="number" name="contact" placeholder="Enter your contact number" required>
				</td>
			</tr>
			<tr>
				<td>Building #</td>
				<td><input type="number" name="addr_building" placeholder="Enter bldg #">
				</td>
			</tr>
			<tr>
				<td>Street Name</td>
				<td><input type="text" name="addr_street" placeholder="Enter street name" required>
				</td>
			</tr>
			<tr>
				<td>City</td>
				<td><input type="text" name="addr_city" placeholder="Enter city name" required>
				</td>
			</tr>
			<tr>
				<td>State</td>
				<td><input type="text" name="addr_state" placeholder="Enter state name" required>
				</td>
			</tr>
			<tr>
			<tr>
				<td>Occupation</td>
				<td><input type="text" name="occupation" placeholder="Enter your occupation"required>
				</td>
			</tr>
			<tr>
				<td>Hobby</td>
				<td><input type="text" name="hobby" placeholder="Enter your hobby" required>
				</td>
			</tr>
			<tr>
				<td>username</td>
				<td><input type="text" name="username" placeholder="Enter username" required>
				</td>
			</tr>
			<tr>
				<td>password</td>
				<td><input type="password" name="password" placeholder="Enter password" required>
				</td>
			</tr>
			<tr>
				<td><input type="submit" value="SUBMIT" name="submit">
				</td>
				<td><input type="reset" value="RESET"></td>
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