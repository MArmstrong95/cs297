<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Database Connection</title>
	<link rel="stylesheet" href="https://unpkg.com/sakura.css/css/sakura.css" type="text/css">
</head>

<table rules=all border=5>
	<tr>
		<td bgcolor=black colspan=4 align=center><font color=white>Existing Warehouses
	<tr>
		<td align="center" bgcolor=lightgrey>WhNumb
		<td align="center" bgcolor=lightgrey>City
		<td align="center" bgcolor=lightgrey>Floors
		<td bgcolor=lightgrey>

<?php

	// connect the database
	$server = ""; // edited out for security
	$user = "";
	$pass = "";
	$database = "";

	$DBconn = new mysqli ($server, $user, $pass, $database);

	if (isset($_POST['recid'])) {
		$del = $_POST['recid'];
		$query = "DELETE FROM warehouse WHERE WhNumb = '$del';";
		$result = mysqli_query ($DBconn, $query);
	}

	if (isset($_POST['City']))
	{
		$WhNumb = $_POST['WhNumb'];
		$City   = $_POST['City'];
		$Floors = $_POST['Floors'];
		$query  = "INSERT INTO warehouse VALUES ('$WhNumb', '$City', $Floors)";
		$result = mysqli_query ($DBconn, $query);
	}

	// submit and process the query for existing warehouses
	$query = "select * from warehouse;";
	$result = mysqli_query ($DBconn, $query);
	while ($row = mysqli_fetch_object ($result))
	   echo ("<tr>
			<td align='center'> $row->WhNumb
			<td align='center'> $row->City
			<td align='center'> $row->Floors
			<td align='center'>
			<form method='post'>
			<input type='submit' name='deleteButton' value='delete'>
			<input type='hidden' name='recid' value='$row->WhNumb'>
			</form>");
?>

</table>
<P>
<hr>
<P>

<form method=post>

	<h3>New Warehouse Info:</h3>

	<table>
	<tr>
		<td>WhNumb</td>
		<td align="right"><input type=text name="WhNumb"></td>
	</tr>
	<tr>
		<td>City</td>
		<td align="right"><input type=text name="City"></td>
	</tr>
	<tr>
		<td>Floors</td>
		<td align="right"><input type=text name="Floors"></td>
	</tr>
	<tr>
		<td><input type=submit value="Add Record"></td>
	</tr>
	</table>

</form>
</html>
