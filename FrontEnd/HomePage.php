<?php
session_start();

?>

<html>
    <!-- Favicon Icon -->
    <link rel="icon" href="../image/movielogo32.ico">
    
    <head>   
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        
        
        <style>
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
        
        <!--Navigation Bar-->
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
            <img src="../image/movielogo.png" width="40" height="40"/>
            <a class="navbar-brand" href="../FrontEnd/HomePage.php">N.E.S Cinema</a>
            <div class="container-fluid">
                <p> </p>
                <ul class="navbar-nav">
                    
                    <li class="nav-item">
                      <a class="nav-link" href="../FrontEnd/MoviesPage.php">Movies</a>
                    </li>
                    
                    <li class="nav-item">
                      <?php
                        if(isset($_SESSION['userLogged'])){
                            echo '<a class="nav-link" href="../FrontEnd/TicketsOverviewPage.php">Tickets Overview</a>';
                        }
                        ?>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">Account</a>
                        <ul class="dropdown-menu">
                           <?php
                            if(isset($_SESSION['userLogged'])){
                                echo '<li><a class="dropdown-item" href="../FrontEnd/AccountPage.php">Settings</a></li>';
                                echo '<li><a class="dropdown-item" href="../BackEnd/logout.php">Log Out</a></li>';
                            }else{
                                echo '<li><a class="dropdown-item" href="../FrontEnd/LoginPage.php">Log In</a></li>';
                            }
                            ?>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    
      <title>NES Cinema</title>
        
    
    </head>
        <body style="background-color:whitesmoke;">
        <div style="height:50px"></div>
        
        <?php
        if(isset($_SESSION['successLog'])){
            ?>
            <script>
            Swal.fire({
            icon: 'success',
            title: 'Welcome Back',
            text: 'Hello <?php echo $_SESSION['user'];?> '
            });
            </script>
        <?php
            unset($_SESSION['successLog']);
        }
        ?>
        
        
        
        <!--Announcements-->
        <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel" style="width:auto; height: auto; box-shadow: 5px 10px 8px #888888;">

          <!-- Indicators/dots -->
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
          </div>

          <!-- The slideshow/carousel -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img style="width:100%; height:450px;" src="https://images.unsplash.com/photo-1626814026160-2237a95fc5a0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="Classic" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img style="width:100%; height:450px;"src="https://cdn.pixabay.com/photo/2018/08/14/15/32/coming-3605857_960_720.jpg" alt="ComingSoon" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img style="width:100%; height:450px;"src="https://cdn.pixabay.com/photo/2017/11/24/10/43/ticket-2974645_960_720.jpg" alt="Ticket" class="d-block w-100">
            </div>
          </div>

          <!-- Left and right controls/icons -->
          <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>
        
        <div style="background-color:whitesmoke">
            <!--Movie Showtime-->
            <h2 style="text-align: center; margin-top: 5%;">Movie Showtime</h2>

            <div style="width:100%; height:400px; margin-top:5%;">
                <table style="width:100%; height:100px;" >
                    <?php
                    include "../BackEnd/db.php";
                    $sql = "SELECT image FROM movies";
                    $result = $conn->query($sql);
                    $count = 0;
                    $max = false;

                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                         
                          if($count == 0){
                                echo '<tr align="center" style="padding:5px;">
                                        <td>
                                            <img class="zoom" style="box-shadow: 5px 10px 8px #888888; border-radius: 2%;" height="300px" src="../image/'.$row['image'].'" >
                                        </td>';
                             
                              
                              $count = $count + 1;
                              
                          }else if($count % 6 == 0){
                              echo '</tr><tr align="center" style="padding:5px;">';
                              $count = 0;
                              $count = $count + 1;
                              $max = true;
                              break;
                          }else{
                                  echo '<td>
                                        <img class="zoom" style="box-shadow: 5px 10px 8px #888888; border-radius: 2%;"  height="300px" src="../image/'.$row['image'].'" >
                                    </td>';
                              
                             
                              $count = $count + 1;
                          }
                          if($max == true){
                              break;
                          }
                          
                      }
                    }
                   ?> 
                    
                </table>
            </div>
        </div>
            
  
        <p align="center">
            
        <a style=" padding:10px" href="MoviesPage.php"><button class="btn btn-outline-primary">More Details</button></a>
        </p>
        <footer style="margin-top: 5%;">
            <p style="text-align:center; font-size: 12px">   
                Proudly created by NG E SOON | 
                <a href="mailto:p20012522@student.newinti.edu.my">p20012522@student.newinti.edu.my</a>
            </p>
            
        </footer> 
        
    </body>
</html>
