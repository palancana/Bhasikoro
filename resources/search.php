<?php

    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "username";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $productModel = $_POST['search'];

    $sql= "SELECT * FROM Product WHERE model = '$productModel'";
    
    $result = mysqli_query($conn, $sql);
    $row = $result->fetch_assoc();

    $product_id = $row['product_id'];
    
    if (mysqli_num_rows($result) > 0) {
        header("location: ../controller/controller_product.php?product_id=$product_id"); // Redirecting To Other Page

    } else {
        //Not found
        header("location:../index.php");
    }

?>