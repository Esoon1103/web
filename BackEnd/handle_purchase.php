<?php
include "db.php";
session_start();

if($_SERVER['REQUEST_METHOD'] === "POST"){
    
    $ticketAdult = $_POST['ticketAdult'];
    $ticketKid = $_POST['ticketKid'];
    $total = "";
    $priceAdult = "";
    $priceKid = "";
            
    $movieID = $_SESSION['movieID'];
    
    $sql = "SELECT priceAdult, priceKid FROM movies WHERE id ='$movieID'";
    
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    
    if(mysqli_num_rows($result) > 0){
        $total = ($ticketAdult * $row['priceAdult']) + ($ticketKid * $row['priceKid']);
        $_SESSION["ticketAdult"] = $ticketAdult;
        $_SESSION["ticketKid"] = $ticketKid;
        $_SESSION['totalPrice'] = $total;
        header("Location: ../FrontEnd/PaymentPage.php");
        exit();
    }
}

