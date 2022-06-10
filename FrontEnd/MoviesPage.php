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
    <body>
        
        
        <!--Greeting-->
        <div style="width:100%; height:400px; margin-top: 3%">
            <img style="width:100%; height:400px;" src="https://www.shreveportlittletheatre.com/images/ticket.gif">
        </div>
        
        <div style="width:100%; height:1200px;">
            <table style="width:100%; height:1200px;">
                <tr align="center"">
                    <td>
                        <img style="box-shadow: 5px 10px 8px #888888;" width="300px" height="400px" src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/doctorstrangeinthemultiverseofmadness_lob_crd_02_3.jpg">
                        <p style="font-size:20px; margin-top: 5%;">Doctor Strange: Multiverse of Madness</p>
                        <button id="doctorStrange" class="btn btn-primary" onclick="document.location='PurchasePage.php'">Buy Now</button>
                    </td>
                    <td>
                        <img style="box-shadow: 5px 10px 8px #888888;" width="300px" height="400px" src="https://upload.wikimedia.org/wikipedia/en/8/88/Thor_Love_and_Thunder_poster.jpeg" >
                        <p style="font-size:20px; margin-top: 5%;">Thor: Love and Thunder</p>
                        <button id="thor" class="btn btn-primary">Buy Now</button>
                    </td>
                    <td>
                        <img style="box-shadow: 5px 10px 8px #888888;" width="300px" height="400px" src="https://upload.wikimedia.org/wikipedia/en/2/21/Pirates_of_the_Caribbean%2C_Dead_Men_Tell_No_Tales.jpg">
                        <p style="font-size:20px; margin-top: 5%;">Pirates of the Caribbean: Dead Man Tell No Tales</p>
                        <button id="pirates"  class="btn btn-primary">Buy Now</button>
                    </td>
                </tr>
                <tr align="center">
                    <td>
                        <img style="box-shadow: 5px 10px 8px #888888;" width="300px" height="400px" src="https://upload.wikimedia.org/wikipedia/en/3/34/Fantastic_Beasts-_The_Secrets_of_Dumbledore.png">
                        <p style="font-size:20px; margin-top: 5%;">Fantastic Beast:  The Secrets of Dumbledore</p>
                        <button id="fantasticBeast"  class="btn btn-primary">Buy Now</button>
                    </td>
                    <td>
                        <img style="box-shadow: 5px 10px 8px #888888;" width="300px" height="400px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCAT4deET55wX0MzpBp45_7201ZndSAI8m2W52rNVeVmEbEgEW">
                        <p style="font-size:20px; margin-top: 5%;">Uncharted</p>
                        <button id="uncharted" class="btn btn-primary">Buy Now</button>
                    </td>
                    <td>
                        <img style="box-shadow: 5px 10px 8px #888888;" width="300px" height="400px" src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSEvgeLxhr88FkwBaC_4Soj_BIqIhLHH8D9PEe6UYJg4zfe3J9I">
                        <p style="font-size:20px; margin-top: 5%;">Avatar: The Last Airbender</p>
                        <button id="avatar"  class="btn btn-primary">Buy Now</button>
                    </td>
                </tr>
            </table>
        </div>
      
        <footer style="margin-top: 5%;">
            <p style="text-align:center; font-size: 12px">   
                Proudly created by NG E SOON | 
                <a href="mailto:p20012522@student.newinti.edu.my">p20012522@student.newinti.edu.my</a>
            </p>
        </footer>
        
    </body>
</html>