<!--

Morgan Armstrong
9/24/17
CSCI 297: Assignment 3 Part 2

-->
<html>
<body>
<P>

<?php
// Open file for reading
$fp = fopen ("/tmp/MorganArmstrong_HW3.txt", "r");

// While not at the end of file get each line of the file and output to browser
while(!feof($fp))
{
	echo fgets($fp). "<br />";
}

// Close file
fclose ($fp);

?>

</body>
</html>
