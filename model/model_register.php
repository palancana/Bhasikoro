<?php


function registerUser($username, $name, $password, $email, $phone, $address, $city, $postalcode, $card) {
        
    require_once('../resources/connectDB.php');
    $conn = connectDB();
    // Check connection
    if (mysqli_connect_errno())
      {
      $msg = "Failed to connect to MySQL";
      }
      
    //Query to be performed
    $sql = "INSERT INTO User (username, name, password, email, phone, address, city, postalcode, card)
    VALUES ('$username', '$name', '$password', '$email', '$phone', '$address', '$city', '$postalcode', '$card')";

    
    
    if (mysqli_query($conn, $sql)) {
        header("location:../index.php");
    } else {
        $msg = "Sorry, something bad happened. Try again.";
    }

    mysqli_close($conn);
}

?>