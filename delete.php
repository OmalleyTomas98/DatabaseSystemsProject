<?php

// Create connection
$conn = mysqli_connect("localhost:3308","root", "" , "dentalpractice");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM appointment WHERE  AppointmentID= '$_GET[id]'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
include("Header.php");

$conn->close();
?>