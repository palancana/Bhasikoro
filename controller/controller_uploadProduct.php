<?php
    session_start();

    require_once('../model/model_uploadProduct.php');
        //Solo se da acceso si hay un admin logeado.
    if (isset($_SESSION['login_admin'])) {
        $admin = $_SESSION['login_admin'];
    
    $category = getCategoryAdmin();
    $imageName = "";
    $msg = "";
        
     if (isset($_POST['submit'])) {
         
         ///tdiw/username/public_html/img/Product/
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
                $msg = "File is not an image."; 
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            $uploadOk = 0;
            $msg = "Image not uploaded, a file with the same name already exists."; 
        }
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 5000000) {
            $msg = "Sorry, your file is too large."; 
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            $msg = "Sorry, only JPG, JPEG, PNG and GIF files are allowed."; 
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
         
        if ($uploadOk == 0) {
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                $msg = "File and product uploaded.";
            } else {
                $msg = "Sorry, there was an error uploading the file."; 
            }
        }
        
         
        
         
         
         //Data upload
         $brand = $_POST['brand'];
         $model = $_POST['model'];
         $category = $_POST['category_id'];
         $description = $_POST['description'];
         $price = $_POST['price'];
        
         uploadProductInfo ($brand, $model, $category, $description, $price, $imageName);
             
             

    
    
        }

        
        
    require('../view/view_uploadProduct.php');
        
    } else {
        header("location:../index.php");
    }



?>



