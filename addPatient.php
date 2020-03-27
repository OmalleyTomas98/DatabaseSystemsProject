<!DOCTYPE html>
<html>
<head>
    <title>Dental Practice</title>
</head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<body>
<table class="table table-hover table-dark">


    </tr>

<?php

//Set default value of variables for initial page load



include("Header.php");
print <<<HERE

<h2>Add a Patient</h2>
<form action="add.php" method="POST" enctype="multipart/form-data">
<div>
<label for="PatientName">PatientName*:</label>
<input type ="text" name="PatientName" id="PatientName" required="required">
</div>
<div>

<label for="DoctorName">DoctorName*:</label>
<input type ="text" name="DoctorName" id="DoctorName" required="required">

</div>
<div>
<label for="patientCondition">patientCondition*:</label>
<input type ="text" name="patientCondition" id="patientCondition" required="required">


</div>
<div>
<label for="room">room*:</label>
<input type ="text" name="room" id="room" required="required">

</div>

<div>
<label for="time">time*:</label>
<input type ="text" name="time" id="time" required="required">
</div>

<div id="mySubmit">
<input type="submit" name="submit" value="Submit">
</div>
</form>
HERE;
?>