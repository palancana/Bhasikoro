<?php

function updateUser($username, $name, $password, $email, $phone, $address, $city, $postalcode, $card){
    require_once('../resources/connectDB.php');
    $conn = connectDB();
    // Check connection
    if (mysqli_connect_errno())
      {
       $msg = "failed to connect";
      }
      
    //Query to be performed
    $sql = "UPDATE User SET name='$name', password='$password', email='$email', phone='$phone', address='$address', city='$city', postalcode='$postalcode', card='$card' WHERE username='$username'";
    
    
    if (mysqli_query($conn, $sql)) {
        header("location:../index.php");
    } else {
        $msg = "Sorry, something bad happened. Try again.";
    }

    mysqli_close($conn);
}

function getUserData() {
   
    require_once('../resources/connectDB.php');
    $conn = connectDB();
    // Check connection
    if (mysqli_connect_errno())
      {
      $msg = "Failed to connect to MySQL";
      }
    
    $currentUser = $_SESSION['login_user'];
    //Query to be performed
    $sql = "SELECT * FROM User WHERE username = '$currentUser'";
    $result = mysqli_query($conn, $sql);
    $result = $result->fetch_assoc();
    mysqli_close($conn);
    return $result;
}

?>