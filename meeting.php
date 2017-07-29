<?php 
session_start();
$conn = mysqli_connect("localhost","root","","face2face");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
if (isset($_POST['submit']))
{
	$hobby=$_POST['hobby'];
	$occupation=$_POST['occupation'];
	$sql = "SELECT * FROM user_info WHERE hobby= '$hobby' OR occupation='$occupation'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
		if($row==NULL)	
		{
			echo "<script type='text/javascript'>alert('No match found');</script>";
		}
		else 
		{
			while($row = mysqli_fetch_assoc($result)) 
			{
        		echo "Name: ".$row['fname']." ".$row['lname']."<br>";;
    		}
		}
}
?>
<!DOCTYPE html>
<head>
	<title>Face2Face | Meet a Person</title>
	<link rel="stylesheet" href="style.css"/> 
</head>
<body id="meeting_body">
<nav id="navbar">
	<ul>
		<li><img src="images/meeting.jpg" height="65px" width="65px"></li>
		<li><a href="index.html">Home</a></li>
		<li><a href="create_event.php">Events</a></li>
		<li><a href="">Fix a meeting</a></li>
		<li><a href="signup.php">Login/Signup</a></li>
	</ul>
</nav>

<div id="meeting_form" style="margin-top: 71px; opacity: 0.9">
	<h2 align="center">Welcome to the Place of discovering a friend in an unknown person by meeting them.
	Enter your likings below and fix up a meeting with a person with similar likings.
	</h2>
	<form name="meeting" action="meeting.php" method="post">
		<table cellpadding="3" cellspacing="5" align="center">
			<tr>
				<td>Hobby</td>
				<td><input type="text" name="hobby" placeholder="Enter your Hobby">
				</td>
			</tr>
			<tr>
				<td>Occupation</td>
				<td><input type="text" name="occupation" placeholder="Enter your occupation" >
				</td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="Choose an appropriate candidate" name="submit"></td>
			</tr>
		</table>
	</form>
</div>
<script type="text/javascript" src="script.js"></script>
<footer id="footer" style="margin-top: 170px">
	<a href="index.html">Face2Face</a> is developed for study purpose as a project for <a href="https://dashboard.hasura.io/login">Hasura</a> internship only.
	This webapp is not for any commercial purpose.
</footer>
</body>
</html>