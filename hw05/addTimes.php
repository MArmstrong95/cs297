<!--

Morgan Armstrong
10/9/17
Homework 5: add times form

-->
<!DOCTYPE html>
<html>
<head>
	<title>Add Advising Times</title>
	<link rel="stylesheet" href="https://unpkg.com/sakura.css/css/sakura.css" type="text/css">
</head>

<body>
	<h2 align="center">Add Advising Times</h2>
	<hr>

	<form method="post" action="addTimesProcess.php">
		<table align="center">

			<tr>
				<th align="center">
					Select a day:
				</th>
				<th align="center">
					Select times:
				</th>
			</tr>
			<tr>
				<th align="center">
					<?php 

						for ($i = 1; $i < 22; $i++)
						{
							$dateNum = date("N", time() + ($i * 24 * 60 * 60));
							if (($dateNum != 6) && ($dateNum != 7))
							{
								$txt = date("D M jS Y", time() + ($i * 24 * 60 * 60));
								echo "<input type='radio' name='advisingDay' value='".$txt."'>";
								echo $txt;  
								echo "<br>";
							} else { continue; }
						}

					?>
				</th>
				<th align="center">
					<input type = "checkbox" name = "time[]" value = "08:00am">08:00am<br> 
					<input type = "checkbox" name = "time[]" value = "08:30am">08:30am<br> 
					<input type = "checkbox" name = "time[]" value = "09:00am">09:00am<br> 
					<input type = "checkbox" name = "time[]" value = "09:30am">09:30am<br> 
					<input type = "checkbox" name = "time[]" value = "10:00am">10:00am<br> 
					<input type = "checkbox" name = "time[]" value = "10:30am">10:30am<br> 
					<input type = "checkbox" name = "time[]" value = "11:00am">11:00am<br> 
					<input type = "checkbox" name = "time[]" value = "11:30am">11:30am<br> 
					<input type = "checkbox" name = "time[]" value = "12:00pm">12:00pm<br> 
					<input type = "checkbox" name = "time[]" value = "12:30pm">12:30pm<br> 
					<input type = "checkbox" name = "time[]" value = "01:00pm">01:00pm<br> 
					<input type = "checkbox" name = "time[]" value = "01:30pm">01:30pm<br> 
					<input type = "checkbox" name = "time[]" value = "02:00pm">02:00pm<br> 
					<input type = "checkbox" name = "time[]" value = "02:30pm">02:30pm<br> 
					<input type = "checkbox" name = "time[]" value = "03:00pm">03:00pm<br> 
					<input type = "checkbox" name = "time[]" value = "03:30pm">03:30pm<br> 
					<input type = "checkbox" name = "time[]" value = "04:00pm">04:00pm<br> 
					<input type = "checkbox" name = "time[]" value = "04:30pm">04:30pm<br> 
					<input type = "checkbox" name = "time[]" value = "05:00pm">05:00pm<br> 
					<input type = "checkbox" name = "time[]" value = "05:30pm">05:30pm<br> 
					<input type = "checkbox" name = "time[]" value = "06:00pm">06:00pm<br> 

				</th>
			</tr>
			
		</table>
		<center>
			<button type="submit">Submit Times</button>
		</center>

</body>
</html>
