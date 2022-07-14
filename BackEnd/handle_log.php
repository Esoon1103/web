<?php
include "../BackEnd/db.php";
session_start();

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE email ='$email' AND password ='$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    
    $data = "SELECT `email` FROM user WHERE `email` = '$email'";
    $select = mysqli_query($conn, $data) or exit(mysqli_error($conn));

    if(mysqli_num_rows($result) > 0){
        if($password == $row['password']){ //if the password is equal to the database password
            $_SESSION['user'] = $row['username'];
            $_SESSION['userEmail'] = $row['email'];
            $_SESSION['userPsw'] = $row['password'];
            $_SESSION['id'] = $row['id'];
            
            $_SESSION['userLogged'] = "true";
            $_SESSION['successLog'] = "Success Log In";
            header("Location: ../FrontEnd/HomePage.php");
            exit();
        }
    }else if(mysqli_num_rows($select) == 0 ){
        
        $_SESSION['fail'] = "Fail";
        header("Location: ../FrontEnd/LoginPage.php");
        exit();
    }else{
        $_SESSION['wrongCredential'] = "wrong Credential";
        header("Location: ../FrontEnd/LoginPage.php");
        exit();
    }
}
?>
   




