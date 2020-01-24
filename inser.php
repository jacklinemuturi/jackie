<?php

require_once 'conn.php';

if(isset($_POST['submit'])){
    $name   = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $subject  = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    if (empty($name) || empty($email) || empty($subject) || empty($message)){
        echo "fill all spaces!";
        die();
    } 
    $sql = "INSERT INTO `contact`(`name`,`email`,`subject`,`message`)
            VALUES ('$name', '$email', '$subject','$message')";
       
        
       if(mysqli_query($conn, $sql)){
        echo "Records inserted successfully.";
    } else{
       echo  "record not inserted";
    //    echo mysqli_error($conn);
    }
}

        