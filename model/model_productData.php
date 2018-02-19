<?php

//session_start();

function getCategoryUpload() {   
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

function getProductData() {
   
    require_once('../resources/connectDB.php');
    $conn = connectDB();
    // Check connection
    if (mysqli_connect_errno())
      {
      $msg = "Failed to connect to MySQL";
      }
    
    $currentProduct = $_SESSION['product_id'];
    //Query to be performed
    $sql = "SELECT * FROM Product WHERE product_id = '$currentProduct'";
    $result = mysqli_query($conn, $sql);
    $result = $result->fetch_assoc();
    mysqli_close($conn);
    return $result;
}

function updateProductData($brand, $model, $category, $description, $price, $imageName, $product_id) {
    require_once('../resources/connectDB.php');
    $conn = connectDB();
    // Check connection
    if (mysqli_connect_errno())
      {
      $msg = "Failed to connect to MySQL";
      }
      

    //Query to be performed    
    $sql = "UPDATE Product SET brand='$brand', model='$model', category_id='$category', description='$description', price='$price', image='$imageName' WHERE product_id='$product_id'";
    
    
    mysqli_query($conn, $sql);
    
    mysqli_close($conn);
}

?>