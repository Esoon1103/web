<?php
session_start();

if(session_destroy()){
    unset($_SESSION['logout']);
    unset($_SESSION['userLogged']);
    header('location:../FrontEnd/LoginPage.php');
    exit();
}


