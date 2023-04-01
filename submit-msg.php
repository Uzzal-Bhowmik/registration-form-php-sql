<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

// Establishting connection with database
$conn = mysqli_connect("localhost", "root", "", "dpi");

if(!$conn) {
    die("Error: Could not be connected. ".mysqli_connect_error());
}


// Receiving input data
$fname = $_POST['firstName'];
$lname = $_POST['lastName'];
$idNo = $_POST['idNumber'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dept = $_POST['dept'];


// Input data to the db-table
$sql = "INSERT INTO student_registration (firstName, lastName, idNumber, email, phone, dept)
        VALUES ('$fname', '$lname', '$idNo', '$email', '$phone', '$dept')"; 

// Check if data is added successfully
if(mysqli_query($conn, $sql)) {
    echo "
    <div style='text-align: center; margin: 10px;'>
        <h3>Congratulations! $fname $lname.</h3>
        <p>Your information was successfully saved into the database.</p>
        <a href='index.html'>Go Back</a>
    </div>
    
    ";
}

// Closing connection
mysqli_close($conn);

    



?>
</body>
</html>