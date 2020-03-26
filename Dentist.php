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


    <tr>
    <th>AppointmentID</th>
    <th>DoctorName</th>
    <th>PatientCondition</th>

    <th>PatientName</th>
    <th>Room</th>
    <th>Time</th>
    </tr>
    <?php

    $conn = mysqli_connect("localhost:3308","root", "" , "dentalpractice");
    if($conn -> connect_error){
        die("Connection failed". $conn -> connect_error);
    }

    $sql = "SELECT  AppointmentID , DoctorName  , PatientCondition , PatientName , Room , Time   from appointment";
    $result = $conn -> query($sql);
    
    if ($result -> num_rows > 0)
    {
        while($row = $result-> fetch_assoc()){
        echo "<tr><td>"
        . $row["AppointmentID"]    . "</td><td>"  
        . $row["DoctorName"]       . "</td><td>"
        . $row["PatientCondition"] . "</td><td>"
        . $row["PatientName"]      . "</td><td>" 
        . $row["Room"]             . "</td><td>"  
        . $row["Time"]             . "</td><td>" 
                                   . "</tr></td>";
    }
    echo "</table>";   
}

else {
    echo "0 result";
}

$conn -> close();

include("Header.php");

    ?>
</table>
</body>
</html>
