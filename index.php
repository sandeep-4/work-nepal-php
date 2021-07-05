<?php
include_once 'app/call.php';
session_start();


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Work Nepal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    
    
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  

    
      
      <div class="container">
        <div class="site-navbar bg-light">
          <div class="py-1">
            <div class="row align-items-center">
              <div class="col-2">
                <h2 class="mb-0 site-logo"><a href="index.php" style="color: red;">Work<strong class="font-weight-bold" style="color: blue;">Nepal</strong> </a></h2>
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                      <li><a href="index.php">HOME</a></li>
                      <li><a href="adminlogin.php">ADMIN</a></li>
                      <li class="has-children">
                        <a href="index.php">For Employees</a>
                        <ul class="dropdown arrow-top">
                          <li><a href="index.php?cat=none">Category</a></li>
                          <li><a href="allApplies.php">Browse Candidates</a></li>
                          <li><a href="login.php">Post a Job</a></li>
                          <li><a href="appliersignup.php">Applier sign up</a></li>
                          <li class="has-children">
                            <a href="#">More Links</a>
                            <ul class="dropdown">
                              <li><a href="allApplies.php">Browse Candidates</a></li>
                              <li><a href="login.php">Post a Job</a></li>
                              <li><a href="#">Employeer Profile</a></li>
                            </ul>
                          </li>
                
                        </ul>
                      </li>
                      <li><a href="appliersignup.php">Applier signup</a></li>

                      <li><a href="login.php"><span class="bg-primary text-white py-3 px-4 rounded"><span class="icon-plus mr-3"></span>Employer</span></a></li>
                         <li><a href="addUsers.php"><span class="bg-primary text-white py-3 px-4 rounded"><span class="icon-plus mr-3"></span>Sign up</span></a></li>

                         
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div style="height: 113px;"></div>

    <div class="site-blocks-cover overlay" style="background-image: url('images/job1.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
      
    </div>
    

   
    </div>


    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="100">
            <h2 class="mb-5 h3">Recent Jobs Announcements</h2>
                            <table class="table">
                              <thead class="thead-dark">
  <tr style="color:black;">
    <th>id</th>
    <th>JOB TITLE</th>
    <th>JOB TYPE</th>
    <th>DETAILS</th>
    <th>APPLY</th>
   
           
 <?php
 include_once('app/helperfunctions.php');
 $servername = "localhost";
$username = "root";
$password = "";

    $pdo = new PDO("mysql:host=$servername;dbname=merojob", $username, $password);
  
    $query= "SELECT * FROM post_job";


  $result = $pdo->query($query);
    $result->setFetchMode(PDO::FETCH_ASSOC);
    while($row=$result->fetch()):
 ?>
</thead>
  </tr>
  <tr style="color: black">
                 <td><?php echo htmlspecialchars($row['post_id']);  ?></td>
             <td><a href="detailsAbouttheJob.php?id=<?php echo ($row['post_id']); ?>" style="color: black;"><?php echo htmlspecialchars($row['job_title']);  ?></a></td>
             <td><?php echo htmlspecialchars($row['type']);  ?></td>
              <td style="background: #eedcf2; margin: 5px; padding: 5px;"><a href="detailsAbouttheJob.php?id=<?php echo ($row['post_id']); ?>"><button class="btn btn-warning">details</button></a></td>  
           <td style="background: #cef0eb; margin: 5px; padding: 5px;" ><a href="applylogin.php?id=<?php echo ($row['post_id']); ?>"><button class="btn btn-dark">apply</a></button></td> 


           

            
   </tr>
     <?php endwhile; ?>
 </table>
     
            
                       </div>
               
                  </div>
                </div>
               
             </div>
             <hr>
             <hr>
             <h5 style="color: blue; text-align: center;">For more Vacancies :</h5>
         </div>
         <div class="container">
  <div class="row">
    <div class="col">
   <?php
                 
            $servername = "localhost";
            $username = "root";
            $password = "";

    $pdo = new PDO("mysql:host=$servername;dbname=merojob", $username, $password);
  
    $query= "SELECT * FROM post_job";


  $result = $pdo->query($query);
    $result->setFetchMode(PDO::FETCH_ASSOC);
                 while($row=$result->fetch()):
                                   ?>
