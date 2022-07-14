<?php
include "../BackEnd/db.php";
session_start();

if($_SERVER['REQUEST_METHOD'] === "POST")
{
    $uName = $_POST['username'];
    $email = $_POST['email'];
    $psw = $_POST['psw'];
    
    $query = "INSERT INTO `user` (`username`, `email`, `password`) VALUES ('$uName', '$email', '$psw')";

    $sql = "SELECT * FROM user WHERE email ='$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    
    if(mysqli_num_rows($result) > 0){
        $_SESSION['duplicateEmail'] = "Email Duplicated";
        
        header("Location: ../FrontEnd/RegisterPage.php");
        exit();
    }else{
        $run = mysqli_query($conn, $query) or die(mysqli_error());
        
        $_SESSION['successReg'] = "Success Register";
        
        header("Location: ../FrontEnd/LoginPage.php");
        exit();
    }
}
