<?php
session_start();

if(session_destroy()){
    header('location:../FrontEnd/LoginPage.php');
    exit();
}

