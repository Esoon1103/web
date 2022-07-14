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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
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
              
              body{

    background-color: #eee;
}

.container{

    height: 100vh;

}


.card{
    border:none;
}

.form-control {
    border-bottom: 2px solid #eee !important;
    border: none;
    font-weight: 600
}

.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #8bbafe;
    outline: 0;
    box-shadow: none;
    border-radius: 0px;
    border-bottom: 2px solid blue !important;
}



.inputbox {
    position: relative;
    margin-bottom: 20px;
    width: 100%
}

.inputbox span {
    position: absolute;
    top: 7px;
    left: 11px;
    transition: 0.5s
}

.inputbox i {
    position: absolute;
    top: 13px;
    right: 8px;
    transition: 0.5s;
    color: #3F51B5
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0
}

.inputbox input:focus~span {
    transform: translateX(-0px) translateY(-15px);
    font-size: 12px
}

.inputbox input:valid~span {
    transform: translateX(-0px) translateY(-15px);
    font-size: 12px
}

.card-blue{

    background-color: #492bc4;
}

.hightlight{

    background-color: #5737d9;
    padding: 10px;
    border-radius: 10px;
    margin-top: 15px;
    font-size: 14px;
}

.yellow{

    color: #fdcc49; 
}

.decoration{

    text-decoration: none;
    font-size: 14px;
}

.btn-success {
    color: #fff;
    background-color: #492bc4;
    border-color:#492bc4;
}

.btn-success:hover {
    color: #fff;
    background-color:#492bc4;
    border-color: #492bc4;
}


.decoration:hover{

    text-decoration: none;
    color: #fdcc49; 
}
        </style>
        
        <!--Navigation Bar-->
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
            <img src="../image/movielogo.png" width="40" height="40";/>
            <a class="navbar-brand" href="HomePage.php" style="margin-left:-69%">N.E.S Cinema</a>
            
            <div class="container-fluid">
                <p> </p>
                <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="MoviesPage.php">Movies</a>
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
            
            <div class="container mt-5 px-5">

                <div class="mb-4">
                    <h2>Confirm order and pay</h2>
                    <span>please make the payment, after that you can enjoy the movie.</span>
                </div>
                <?php
                
                echo '<form action="../BackEnd/handle_payment.php" method="post">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card p-3">
                                <h6 class="text-uppercase">Payment details</h6>
                                <div class="inputbox mt-3"> <input type="text"  title="Numeric numbers are restricted. Please type in Alphabetical characters." name="name" pattern="[a-zA-Z][a-zA-Z\s]*" class="form-control" required="required"> <span>Name on card</span> </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="inputbox mt-3 mr-2"> <input type="text" maxlength="16" title="This area is limited to 16 numeric numbers. For example, 1234567890123456" pattern="^\S{16}$" name="name" class="form-control" required="required"> <i class="fa fa-credit-card"></i> <span>Card Number</span> 

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                         <div class="d-flex flex-row">
                                             <div class="inputbox mt-3 mr-2"> <input type="text" name="name" minlength="5" maxlength="5" class="form-control" required="required"> <span>Expiry</span> </div>
                                          <div class="inputbox mt-3 mr-2"> <input type="text" name="name" minlength="3" maxlength="3" class="form-control" required="required"> <span>CVV</span> </div>

                                         </div>
                                    </div>
                                </div>
                                <div class="mt-4 mb-4">
                                    <h6 class="text-uppercase">Billing Address</h6>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <span>Street Address</span> </div>

                                        </div>
                                         <div class="col-md-6">
                                            <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <span>City</span> </div>

                                        </div>

                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-6">
                                            <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <span>State/Province</span> </div>

                                        </div>
                                         <div class="col-md-6">
                                             <div class="inputbox mt-3 mr-2"> <input type="text" minlength="5" maxlength="5" pattern="^\S{5}$" name="name" class="form-control" required="required"> <span>Zip code</span> </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 mb-4 d-flex justify-content-between">
                                        <span>Previous step</span>
                                        <button type="submit" class="btn btn-success px-3">
                                            Pay RM
                                            '.$_SESSION['totalPrice'].'

                                        </button>
                            </div>
                        </div>

                        <div class="col-md-4">

                            <div class="card card-blue p-3 text-white mb-3">

                               <span>You have to pay</span>
                                <div class="d-flex flex-row align-items-end mb-3" class="highlight">
                                    <h1 class="mb-0 yellow">
                                        RM
                                        
                                        '.$_SESSION['totalPrice'].'

                                        
                                    </h1> <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>';
                ?>
                
        </div>
    </body>
</html>