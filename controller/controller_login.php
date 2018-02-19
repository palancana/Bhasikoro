<?php
    session_start();

    require_once('../model/model_login.php');

    if (isset($_POST['submit'])) {

        if (empty($_POST['username']) || empty($_POST['password'])) {
            $msg = "Username or password is invalid."; 
        } else {
            session_unset();
                        // Define $username and $password
            $username=$_POST['username'];
            $password=$_POST['password'];
        
            // To protect MySQL injection for Security purpose
            $username = filter_var($username, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $password = filter_var($password, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            
            $user = retrieveLogin($username);
            $admin = retrieveAdmin();
            
            $rowUser = $user->fetch_assoc();
            $rowAdmin = $admin->fetch_assoc();            
            
            if (mysqli_num_rows($user) > 0) {
                if (password_verify("$password", $rowUser['password'])) {

                    
                    $_SESSION['login_user']=$username; // Initializing Session
                    $_SESSION['productCounter'] = 0;
                    $_SESSION['totalPrice'] = 0;
                    header("location: ../index.php"); // Redirecting To Other Page
                    


                } else {
                    $msg = "Password is invalid.";
                }


        } else if (mysqli_num_rows($admin) > 0) {

                $_SESSION['login_admin']=$username;
                $_SESSION['product_id'] = 1;
                header ("location: ../index.php");

        } else {
                
                $msg = "Password is invalid.";
            }
        
    }
    }

    //$product1 = getProduct("bike1.jpg");
    require('../view/view_login.php');
?>