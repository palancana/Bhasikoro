<?php

function getCategories() {
   
    require_once('../resources/connectDB.php');
    $con = connectDB();
    
    // Check connection
    if (mysqli_connect_errno())
      {
      $msg = "Failed to connect to MySQL";
      }
  
    $sql = "SELECT category_id, name FROM Category";
    
    $result = mysqli_query($con, $sql);

    mysqli_close($con);
    
    return $result;

}

?>