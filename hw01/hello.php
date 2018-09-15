<!-- 

 Morgan Armstrong
 CSCI 297
 08/28/17

-->

<html>
<body>
<P>
<center>

<?php

// Function to call on time
function longdate ($timestamp)
{
	return date("l F jS Y", $timestamp);
}

// Display "Hello World" and today's date
echo "Hello World<P>Today is ";
echo longdate(time());
?>

</body>
