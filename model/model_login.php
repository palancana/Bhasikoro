<?php

function retrieveLogin ($username) {
            // Establishing Connection with Server by passing server_name, user_id and password as a parameter
            require_once('../resources/connectDB.php');
            $conn = connectDB();
            // Check connection
            if (mysqli_connect_errno())
              {
                $msg = "Failed to connect to MySQL";
              }

            // SQL query to fetch information of registerd users and finds user match.
            $sql = "SELECT * FROM User WHERE username='$username'";

            return $result = mysqli_query($conn, $sql);   
    
            mysqli_close($conn); // Closing Connection

}

function retrieveAdmin(){            // Establishing Connection with Server by passing server_name, user_id and password as a parameter
            require_once('../resources/connectDB.php');
            $conn = connectDB();
            // Check connection
            if (mysqli_connect_errno())
              {
            $msg = "Failed to connect to MySQL";
              }

            // Define $username and $password
            $username=$_POST['username'];
            $password=$_POST['password'];

            // To protect MySQL injection for Security purpose
            $username = filter_var($username, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $password = filter_var($password, FILTER_SANITIZE_FULL_SPECIAL_CHARS);


            // SQL query to fetch information of registerd users and finds user match.
            $sqlAdmin = "SELECT * FROM Admin WHERE username='$username' AND password='$password'";
            
            return $resultAdmin = mysqli_query($conn, $sqlAdmin);
    
            mysqli_close($conn); // Closing Connection

    
}
?>