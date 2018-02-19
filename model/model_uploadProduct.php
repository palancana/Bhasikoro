<?php

function getCategoryAdmin() {
   
    require_once('../resources/connectDB.php');
    $conn = connectDB();
    
    // Check connection
    if (mysqli_connect_errno())
      {
      $msg = "Failed to connect to MySQL";
      }
  
    $sql = "SELECT category_id, name FROM Category";
    

    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);
    
    return $result;

}


function uploadProductInfo ($brand, $model, $category, $description, $price, $imageName) {

    require_once('../resources/connectDB.php');
    $conn = connectDB();
    // Check connection
    if (mysqli_connect_errno())
      {
      $msg = "Failed to connect to MySQL";
      }
      

    //Query to be performed
    $sql = "INSERT INTO Product (brand, model, category_id, description, price, image) VALUES ('$brand', '$model', '$category', '$description', '$price', '$imageName')";
    
    
    mysqli_query($conn, $sql);
    
    mysqli_close($conn);
}

?>