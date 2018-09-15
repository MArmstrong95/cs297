<!--
Morgan Armstrong
CSCI 297: HW09
View Available times from the database that were added
-->
<!DOCTYPE html>
<html>
<head>
	<title>Available Advising Times</title>
	<link rel="stylesheet" href="https://unpkg.com/sakura.css/css/sakura.css" type="text/css">
</head>

<h2 align = center>Available Times</h2>
<hr>

<table rules = all>
	<tr>
		<th colspan = 4 align = center bgcolor="#2a6592"><font color = white>Available Times</th>
	</tr>
	<tr>
		<th bgcolor = "#8ec3eb" align = center>Day</th>
		<th bgcolor = "#8ec3eb" align = center>Time</th>
		<th bgcolor = "#8ec3eb" align = center>Student</th>
		<th bgcolor = "#8ec3eb" align = center></th>
	</tr>

<?php
	// Connect to the database
	$server = ""; // edited out for security
	$user = "";
	$pass = "";
	$database = "";

	$DBconn = new mysqli ($server, $user, $pass, $database);
	if ($DBconn->connect_error) {
		die("Connection failed: " . $DBconn->connect_error);
	}

	if (isset($_POST['rowID'])) {
		$del = $_POST['rowID'];
		$query = "DELETE FROM availabletimes WHERE id = '$del';";
		$result = mysqli_query ($DBconn, $query);
	}

	$query = "SELECT * FROM availabletimes ";
	$query .= "ORDER BY STR_TO_DATE(day, '%a %b %D %Y'), ";
	$query .= "STR_TO_DATE(time, '%h:%i%p');";
	$result = mysqli_query($DBconn, $query);
	while ($row = mysqli_fetch_object ($result)) {
		echo ("<tr>
			<th align = center> $row->day </th>
			<th align = center> $row->time </th>
			<th align = center> $row->student </th>
			<th align = center>
			<form method = post>
			<input type = 'submit' style='background-color:#db9833; color:white;' name = 'deleteButton' value = 'delete'>
			<input type = 'hidden' name = 'rowID' value = '$row->id'>
			</form>");
	}
?>
</table>
<hr>
</html>
