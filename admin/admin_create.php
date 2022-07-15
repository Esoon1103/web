<?php
session_start();
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
       
        
        <?php if(isset($_SESSION['duplicateMovie'])){?>
        <script>
            alert("ERROR: Duplicate movie detected");
        </script>
        <?php }else{ ?> <?php
            unset($_SESSION['duplicateMovie']);
        } ?>
        
        <div style="width:auto; height:auto; margin-top: 5%;">
            <a href="../admin/index.php" style="background-color: #f1f1f1; color: black; text-decoration: none; display: inline-block; padding: 8px 16px;" >&laquo; Back</a>
        </div>
        
        
        <div class="card-body" style="width:100%; margin-top: 5%;">
            <label style="text-align:center; font-size:20px;">Add a New Movie</label>
            <table class="table table-bordered table-striped" align="center">
                <form action="../admin/handle_create.php" method="post" enctype="multipart/form-data">
                    <tr>
                        <td>
                            <label>Movie Name</label>
                            <input type="text" name="name" required>
                        </td>
                        <td>
                            <label>Movie Image</label>
                            <input type="file" name="img" accept="image/*" required>
                        </td>
                        <td>
                            <label>Movie Description</label>
                            <input type="text" name="description" required>
                        </td>
                        <td>
                            <label>Movie Length</label>
                            <input type="text" name="length" required >
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Movie Time</label>
                            <input type="time" name="time" required>
                        </td>
                        <td>
                            <label>Movie Date</label>
                            <input type="date" name="date" required>
                        </td>
                        <td>
                            <label>Movie Location</label>
                            <input type="text" name="location" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Ticket Price (Adult)</label>
                            <input type="number" min="10" name="adultTicket" required>
                            
                        </td>
                        <td>
                            <label>Ticket Price (Kid)</label>
                            <input type="number" min="10" name="kidTicket" required>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button type="submit" name="submit" class="btn btn-primary" style="font-size:18px;">Create</button>
                            </div>
                        </td>
                    </tr>
                    
                </form>
            </table>
        </div>
      
    </body>
</html>