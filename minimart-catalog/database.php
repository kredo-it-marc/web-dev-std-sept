<?php
    function dbConnect()
    {
        $server_name = "localhost";
        $username = "root"; //for both MAMP and XAMPP, it uses "root" for the username
        $password = "root"; //for MAMP, the password is 'root'. For XAMPP, there is no password so you place ""
        $db = "minimart_catalog";

        $conn = new mysqli($server_name, $username, $password, $db);

        if($conn->connect_error) //check if the connection is successful
        {
            die("Failed to connect to the database: ".$conn->connect_error);
        }
        else
        {
            // echo "Connection Successful";
            return $conn;
        }
    }
?>