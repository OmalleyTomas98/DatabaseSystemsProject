<?php

//Make a connection to the database
$conn = mysqli_connect("localhost:3308","root", "" , "dentalpractice");

//clean  the incoming data
if($_POST['submit']=="Submit")
{
$PatientName= filter_var($_POST['PatientName'], FILTER_SANITIZE_STRING);
$DoctorName= filter_var($_POST['DoctorName'], FILTER_SANITIZE_STRING);
$patientCondition= filter_var($_POST['patientCondition'], FILTER_SANITIZE_STRING);
$room= filter_var($_POST['room'], FILTER_SANITIZE_NUMBER_INT);
$time= filter_var($_POST['time'], FILTER_SANITIZE_STRING);
	
}

$query = "INSERT INTO appointment VALUES(NULL, '$PatientName' ,'$DoctorName' , '$patientCondition' , '$room'  , '$time')";


if ($result = mysqli_query($conn, $query))
{

include "Header.php";
echo "Patient added: $PatientName, $DoctorName ,$patientCondition , $room , $time <br> ";
} else {

echo "Unable to add Patient";

}
?>