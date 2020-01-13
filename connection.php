<?php  global $conn;
        $servername = "*************";
        $username = "*************";
        $password = "*************";
        $db="*************";
        $conn = mysqli_connect($servername,$username, $password, $db);
        if ( $conn->connect_error) {
            die("Connection failed: " .$conn->connect_error);
                   }
       
?>
