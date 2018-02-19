<?php
    session_start();
    require_once('../model/model_category.php');
    
    if (isset($_GET['category_id'])) {
        $selectedCategory = $_GET['category_id'];
    } else {
        if(isset($_POST['category_id'])) {
        $selectedCategory = $_POST['category_id'];
        } else {
        $selectedCategory = '1';
        }
    }
    
    if (isset($_SESSION['login_admin'])) {
        $admin = true;
    } else {
        $admin = false;
    }

    $product = getProducts($selectedCategory);

    if(isset($_POST['deleteProduct'])) {
        $imageToDelete = getImage($_POST['product_id']);
        
        $imageToDelete = $imageToDelete->fetch_assoc();
        $imageToDelete = $imageToDelete['image'];
        
        deleteProduct($_POST['product_id']);
        unlink("/tdiw/username/public_html/img/Product/$imageToDelete");
        header('Location: ../index.php');

    }

    if(isset($_POST['updateProduct'])) {
        
        $_SESSION['product_id'] = $_POST['product_id'];

        header('Location: ../controller/controller_productData.php');
    }
    require('../view/view_category.php');
?>