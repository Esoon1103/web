<?php
session_start();
include "../BackEnd/db.php";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <style>
            html {
                position: relative;
                min-height: 100%;
            }
            body {
                /* Margin bottom by footer height */
                margin-bottom: 60px;
                font-family: 'Raleway', sans-serif;
            }
            .footer {
                position: absolute;
                bottom: 0;
                width: 100%;
                /* Set the fixed height of the footer here */
                height: 60px;
                line-height: 60px; /* Vertically center the text there */
                background-color: #f5f5f5;
            }


            /* Custom page CSS
            -------------------------------------------------- */
            /* Not required for template or sticky footer method. */

            body > .container {
                padding: 20px 15px 0;
            }

            .footer > .container {
                padding-right: 15px;
                padding-left: 15px;
            }

            code {
                font-size: 80%;
            }

            /* The hero image */
            .hero-image {
                /* The image used */
                background-image: url("../images/wallpapper.jpg");

                /* Set a specific height */
                height: 350px;
                /* Position and center the image to scale nicely on all screens */
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                position: relative;
            }

            /* Place text in the middle of the image */
            .hero-text {
                text-align: center;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                color: white;
            }
            /* width */
            ::-webkit-scrollbar {
              width: 10px;
            }

            /* Track */
            ::-webkit-scrollbar-track {
              background: #f1f1f1; 
            }

            /* Handle */
            ::-webkit-scrollbar-thumb {
              background: #888; 
              border-radius: 50px;
            }

            /* Handle on hover */
            ::-webkit-scrollbar-thumb:hover {
              background: #555; 
              border-radius: 50px;
            }
            
            * {box-sizing: border-box}
            .mySlides1, .mySlides2 {display: none}
            img {vertical-align: middle;}

            /* Slideshow container */
            .slideshow-container {
              max-width: 1000px;
              position: relative;
              margin: auto;
            }

            /* Next & previous buttons */
            .prev, .next {
              cursor: pointer;
              position: absolute;
              top: 50%;
              width: auto;
              padding: 16px;
              margin-top: -22px;
              color: white;
              font-weight: bold;
              font-size: 18px;
              transition: 0.6s ease;
              border-radius: 0 3px 3px 0;
            }

            /* Position the "next button" to the right */
            .next {
              right: 0;
              border-radius: 3px 0 0 3px;
            }

            /* On hover, add a grey background color */
            .prev:hover, .next:hover {
              background-color: #f1f1f1;
              color: black;
            }
            
            .zoom {
                
                transition: transform .4s; /* Animation */
                width: 200px;
                height: 300px;
                margin: 0 auto;
            }

            .zoom:hover {
              transform: scale(1.2); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
            }
            
        </style>
        
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">Account</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../admin/admin_logout.php">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </head>
    <body>
        <?php
        if(isset($_SESSION['loginSuccess'])){?>
            <script>
                alert("Welcome to the Admin Panel");
            </script>
        <?php
            unset($_SESSION['loginSuccess']);
        }
        ?>
        
            <?php
        if(isset($_SESSION['deleteSuccess'])){?>
            <script>
                alert("Data Successfully Deleted");
            </script>
        <?php
            unset($_SESSION['deleteSuccess']);
        }
        ?>
            
            
        <div class="card-body" style="width:100%; margin-top: 5%;">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="card-title float-left">Table of Movies</h5>
                    <a href="../admin/admin_create.php" class="btn btn-success float-right mb-3"><i class="fa fa-plus"></i> Add New</a>
                </div>
            </div>
            <table class="table table-bordered table-striped">
                <form action="../admin/handle_delete.php" method="post">
                <thead>
                    <tr align="center">
                        <th>Movie Name</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Length</th>
                        <th>Time</th>
                        <th>Date</th>
                        <th>Location</th>
                        <th>Adult Ticket Price</th>
                        <th>Kid Ticket Price</th>
                        <th style="width: 20%;">Actions</th>
                    </tr>
                </thead>
                <?php

                $sql = "SELECT * FROM movies";
                $result = $conn->query($sql);
                $count = 0;

                if ($result->num_rows > 0) {
                  // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo'
                            <tbody>
                              <tr>
                                <td>'.$row["name"].'</td>
                                <td align="center"><img style="height:50%; width:70%;" src="../image/'.$row["image"].'"></td>
                                <td><p style="font-size: 13px;">'.$row["description"].'</p></td>
                                <td align="center">'.$row["length"].'</td>
                                <td align="center">'.$row["time"].'</td>
                                <td align="center">'.$row["date"].'</td>
                                <td align="center">'.$row["location"].'</td>
                                <td align="center">'.$row["priceAdult"].'</td>
                                <td align="center">'.$row["priceKid"].'</td>
                                <td align="center">
                                    <a type="submit" href="../admin/admin_edit.php?id='.$row['id'].'" class="btn btn-primary">Edit</a>
                                    <a type="submit" href="../admin/handle_delete.php?id='.$row['id'].'" class="btn btn-danger">Delete</a>
                                </td>
                              </tr>
                            ';
                    }        
                }?>
                </tbody>
                </form>
            </table>
        </div>
      
    </body>
</html>
