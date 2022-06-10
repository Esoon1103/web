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
                      <a class="nav-link " href="MoviesPage.php">Movies</a>
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
        
        <div class="container py-5">
            <div class="row py-5">
              <div class="col-lg-10 mx-auto">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-5 bg-white rounded">
                    <div class="table-responsive">
                      <table id="example" style="width:100%" class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Movie Name</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Hall Location</th>
                            <th>Seats</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>Doctor Strange: Multiverse of Madness</td>
                            <td>24 April 2022</td>
                            <td>2:30pm</td>
                            <td>Hall 1</td>
                            <td>A1, A2, A3</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>  
        
        <footer style="margin-top: 20%;">
            <p style="text-align:center; font-size: 12px">   
                Proudly created by NG E SOON | 
                <a href="mailto:p20012522@student.newinti.edu.my">p20012522@student.newinti.edu.my</a>
            </p>
        </footer>
        
    </body>
</html>
