<?php

//Set default value of variables for initial page load

if (!isset($phoneError)) {$phoneError ='';}
if (!isset($phone)) {$phone ='';}


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