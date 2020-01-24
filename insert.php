<?php
    error_reporting(E_ALL^E_WARNING);	
    require_once 'conn.php';

if(isset($_POST['submit'])){
    $fname      = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname      = mysqli_real_escape_string($conn, $_POST['lname']);
    $email      = mysqli_real_escape_string($conn, $_POST['email']);
    $phone      = mysqli_real_escape_string($conn, $_POST['phone']);
    $idnumber   = mysqli_real_escape_string($conn, $_POST['idnumber']);
    $password   = mysqli_real_escape_string($conn, $_POST['password']);
    $password2  = mysqli_real_escape_string($conn, $_POST['password2']);
    $country    = mysqli_real_escape_string ($conn, $_POST['country']);

  
    if (empty($fname)|| empty($lname)|| empty($email)|| empty($phone)|| empty($idnumber)|| empty($password)|| 
        empty($password2)|| empty($country)){
            echo "fill all spaces!";
            die();
        }elseif(!preg_match('/^[A-z]+$/', $fname)){
            echo "Your Name must in letters and start with a capital letter!";
            die();
        }elseif ($password!== $password2){
            echo "not a match!";    
            die();
        }elseif (strlen($password <=8)){
            echo "should have minimum of eight characters.";
            die();
        }
        // hashpassword
        $hashedpaswordindb = md5($password);
        $sql = "INSERT INTO `bluebell`(`firstname`,`lastname`,`email`,`phonenumber`,`Idnumber`,`password`,`country`)
        VALUES ('$fname', '$lname', '$email','$phone','$idnumber','$hashedpaswordindb','$country')";

        if(mysqli_query($conn, $sql)){
        echo "Records inserted successfully.";
    } else{
        echo  "record not inserted";
        echo mysqli_error($conn);
    }
}