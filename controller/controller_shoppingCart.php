<?php
    session_start();
    require_once('../model/model_shoppingCart.php');
        //Solo se da acceso si hay un usuario logeado.
    if (!isset($_SESSION['login_user'])){
        header("location: ../controller/controller_login.php");
    }
    
    if(isset($_SESSION['cart'])) {
        $products = $_SESSION['cart'];
    }

    if (isset($_SESSION['productCounter'])) {
        $counter = $_SESSION['productCounter'];
    }

    if (isset($_SESSION['totalPrice'])) {
        $totalPrice = $_SESSION['totalPrice'];
    }

    require('../view/view_shoppingCart.php');

    ?>



