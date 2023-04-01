<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">

    <style>
        
    </style>
</head>
<body>
    <?php

        $conn = mysqli_connect("localhost", "root", "", "dpi");
        if(!$conn) {
            die("Error: Could not be connected. " .mysqli_connect_error());
        }

        $result = mysqli_query($conn, "SELECT * FROM student_registration");
        
        echo "
        <h1 class='text-center mt-3 text-decoration-underline'> Registered Students </h1>
        <table class='table table-bordered table-striped w-75 mx-auto my-5'>
            <thead>
                <tr class='table-dark'>
                    <th>Serial No</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Student Id</th>
                    <th>Email</th>
                    <th>Mobile Number</th>
                    <th>Department</th>
                </tr>
            </thead>";

        while($row = mysqli_fetch_array($result)) {
            echo "
            <tr>
                <td>$row[0]</td>
                <td>$row[1]</td>
                <td>$row[2]</td>
                <td>$row[3]</td>
                <td>$row[4]</td>
                <td>$row[5]</td>
                <td>$row[6]</td>
            </tr>";
        }
        echo "</table>";


        // closing the connection 
        mysqli_close($conn);
    
    ?>
</body>
</html>