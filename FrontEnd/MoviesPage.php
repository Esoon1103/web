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
              user-select: none;
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
            
            .cards{
                display:flex;
                justify-content: space-around;
                flex-wrap: wrap;
                margin-top:5%;
            }
            
            .card{
                width:23%;
                text-align:center;
                padding:1.5em;
                margin-bottom: 2em;
            }
            .images{
                width:80%;
                height:80%;
                display: block;
                margin-left: auto;
                margin-right: auto;
                margin-bottom: 5%;
            }
            
            *{
                padding:0;
                margin:0;
                box-sizing:border-box;
            }
            .title{
                text-align:center;
                font-size: 1.3rem;
            }
            
            
        </style>
        
        <!--Navigation Bar-->
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
            <img src="../image/movielogo.png" width="40" height="40";/>
            <a class="navbar-brand" href="../FrontEnd/HomePage.php">N.E.S Cinema</a>
            
            <div class="container-fluid">
                <p></p>
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
    <body>
        
        
        <!--Greeting-->
        <div style="width:100%; height:400px; margin-top: 3%">
            <img style="width:100%; height:400px;" src="https://www.doditsolutions.com/wp-content/uploads/movie-theater-revival-popcorn-1.jpg">
        </div>
        
        <?php
        if(isset($_SESSION['userLogged'])){ ?>
            <div id="cards" class="cards">
            
            </div>
        <?php
        }else{?>
            <div id="cardsNoUser" class="cards">
            
            </div>
        <?php
        $_SESSION['noUser'] = true;
        }
        
        ?>
        
        
         
        <script src="../FrontEnd/scriptNoUser.js"></script>
        <script src="../FrontEnd/script.js"></script>
       
        <footer style="margin-top: 5%;">
            <p style="text-align:center; font-size: 12px">   
                Proudly created by NG E SOON | 
                <a href="mailto:p20012522@student.newinti.edu.my">p20012522@student.newinti.edu.my</a>
            </p>
        </footer>
    </body>
</html>