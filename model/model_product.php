<?php

function getProduct($product) {
   
    require_once('../resources/connectDB.php');
    $con= connectDB();
    // Check connection
    if (mysqli_connect_errno())
      {
      $msg = "Failed to connect to MySQL";
      }
  
    $sql = "SELECT product_id, image, model, price, brand, description FROM Product WHERE product_id = '$product'";

    $result = mysqli_query($con, $sql);

    mysqli_close($con);
    
    return $result;

    
}

?>