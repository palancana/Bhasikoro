<?php
        
    require_once('../resources/connectDB.php');   
    
    function getUserId ($user) {
        $conn = connectDB();
        // Check connection
        if (mysqli_connect_errno())
          {
            $msg = "Failed to connect to MySQL";
        }
        
            $sql = "SELECT user_id FROM User WHERE username = '$user'";
        
            $user_id = mysqli_query($conn, $sql);
            
            return $user_id;
            mysqli_close($conn);
    }
    
    function createSale ($user_id, $totalPrice) {
        $conn = connectDB();

        // Check connection
        if (mysqli_connect_errno())
          {
            $msg = "Failed to connect to MySQL";
          }
            
            $create = "INSERT INTO Sale (user_id, total) VALUES ('$user_id', '$totalPrice')";
            mysqli_query($conn, $create);
            $get = "SELECT MAX(sale_id) FROM Sale";    
            $result = mysqli_query($conn, $get);
            
            return $result;
            mysqli_close($conn);
        
    }



    function insertSale($id, $sale_id, $price, $quantity, $totalPrice) {
        $conn = connectDB();
        // Check connection
        if (mysqli_connect_errno())
          {
            $msg = "Failed to connect to MySQL";
          }        
        
            $sql = "INSERT INTO Product_Sales (product_id, sale_id, unitary_price, quantity, total_price) VALUES ('$id', '$sale_id', '$price', '$quantity', '$totalPrice')";

        
        
            if (mysqli_query($conn, $sql)) {
                header('../view/view_checkOut.php');
            } else {
                header('../view/view_checkOutFail.php');
            }

            mysqli_close($conn);
    }
    
?>