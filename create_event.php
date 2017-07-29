<?php
session_start();
$conn = mysqli_connect("localhost","root","","face2face");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
if (isset($_POST['submit']))
{
$e_name=$_POST['e_name'];
$e_description=$_POST['e_description'];
$e_place=$_POST['e_place'];
$participant_limit=$_POST['participant_limit'];
$age_group=$_POST['age_group'];
$start_time=$_POST['start_time'];
$duration=$_POST['duration'];
$sql = "INSERT INTO event_info (e_name, e_description, e_place, participant_limit, age_group, start_time, duration) VALUES ('$e_name', '$e_description', '$e_place', '$participant_limit', '$age_group', '$start_time', '$duration');";
	if(mysqli_query($conn, $sql))
{  
	$message = "You have successfully created an event";
}
else
{  
	$message = "Could not create an event"; 
}
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
<!DOCTYPE html>
<head>
	<title>Face2Face | Create an Event</title>
	<link rel="stylesheet" href="style.css"/>
</head>
<body id="create_event_body">
<nav id="navbar">
<ul>
		<li><img src="images/meeting.jpg" height="65px" width="65px"></li>
		<li><a href="index.html">Home</a></li>
		<li><a href="">Events</a></li>
		<li><a href="meeting.php">Fix a meeting</a></li>
		<li><a href="signup.php">Login/Signup</a></li>
</ul>
</nav><br>
<center>
	Create an event here!
</center>
<div id="submit" style="margin-top: 20px">
	<h2 align="center">Enter the event details...</h2>
	<form name="create_event" method="post" action="create_event.php">
		<table cellpadding="3" cellspacing="5">
			<tr>
				<td>Event Name</td>
				<td><input type="text" name="e_name" placeholder="Enter your Event name" required>
				</td>
			</tr>
			<tr>
				<td>Event Description</td>
				<td><input type="text" name="e_description" placeholder="Enter the description of your event" required>
				</td>
			</tr>
			<tr>
				<td>Place</td>
				<td><input type="text" name="e_place" placeholder="Enter your event place" required>
				</td>
			</tr>
			<tr>
				<td>Participant Limit</td>
				<td><input type="number" name="participant_limit" placeholder="Enter number of participants allowed" required>
				</td>
			</tr>
			<tr>
				<td>Age Group</td>
				<td><input type="text" name="age_group" placeholder="Enter age group for the event" required>
				</td>
			</tr>
			<tr>
				<td>Start Time</td>
				<td><input type="number" name="start_time" placeholder="Enter start time for the event" required>
				</td>
			</tr>
			<tr>
				<td>Duration</td>
				<td><input type="number" name="duration" placeholder="Enter the duration in hours for the event" required>
				</td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit" value="Create Event">
				</td>
			</tr>
		</table>
	</form>
</div>
<footer id="footer" style="margin-top: 40px">
	<a href="index.html">Face2Face</a> is developed for study purpose as a project for <a href="https://dashboard.hasura.io/login">Hasura</a> internship only.
	This webapp is not for any commercial purpose.
</footer>
</body>
</html>