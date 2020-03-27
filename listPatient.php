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
    <th>Address</th>
    <th>Balance</th>
    <th>Doctor</th>

    <th>Email</th>
    <th>Room</th>
    <th>ID</th>
    <th>LastAppointment</th>
    <th>Patient_Condition</th>
    <th>PhoneNo</th>
    <th>Scan</th>


    </tr>
    <?php

    $conn = mysqli_connect("localhost:3308","root", "" , "dentalpractice");
    if($conn -> connect_error){
        die("Connection failed". $conn -> connect_error);
    }

    $sql = "SELECT  Address , Balance   , Doctor , Email , ID , LastAppointment ,  Patient_Condition , PhoneNo , Scan from patient";
    $result = $conn -> query($sql);
    
    if ($result -> num_rows > 0)
    {
        while($row = $result-> fetch_assoc()){
        echo "<tr><td>"
        . $row["Address"]    . "</td><td>"  
        . $row["Balance"]       . "</td><td>"
        . $row["Doctor"] . "</td><td>"
        . $row["Email"]      . "</td><td>" 
        . $row["ID"]             . "</td><td>"  
        . $row["LastAppointment"]             . "</td><td>" 

        .$row["Patient_Condition"]             . "</td><td>" 
        .$row["PhoneNo"]                      . "</td><td>" 



                                   . "</tr></td>";
        echo "<td><a href=delete.php?id=".$row['ID'].">Delete</a></td>";
        echo "<td><a href=update.php?id=".$row['ID'].">Update</a></td>";
        echo "<td><img src=HTTP://".$row['Scan'] ."width=60 height=60/></td>";


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
