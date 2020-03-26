<!DOCTYPE html>
<html lang ="en">
<head>
<meta charset="utf-8"/>
	<title>Dentist Database</title>
<link rel="stylesheet" type="text/css" media="screen" href="layout.css">
</head>
<body>

<table id="nav">
	<tr>
		<td><a href="Dentist.php">Home</a></td>
		<td><a href="Patients.php">Show Patients</a></td>
		<td><a href="addPatient.php">Add</a></td>

<td>Logout</td>
<td>
	<form method="post" action="search.php">
	<input type="text" name="search"/>
	<input type="submit" name="submit" value="Search">
</form>	
</td>
</tr>
</table>
</body>
