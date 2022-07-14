<?php
session_start();
    
include "../BackEnd/db.php";



if($_SERVER['REQUEST_METHOD'] === "POST")
{
    $movieID = $_SESSION['movieID'];
    $movieDetails = "SELECT * FROM movies WHERE id='$movieID'";
    
    $result = mysqli_query($conn, $movieDetails);
    $row = mysqli_fetch_assoc($result);
    
    if(mysqli_num_rows($result) > 0){
        $_SESSION['moviesBooked'] = "Movies Booked";
        
        $name = $row['name'];
        $email = $_SESSION['userEmail'];
        $time = $row['time'];
        $date = $row['date'];
        $location = $row['location'];
        $ticketAdult = $_SESSION['ticketAdult'];
        $ticketKid = $_SESSION['ticketKid'];
        $_SESSION['movieBuy'] = "Success";
        
        $query = "INSERT INTO `booking` (`name`, `email`, `time`, `date`, `location`, `adultTicket`, `kidTicket`) "
                . "VALUES ('$name', '$email', '$time', '$date', '$location', '$ticketAdult','$ticketKid')";
        $run = mysqli_query($conn, $query) or die(mysqli_error());

        header("Location: ../FrontEnd/TicketsOverviewPage.php");
        exit();
    }else{
        echo '<script>alert('.$id.')</script>';

    }
}
