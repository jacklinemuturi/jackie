<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "transport";
    
    $conn = mysqli_connect($servername, $username, '', $databaseName);

    if(!$conn){
        echo"connection failed:";
    }else{
        // echo "fully connected";
    }

?>