<?php
    session_start();

    require_once('../model/model_checkOut.php');
        //Solo se da acceso si hay un usuario logeado.
    if (isset($_SESSION['login_user'])) {
        $user = $_SESSION['login_user'];
    }

    if (isset($_SESSION['totalPrice'])) {
        $totalPrice = $_SESSION['totalPrice'];
    }


        $user_id = getUserId ($user);
        $user_id = $user_id->fetch_assoc();
        $user_id = $user_id['user_id'];

        $sale_id = createSale ($user_id, $totalPrice);
        $sale_id = $sale_id->fetch_assoc();
        $sale_id = $sale_id['MAX(sale_id)'];

    if(isset($_SESSION['cart'])) {
        
    
        foreach ($_SESSION['cart'] as $row) {

            $id = $row['product_id'];
            $price = $row['price'];
            
            insertSale($id, $sale_id, $price, 1, $price);
                
        }
    }

   /* $_SESSION['cart'] = [];
    $_SESSION['totalPrice'] = 0;
    $_Session*/
    session_unset();
    $_SESSION['login_user'] = $user;
    $_SESSION['totalPrice'] = 0;
    $_SESSION['productCounter'] = 0;

    require('../view/view_checkOut.php');
?>



