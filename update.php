<?php



if(isset($_POST['update']))
{
$hostname="localhost:3308";
$username="root";
$password="";
$dbname="dentalpractice";


$connect = mysqli_connect($hostname , $username , $password ,  $dbname );


$DoctorName = $_POST['DoctorName'];
$PatientCondition = $_POST['PatientCondition'];
$PatientName = $_POST['PatientName'];
$Room = $_POST['Room'];
$Time = $_POST['Time'];


$query = "INSERT INTO appointment VALUES(NULL, '$PatientName' ,'$DoctorName' , '$patientCondition' , '$room'  , '$time' )";




$result = mysqli_query($connect , $query);


if($result)
{
echo "Data Updated";
}
else {
echo "Data not Updated";
}
mysqli_close($connect);
}


?>

<!DOCTYPE html>
<html>
<head>
<title>PHP Update Data</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width , initial-scale=1.0">
</head>
<body>

<form action="update.php" method="post">

DoctorName<input type="text" name="DoctorName" required><br><br>
PatientCondition<input type="text" name="PatientCondition" required><br><br>
PatientName <input type="text" name="PatientName" required><br><br>
Room<input type="number" name="Room" required><br><br>
Time<input type="text" name="Time" required><br><br>
<input type="submit" name="update" value="Update Data"><br><br>


</form>
</body>
</html>