<!--

Morgan Armstrong
CSCI 297 HW10: Student Advising Times View
12/4/17

*NOTE: I did not add the search for student time function.
	Instead, I redesigned the page to show all times,
	taken or not taken. If the time is taken, the name
	is displayed for who is registered for that time, as
	well as disabling the sign up function(button) for that
	time. Otherwise, a input box is displayed for the user
	to enter their name and sign up for that time. Since
	all users can see all times, I found it unneccessary
	to add the search function.

-->
<!doctype html>
<html>
<head>
	<title>Student Sign Up</title>
	<link rel="stylesheet" href="https://unpkg.com/sakura.css/css/sakura.css" type="text/css">
</head>

<h2 align = center>Student Advising Form</h2>
<hr>

<table rules = all>
        <tr>
                <th colspan = 4 align = center bgcolor="#2a6592"><font color = white>Available Times</th>
        </tr>
        <tr>
                <th bgcolor = "#8ec3eb" align = center>Day</th>
                <th bgcolor = "#8ec3eb" align = center>Time</th>
                <th bgcolor = "#8ec3eb" align = center>Available</th>
                <th bgcolor = "#8ec3eb" align = center></th>
        </tr>
<body>
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

	if (isset($_POST['rowID']) && isset($_POST['signUpName'])) {

		$rowID = $_POST['rowID'];
		$name = $_POST['signUpName'];
		$query = "UPDATE availabletimes SET student = '$name' WHERE id = $rowID";
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
				<form method = post>
                <th align = center>");

		if ($row->student == null) {
			echo("<input type='text' name='signUpName' align='center' placeholder='Your Name'></th>
			<th align = center>
			<input type='submit' style='background-color:#4CAF50; color:white;' name='signUpButton' value='Sign Up'>
			<input type='hidden' name='rowID' value='$row->id'>
			</th>
			</form>");
		} else {
			echo(" $row->student </th>
			<th align = center>
			<button type='button' style='background-color:#555555; color:white; opacity:0.7; cursor:not-allowed;'>Sign Up</button>
			</th>");
		}
    }
?>
</table>
</body>
<hr>
</html>
