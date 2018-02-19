<?php 
session_start();

$_SESSION['productCounter'] = 0;

// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 

?>