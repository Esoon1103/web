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
        
        <script type="text/javascript">
                function checkPassword(){
                    var pw = document.getElementById("psw");
                    var rpw = document.getElementById("psw-repeat");

                    if(pw.value === rpw.value)
                        rpw.setCustomValidity('');
                    else{
                        rpw.setCustomValidity('Password is not equivalent!');
                    } 
                    }
        </script>
        
        
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
              .registerbtn {
                background-color: #04AA6D;
                color: white;
                padding: 16px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
                opacity: 0.9;
              }

              .registerbtn:hover {
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
            <img src="../image/movielogo.png" width="40" height="40";/>
            <a class="navbar-brand" href="../FrontEnd/HomePage.php" style="margin-left:-69%">N.E.S Cinema</a>
           
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
                            <li><a class="dropdown-item" href="../FrontEnd/AccountPage.php">Settings</a></li>
                            <li><a class="dropdown-item" href="../FrontEnd/LoginPage.php">Log In</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </head>
      <title>NES Cinema</title>
        <body style="background-color:whitesmoke;">
            <?php
            
            if(isset($_SESSION['duplicateEmail'])){

                ?>
                <script>
                Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'The email has been taken!'
                });
                </script>
            <?php
                unset($_SESSION['duplicateEmail']);
            }
            ?>
            
            
            <form action="../BackEnd/handle_reg.php" method="POST">
                <div class="container" style="margin-top:5%;">
                  <h1>Register</h1>
                  <p>Please fill in this form to create an account.</p>
                  <hr>
                  <label for="username"><b>Username</b></label>
                  <input type="text" placeholder="e.g. Ian, John. Attention: Mininum 3 words and Maximum 30 words" minlength="3" maxlength="30" name="username" id="username" required>

                  <label for="email"><b>Email</b></label>
                  <input type="text" placeholder="e.g. someone@example.com" name="email" id="email" pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}" required>

                  <label for="psw"><b>Password</b></label>
                  <input type="password" placeholder="e.g.: Qwer!234   Minimum of 7 characters. Should have at least one special character and one number and one UpperCase Letter" name="psw" id="psw" onChange="checkPassword()" pattern="^(?w=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{7,}$" title="Minimum of 7 characters. Should have at least one special character and one number and one UpperCase Letter." required>

                  <label for="psw-repeat"><b>Repeat Password</b></label>
                  <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" onChange="checkPassword()" pattern="^(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{7,}$" title="Minimum of 7 characters. Should have at least one special character and one number and one UpperCase Letter." required>
                  
                  <hr>
                  <button type="submit" name="submit" id="submit" class="registerbtn">Register</button>
                </div>

                <div class="container signin">
                  <p>Already have an account? <a href="LoginPage.php">Sign in</a>.</p>
                </div>
            </form>
        </body>
</html>