<div class="jumbotron jumbotron-fluid" style="height: 50px;">
  <div class="container">
                      <a href="detailsAbouttheJob.php?id=<?php echo ($row['post_id']); ?>" style="color: black;"><?php echo htmlspecialchars($row['job_title']);  ?></a> at <?php echo htmlspecialchars($row['company_name']);  ?> Click to  <a href="applylogin.php?id=<?php echo ($row['post_id']); ?>">apply</a>
                    
</div>
</div>
                      <?php endwhile; ?>
                          </div>
    <div class="col">
<h2 class="mb-5 h3">Check here to find more</h2>
                            <table border="2px" width="700px">
  <tr style="color:black;">
    <th>JOB TITLE</th>
    <th>JOB TYPE</th>
    <th>APPLY</th>
   
           
 <?php
 include_once('app/helperfunctions.php');
 $servername = "localhost";
$username = "root";
$password = "";

    $pdo = new PDO("mysql:host=$servername;dbname=merojob", $username, $password);
  
    $query= "SELECT * FROM post_job";


  $result = $pdo->query($query);
    $result->setFetchMode(PDO::FETCH_ASSOC);
    while($row=$result->fetch()):
 ?>

  </tr>
  <tr style="color: black">
             <td><a href="detailsAbouttheJob.php?id=<?php echo ($row['post_id']); ?>" style="color: black;"><?php echo htmlspecialchars($row['job_title']);  ?></a></td>
             <td><?php echo htmlspecialchars($row['type']);  ?></td>
               
      <!--          <td><button onclick="window.location.href='/applylogin.php?id=<?php echo ($row['post_id']); ?>'">Apply</button>
</td>
 -->         <td ><a href="applylogin.php?id=<?php echo ($row['post_id']); ?>"style="color: gray;"><button class="btn btn-success">apply</button></a></td>  

           

            
   </tr>
     <?php endwhile; ?>
 </table>
     
            
                       </div>
               
                  </div>
                </div>
               
             </div>    </div>
  </div>
</div>
              

    </div>
</div>
    <div class="site-section" data-aos="fade">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 mb-5 mb-md-0">
            
             
            
          </div>
          
        </div>
      </div>
    </div>
<div class="">

    <div class="site-blocks-cover overlay inner-page" style="background-image: url('images/job1.jpg'); width: 100%"; data-aos="fade" data-stellar-background-ratio="1">
      <div class="container" style="width: 100%;">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6 text-center" data-aos="fade">
            <h1 class="h3 mb-0">Your Dream Job</h1>
            <p class="h3 text-white mb-5">Is Waiting For You</p>
            
          </div>
        </div>
      </div>
    </div>
  </div>

    

    

    


    
    


    
    <footer class="site-footer"  style="width: 100%;">
      <div class="container">
        

        <div class="row">
          <div class="col-md-4">
            <h3 class="footer-heading mb-4 text-white">About</h3>
            <p>WorkNepal is the job portal in Nepal. Find your career opportunities here!Search among thousands of jobs from top companies locations of your choice</p>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6">
                <h3 class="footer-heading mb-4 text-white">Menu</h3>
                  <ul class="list-unstyled">
                    <li><a href="applylogin.php">LogIn Apply</a></li>
                    <li><a href="allApplies.php">Applies</a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                  </ul>
              </div>
              <div class="col-md-6">
                <h3 class="footer-heading mb-4 text-white">PAGES</h3>
                  <ul class="list-unstyled">
                    <li><a href="index.php">Index</a></li>
                    <li><a href="adminlogin.php">Admin Login</a></li>
                    <li><a href="login.php">User Login</a></li>
                 </ul>
              </div>
            </div>
          </div>

          
          <div class="col-md-2">
            <div class="col-md-12"><h3 class="footer-heading mb-4 text-white">Find us on</h3></div>
              <div class="col-md-12">
                <p>
                  <a href="https://www.facebook.com" class="pb-2 pr-2 pl-0"><span class="icon-facebook"></span></a>
                  <a href="https://www.twitter.com" class="p-2"><span class="icon-twitter"></span></a>
                  <a href="https://www.instagram.com" class="p-2"><span class="icon-instagram"></span></a>
                  

                </p>
              </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
          
          </div>
          
        </div>
      </div>
    </footer>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  
  <script src="js/mediaelement-and-player.min.js"></script>

  <script src="js/main.js"></script>
    

  
<div class="footer text-muted" style="text-align: center;">
            &copy; 2019. <a href="#">Work Nepal</a> by <a href="#" target="_blank">Summer Project</a>
          </div>
    

  </body>
</html>