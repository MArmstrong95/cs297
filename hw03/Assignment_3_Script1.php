<!--

Morgan Armstrong
9/24/17
CSCI 297: Assignment 3 Part 1

-->
<html>
<body>
<P>

<?php

// Opens file for writing or outputs an error message if file unable to open
$myfile = fopen("/tmp/MorganArmstrong_HW3.txt", "w") or die("Unable to open file!");
	
	// For loop to output dates to the file
	for($i = 1; $i < 8; $i++)
	{
		
		$txt = date("D M jS Y", time() + ($i * 24 * 60 * 60)) . "\n";
		fwrite($myfile, $txt);
	}

// Close file when done
fclose($myfile);

// Output done when script is finished
echo "Done."

?>

</body>
</html>
