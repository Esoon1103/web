<html>
    <!-- Favicon Icon -->
    <link rel="icon" href="image/movielogo32.ico">
    
    <head>   
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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
              
              #customers {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
              }

              #customers td, #customers th {
                border: 1px solid #ddd;
                padding: 8px;
              }

              #customers tr:nth-child(even){background-color: #f2f2f2;}
              #customers tr:nth-child(odd){background-color: whitesmoke;}

              #customers tr:hover {background-color: #ddd;}

              #customers th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #04AA6D;
                color: white;
              }
            
        </style>
        
        <!--Navigation Bar-->
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
            <div class="container-fluid">
                <img src="image/movielogo.png" width="40" height="40";>
                <a class="navbar-brand" href="HomePage.php" style="margin-left:-69%">N.E.S Cinema</a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="MoviesPage.php">Movies</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="TicketsOverviewPage.php">Tickets Overview</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">Account</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="AccountPage.php">Settings</a></li>
                            <li><a class="dropdown-item" href="LoginPage.php">Log In</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    
      <title>NES Cinema</title>
      
    
    </head>
    <body style="background:whitesmoke;">
       
            
        
        
        <div style="width:100%; height:570px; margin-top:5%;" align="center" >
            <div style="width:30%; height:100%; float:left;">
                <img style="width: auto; box-shadow: 5px 10px 8px #888888; object-fit:cover;" src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/doctorstrangeinthemultiverseofmadness_lob_crd_02_3.jpg">
            </div>
        
            
            <div style="background:whitesmoke; opacity: 0.5; padding:50px; box-shadow: 5px 20px 45px #888888; border-radius: 2%; height:100%; width:65%; float:left;">
                <h2>Doctor Strange: Multiverse of Madness</h2>
                <p style="margin-top:5%;">
                    Doctor Strange teams up with a mysterious teenage girl from his dreams who can travel across multiverses, 
                    to battle multiple threats, including other-universe versions of himself, which threaten to wipe out millions across 
                    the multiverse. They seek help from Wanda the Scarlet Witch, Wong and others.
                </p>
                <label style="margin-top:1%; ">Time Length: <b>2 Hours 15 Minutes</b></label>
            </div>
        </div>

        <h2 align="center" style=" margin-top:10%;">Tickets Showtime</h2>
        
        <div style="background:#FF3232; padding:100px; margin-top:5%; width:100%; height:auto; box-shadow: 5px 10px 8px #888888; ">
            <table id="customers" align="center" style="width:50%; border:solid;" required>
                <form action="PaymentPage.php">
                    <tr>
                        <td>
                            Date
                        </td>
                        <td>
                            <select id="date" type="date" required>
                                <option value="">None</option>
                                <option value="24 April 2022">24 April 2022</option>
                                <option value="25 April 2022">25 April 2022</option>
                                <option value="26 April 2022">26 April 2022</option>
                                <option value="27 April 2022">27 April 2022</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Location
                        </td>
                        <td>
                            <b><i>Hall 1</i></b>
                        </td>
                    </tr>
                        <tr>
                        <td>
                            Time
                        </td>
                        <td>
                            <select id="time" required>
                                <option value="">None</option>
                                <option value="130">1:30pm</option>
                                <option value="530">5:30pm</option>
                                <option value="730">7:30pm</option>
                                <option value="1030">10:30pm</option>
                              </select>
                        </td>
                        </tr>
                        <tr>
                            <td>
                                Adults
                            </td>
                            <td>
                                <select id="adultTicket" required>
                                <option value="">None</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                              </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Kids
                            </td>
                            <td>
                                <select id="kidTicket" required>
                                    <option value="">None</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Total Price
                            </td>
                            <td>
                                RM
                            </td>
                        </tr>
                        <tr align="center">
                            <td colspan="2">
                                <button id="btnContinue" class="btn btn-primary btn-lg" type="submit" href="PaymentPage.php">Continue</button>
                            </td>
                        </tr>
                    </form>
            </table>
        </div>
        
        <div style="margin-bottom:5%"></div>
       
    </body>
</html>
