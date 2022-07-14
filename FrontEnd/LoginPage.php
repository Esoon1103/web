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
            * {
                box-sizing: border-box;
              }

              /* Add padding to containers */
              .container {
                padding: 16px;
                background-color: white;
              }

              /* Full-width input fields */
              input[type=text], input[type=password] {
                width: 100%;
                padding: 15px;
                margin: 5px 0 22px 0;
                display: inline-block;
                border: none;
                background: #f1f1f1;
              }

              input[type=text]:focus, input[type=password]:focus {
                background-color: #ddd;
                outline: none;
              }

              /* Overwrite default styles of hr */
              hr {
                border: 1px solid #f1f1f1;
                margin-bottom: 25px;
              }

              /* Set a style for the submit button */
              .loginbtn {
                background-color: #04AA6D;
                color: white;
                padding: 16px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
                opacity: 0.9;
              }

              .loginbtn:hover {
                opacity: 1;
              }

              /* Add a blue text color to links */
              a {
                color: dodgerblue;
              }

              /* Set a grey background color and center the text of the "sign in" section */
              .signin {
                background-color: #f1f1f1;
                text-align: center;
              }
        </style>
        
        <!--Navigation Bar-->
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
            <img src="../image/movielogo.png" width="40" height="40">
            <a class="navbar-brand" href="../FrontEnd/HomePage.php" style="float:left;">N.E.S Cinema</a>
            
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
            
            <?php
                if(isset($_GET['a']) /*you can validate the link here*/){
                    $_SESSION['noUser']=$_GET['a'];
                 }
                ?>
            
            <?php
            
            if(isset($_SESSION['noUsertoViewTicket'])){

                ?>
                <script>
                Swal.fire({
                icon: 'warning',
                title: 'Notice',
                text: 'Login to view your tickets summary'
                });
                </script>
            <?php
                unset($_SESSION['noUsertoViewTicket']);
            }
            ?>
            
            
            <?php
            
            if(isset($_SESSION['noUser'])){

                ?>
                <script>
                Swal.fire({
                icon: 'warning',
                title: 'Notice',
                text: 'Login before you Buy!'
                });
                </script>
            <?php
                unset($_SESSION['noUser']);
            }
            ?>
            
                
            <?php
            
            if(isset($_SESSION['successReg'])){

                ?>
                <script>
                Swal.fire({
                icon: 'success',
                title: 'Thank You',
                text: 'Account Registered!'
                });
                </script>
            <?php
                unset($_SESSION['successReg']);
            }
            ?>
                
            <?php
            
            if(isset($_SESSION['fail'])){

                ?>
                <script>
                Swal.fire({
                icon: 'info',
                title: 'Error',
                text: 'Account is not Registered!',
                footer: '<a href="../FrontEnd/RegisterPage.php">Register Now</a>'
                });
                </script>
            <?php
                unset($_SESSION['fail']);
            }
            ?>
                
            <?php
            
            if(isset($_SESSION['wrongCredential'])){

                ?>
                <script>
                Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'The email or password is incorrect!'
                });
                </script>
            <?php
                unset($_SESSION['wrongCredential']);
            }
            ?>
            
                
                
            <form action="../BackEnd/handle_log.php" method="POST">
                
                
                <div class="container" style="margin-top:5%;">
                  <h1>Login</h1>
                  <p>Please fill in this form to use the features.</p>
                  <hr>

                  <label for="email"><b>Email</b></label>
                  <input type="text" placeholder="e.g. someone@example.com" name="email" id="email" pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}" required>

                  <label for="psw"><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" name="password" id="psw" required>
                  
                  <hr>
                  <button type="submit" name="submit" class="loginbtn">Login</button>
                </div>
                </div>

                <div class="container signin">
                    <p>Does not have an account? <a href="RegisterPage.php">Register</a>.<br><br>
                        or <br><br>
                        Login as Admin <a href="../admin/login.php"><b>Admin</b></a>
                  </p>
                  
                </div>
            </form>
            
            
        </body>
</html>