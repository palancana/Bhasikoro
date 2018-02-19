<?php
    session_start();
    require_once('../model/model_register.php');
    $msg = "";

    if (isset($_POST['submit'])) {
        //Get values
        $username = $_POST['username'];
        $name = $_POST['name'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $postalcode = $_POST['postalcode'];
        $card = $_POST['card'];
        
        //Sanitaze values
        $username = filter_var($username, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $name = filter_var($name, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $password = filter_var($password, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email = filter_var($email, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $phone = filter_var($phone, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $address = filter_var($address, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $city = filter_var($city, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $postalcode = filter_var($postalcode, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $card = filter_var($card, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        
        registerUser($username, $name, $password, $email, $phone, $address, $city, $postalcode, $card);
    }

    

    require('../view/view_register.php');
?>