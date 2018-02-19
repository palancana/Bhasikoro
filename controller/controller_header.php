<?php
    require_once('../model/model_header.php');

    if(isset($_SESSION['productCounter'])) {
        $cartCounter = $_SESSION['productCounter'];
    }

    require('../view/view_header.php');
?>