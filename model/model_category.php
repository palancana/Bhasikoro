<?php


function getProducts($category) {
   
    require_once('../resources/connectDB.php');
    $conn = connectDB();
    // Check connection
    if (mysqli_connect_errno())
      {
      $msg = "Failed to connect to MySQL";
      }
    
    $sql = "SELECT product_id, category_id, brand, model, price, image, description, visibility FROM Product WHERE category_id='$category'";
    
    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);
    
    return $result;

}

function getImage($product_id) {
    $conn = connectDB();
    // Check connection
    if (mysqli_connect_errno())
      {
      $msg = "Failed to connect to MySQL";
      }
    
    $sql = "SELECT image FROM Product WHERE product_id = '$product_id'";
    
    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);
    
    return $result;
}

function deleteProduct($product_id) {
    
    require_once('../resources/connectDB.php');
    $conn = connectDB();
    // Check connection
    if (mysqli_connect_errno())
      {
      $msg = "Failed to connect to MySQL";
      }
    
    $sql = "DELETE FROM Product WHERE product_id = '$product_id'";
    
    $delete = mysqli_query($conn, $sql);

    mysqli_close($conn);
    
}


?>



