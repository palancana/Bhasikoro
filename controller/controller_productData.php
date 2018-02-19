<?php
    session_start();

    if (isset($_SESSION['login_admin'])) {
        
    require_once('../model/model_productData.php');
    $productData = getProductData();
    $categoryUpload = getCategoryUpload();

    if (isset($_POST['update'])) {
    
        //image upload
        $target_dir = "/tdiw/username/public_html/img/Product/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $imageName = basename($_FILES["fileToUpload"]["name"]);
         
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                $uploadOk = 1;
            } else {
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 5000000) {
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            } else {
            }
        }
        
        //data upload
        $brand = $_POST['brand'];
        $model = $_POST['model'];
        $category = $_POST['category_id'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        
        updateProductData ($brand, $model, $category, $description, $price, $imageName, $_SESSION['product_id']);
        
        header("location: ../index.php");
        
        
    }

    if (isset($_POST['cancel'])) {
        header("location: ../index.php");
    }

    require('../view/view_productData.php');
    } else {
        header("location:../index.php");
    }
?>