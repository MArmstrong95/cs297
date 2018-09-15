<!--

Morgan Armstrong
10/9/17
Homework 5: process form

-->
<!DOCTYPE html>
<html>
<head>
	<title>Times Added</title>
	<link rel="stylesheet" href="https://unpkg.com/sakura.css/css/sakura.css" type="text/css">
</head>
<h2 align="center">Advising Times Added:</h2>
<hr>
<body>
<center>
	<?php
		// Open file for writing and reading
		$myFile = fopen("/tmp/advisingTimes.txt", "a+") or die("Unable to open file!");
		
			// Get advising day and time(s)
			$advDay = $_POST['advisingDay'];
			$advTimes = $_POST['time'];

			if(empty($_POST['advisingDay']) or empty($_POST['time']))
			{
				echo "Please enter a day and time(s) to be added.";
			}
			else{
			// Go through advising times to find out what has been added or not added
			foreach ($advTimes as $time)
			{
				// Create string for printing and checking
				$txt = $advDay . ' ' . $time;

				// Initialize string for finding match
				$match = "";
		
				// Iterate throuth the file to find a string match equal to $txt, if it has already been added
				while (!feof($myFile))
				{
					$buffer = fgets($myFile);
					if(strpos($buffer, $txt) !== FALSE)
					{
						$match = 'This date has already been added: ' . $txt . '<br>';
					}
				}

				// If the string hasn't been added, echo file added & add to file
				if($match === "")
				{
					echo $txt . '<br>';
					fwrite($myFile, $txt);
				}
				else // If the string has been added, echo that it has been added already
				{
					echo $match;
				}

				// Set file pointer back to the beginning of file
				rewind($myFile);
			}
		}
		

		// Close file
		fclose($myFile);
	?>
</center>
</body>
</html>
