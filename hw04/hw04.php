<!DOCTYPE HTML>
<html>
<head>
<title>HW04 Processed</title>
<link rel="stylesheet" href="https://unpkg.com/sakura.css/css/sakura.css" type="text/css">
</head>
<body>

<h1 align="center">Receipt</h1>
<hr>
<?php
	echo "<center>";
	$name = $_POST['name'];
	// If the string length of a name is 0, outputs statement without name
	if(strlen($name) == 0)
		echo "Thank you for ordering with us.<br>";
	else
		echo "Thank you for ordering with us, $name.<br>";

	$address = $_POST['address'];
	// If the string length of an address is 0, outputs a statement to come get your food
	if(strlen($address) == 0)
		echo "You did not enter an address, please come pick up your food.<br><br>";
	else
		echo "Your order will be sent to: $address.<br><br>";

	// Create Table for receipt
	echo "Your order contains:<br>";
	echo "<table>";

	// Create variable to store number of sandwhiches
	$pbj = $_POST['PBJ'];
	$subTotal = $pbj * 2.00;

	// Default to 0 if no number is entered
	if (($pbj == null) || ($pbj == 0))
		echo "<tr><th>0 x Peanut Butter and Jellies</th>";
	elseif ($pbj == 1)
		echo "<tr><th>$pbj x Peanut Butter and Jelly</th>";
	else
		echo "<tr><th>$pbj x Peanut Butter and Jellies</th>";
	$price = $pbj * 2.00;
	echo "<th><p align='right'>";
	echo money_format("%i", $price);
	echo "</p></th></tr>";

	// Create second sandwich row similarly to the first
	$ham = $_POST['Ham'];
	$subTotal += ($ham * 3.50);
	if (($ham == null) || ($ham == 0))
		echo "<tr><th>0 x Ham and Cheeses</th>";
	elseif ($ham == 1)
		echo "<tr><th>$ham x Ham and Cheese</th>";
	else
		echo "<tr><th>$ham x Ham and Cheeses</th>";
	$price = $ham * 3.50;
	echo "<th><p align='right'>";
	echo money_format("%i", $price);
	echo "</p></th></tr>";

	// Create third sandwich row
	$turkey = $_POST['Turkey'];
	$subTotal += ($turkey * 3.00);
	if (($turkey == null) || ($turkey == 0))
	        echo "<tr><th>0 x Turkey Sandwiches</th>";
	elseif ($turkey == 1)
		echo "<tr><th>$turkey x Turkey Sandwich</th>";
	else
		echo "<tr><th>$turkey x Turkey Sandwiches</th>";
	$price = $turkey * 3.00;
	echo "<th><p align='right'>";
	echo money_format("%i", $price);
	echo "</p></th></tr>";

	// Create fourth sandwich row
	$grilled = $_POST['Grilled'];
	$subTotal += ($grilled * 3.50);
	if (($grilled == null) || ($grilled == 0))
        echo "<tr><th>0 x Grilled Cheeses</th>";
	elseif ($grilled == 1)
		echo "<tr><th>$grilled x Grilled Cheese</th>";
	else
		echo "<tr><th>$grilled x Grilled Cheeses</th>";
	$price = $grilled * 3.50;
	echo "<th><p align='right'>";
	echo money_format("%i", $price);
	echo "</p></th></tr></table>";

	// End table to create new table for centered horizontal line
	echo "<table><tr><th><hr width='match parent'></th></tr></table><table>";

	// Display total before tax
	echo "<tr><th>Subtotal:</th><th><p align='right'>";
	echo money_format("%i", $subTotal);
	echo "</p></th></tr>";

	// Calculate tax as 9% then display
	$tax = $subTotal * .09;
	echo "<tr><th>Tax:</th><th><p align='right'>";
	echo money_format("%i", $tax);
	echo "</p></th></tr>";

	// Calculate total then display
	$total = $subTotal + $tax;
	echo "<tr><th>Your total is:</th><th><p align='right'>";
	echo money_format("%i", $total);
	echo "</p></th></tr>";
	echo "</table></center>";

?>
</body>
</html>
