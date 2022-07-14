<?php
session_start();
include "../BackEnd/db.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $password = $_POST['psw'];
    
    $sql = "SELECT * FROM admin WHERE name = '$name' AND password = '$password'";
    
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result) > 0){
        if($password == $row['password']){
            $_SESSION['loginSuccess'] = "true";
            header("Location: ../admin/index.php");
            exit();
        }
    }else{
        $_SESSION['loginFailed'] = "true";
        header("Location: ../admin/login.php");
        exit();
    }
}

