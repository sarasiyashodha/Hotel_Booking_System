<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "hotelbooking";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbName);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    // Taking all values from the form data(input)
    $first_name =  $_POST['firstName'];
    $last_name = $_POST['lastName'];
    $NIC =  $_POST['NIC'];
    $dateOfBirth = $_POST['DOB'];
    $contactNumber = $_POST['contactNumber'];
    $email =  $_POST['email'];
    $passWord = hash('sha256', $_POST['password']);
    
    // Performing insert query execution
    
    $sql = "INSERT INTO customer (FirstName, LastName, NIC, DateOFBirth, ContactNumber, Email, Password) VALUES 
            ('$first_name', '$last_name','$NIC','$dateOfBirth','$contactNumber', '$email', '$passWord')";
    
    if(mysqli_query($conn, $sql)){
        echo "Data stored in the database successfully.";

        
    } else{
        echo "Error!". mysqli_error($conn);
    }
    
    // Close connection
    mysqli_close($conn);

?>