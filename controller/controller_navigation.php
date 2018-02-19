<?php

    require_once('../model/model_navigation.php');
    $category = getCategories();
    
    if (isset($_SESSION['login_admin'])) {
        $adminSession = $_SESSION['login_admin'];
    }

    if (isset($_SESSION['login_user'])) {
        $userSession = $_SESSION['login_user'];
    }
    
    require('../view/view_navigation.php');
?>