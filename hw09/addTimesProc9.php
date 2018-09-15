<!--
Morgan Armstrong
CSCI 297: HW09
Add times to database
-->
<!DOCTYPE html>
<html>
<head>
	<title>Times Added</title>
	<link rel="stylesheet" href="https://unpkg.com/sakura.css/css/sakura.css" type="text/css">
</head>
<h2 align = "center">Advising Times Added</h2>
<hr>
<center>

<?php
	// Connect to the database
	$server = ""; // edited out for security
	$user = "";
	$pass = "";
	$db = "";

	$DBconn = new mysqli ($server, $user, $pass, $db);
	if ($DBconn->connect_error) {
		die("Connection failed: " . $DBconn->connect_error);
	}
	if (isset($_POST['advisingDay'])) {
		if (isset($_POST['time'])) {
			$advDay = $_POST['advisingDay'];
			$advTimes = $_POST['time'];

			// Go through advising times to find out what has been added or not added
			foreach ($advTimes as $time) {
				$dupeSQL = "SELECT * FROM availabletimes WHERE (day = '$advDay' AND time = '$time')";
				$dupeQuery = mysqli_query ($DBconn, $dupeSQL);

				if (!$dupeQuery || mysqli_num_rows($dupeQuery) > 0) {
					$errorDupeMsg = $advDay . " " . $time . " has already been added.<br>";
					echo $errorDupeMsg;
				} else {
					$query = "INSERT INTO availabletimes (day, time) VALUES ('$advDay', '$time')";
                                        $result = mysqli_query ($DBconn, $query);
					if ($result) {
						$successAdd = $advDay . " " . $time . " has been added successfully!<br>";
					echo $successAdd; }
				}
			}
		} else {
			echo "Please enter a day and time(s) to be added.";
		}
	} else {
		echo "Please enter a day and time(s) to be added.";
	}
?>

</center>
</html>
