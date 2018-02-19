<?php

    
    function connectDB(){
        
        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "username";
        
        // Create connection
        //$conn = new mysqli($servername, $username, $password, $dbname);
        $con = mysqli_connect($servername, $username, $password, $dbname);
        
          // Check connection
          if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
          }
        $con->set_charset("utf8");  

        return $con;    
    }
?>



