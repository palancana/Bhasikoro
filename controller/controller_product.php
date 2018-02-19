<?php
    session_start();
    require_once('../model/model_product.php');
    

    $selectedProduct = $_GET['product_id'];
    $product = getProduct($selectedProduct);
    
    if (isset($_SESSION['login_user'])) {
        $user = $_SESSION['login_user'];
    }
    

    if (isset($_POST['product_id'])) {
        $product_id = $_POST['product_id'];
        $model = $_POST['model'];
        $brand = $_POST['brand'];
        $price = $_POST['price'];
        $image = $_POST['image'];
        
        $productToCart['product_id'] = $product_id;
        $productToCart['model'] = $model;
        $productToCart['brand'] = $brand;
        $productToCart['price'] = $price;
        $productToCart['image'] = $image;
        
        $_SESSION['totalPrice'] = $_SESSION['totalPrice'] + $productToCart['price'];
        $_SESSION['productCounter'] = $_SESSION['productCounter'] + 1;
        $_SESSION['cart'][$_SESSION['productCounter']] = $productToCart;
        
    }

    require('../view/view_product.php');
?>