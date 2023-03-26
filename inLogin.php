<?php

  function selectData($Email) {

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
    
    $sql = "SELECT Password FROM customer WHERE Email ='$Email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
      // output data of each row
      $row = $result->fetch_assoc();
      $conn->close();   
        
      return $row['Password'];

    }
    else {
      echo "You have to register first.";
    }
   
  }

  $Email = $_POST['email'];

  if (isset($_POST['email']) && isset($_POST['password'])){
    
    $hashedPassword = hash('sha256', $_POST['password']);
    
    if($hashedPassword == selectData($_POST['email'])) {
      echo "Correct.";
    }
    else {
      echo "Please check your email and password.";
    }

  }

?>