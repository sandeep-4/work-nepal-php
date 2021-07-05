


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
                          <li><a href="category.html">Category</a></li>
                          <li><a href="#">Browse Candidates</a></li>
                          <li><a href="index.php">Post a Job</a></li>
                          <li><a href="appliersignup.php">Applier sign up</a></li>
                          <li class="has-children">
                            <a href="#">More Links</a>
                            <ul class="dropdown">
                              <li><a href="#">Browse Candidates</a></li>
                              <li><a href="#">Post a Job</a></li>
                              <li><a href="#">Employeer Profile</a></li>
                            </ul>
                          </li>
                 
                        </ul>
                      </li>
                      <li><a href="allApplies.php">Applied jobs</a></li>

                      <li><a href="login.php"><span class="bg-primary text-white py-3 px-4 rounded"><span class="icon-plus mr-3"></span>Users</span></a></li>
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

    
      
    </div>
    

   
    </div>


    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="100">
            <h2 class="mb-5 h3">Details about the job</h2>
           
 <?php
 include_once('app/helperfunctions.php');
 $servername = "localhost";
$username = "root";
$password = "";


if(isset($_GET['id'])){

      $id=$_GET['id'];
  

    $pdo = new PDO("mysql:host=$servername;dbname=merojob", $username, $password);
  
    $query= "SELECT * FROM post_job WHERE post_id=$id";



  $result = $pdo->query($query);
    $result->setFetchMode(PDO::FETCH_ASSOC);
    while($row=$result->fetch()):
 ?>

 <div class="rounded border jobs-wrap" style="width: 900px;">

              <a  class="job-item d-block d-md-flex align-items-center  border-bottom fulltime">
                <div class="company-logo blank-logo text-center text-md-left pl-3">
                  <img src="images/company_logo_blank.png" alt="Image" class="img-fluid mx-auto">
                </div>
                <div class="job-details h-100" style="width: 900px;">
                  <div class="p-3 align-self-center">
                    <div class="mr-3"><span class="icon-suitcase mr-1"> Job:</span>
                    <h3><?php echo ($row['job_title']);  ?></h3>
                    <div class="d-block d-lg-flex">
                      
  
<!--     id:  <?php echo htmlspecialchars($row['post_id']);  ?><br>
 -->    
    Jobtype:  <?php echo htmlspecialchars($row['type']);  ?><br>
    Company:  <?php echo htmlspecialchars($row['company_name']);  ?><br>
    Location: <?php echo htmlspecialchars($row['location']);  ?><br> 
    Qualification: <?php echo htmlspecialchars($row['qualification']);  ?><br> 
    Job post:  <?php echo htmlspecialchars($row['post']);  ?><br>
    Experience:  <?php echo htmlspecialchars($row['experience']);  ?><br>
    Req. Employees:  <?php echo htmlspecialchars($row['employeesRequired']);  ?><br>
    Salary:  <?php echo htmlspecialchars($row['salary']);  ?><br>
    Last Date:   <?php echo htmlspecialchars($row['date_to_submit']);  ?>


<!-- <p> <?php
            $date1=$row['date_to_submit'];

            echo $date1;
            $date2 = date("Y-m-d"); 
            $timeremianing=date_diff($date1,$date2);
            echo("days remaining : ".$timeremianing);
            ?>
</p> -->
</div>
<p style="color: green;"><?php echo ("Mail us your C.V. at : ".$row['email']);
?></p>

<hr>
<!-- <button type="button" class="btn btn-primary" onclick="window.location.href = 'updatelogin.php';">Edit</button>
            <button type="button" class="btn btn-primary" onclick="window.location.href = 'deletePost.php';">Delete</button> -->
            <!-- <button type="button" class="btn btn-dark" onclick="window.location.href = 'applylogin.php';">Apply</button> -->
                       </div>
             
                  </div>
                </div>
               
             </div>
             <?php endwhile;
             } ?>
             <hr>
             <hr>
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


   
  </div>

      <footer class="site-footer"  style="width: 100%;">
      <div class="container">
        

        <div class="row">
          <div class="col-md-4">
            <h3 class="footer-heading mb-4 text-white">About</h3>
            <p><a href="#" class="btn btn-primary pill text-white px-4">Read More</a></p>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6">
                <h3 class="footer-heading mb-4 text-white">Quick Menu</h3>
                  <ul class="list-unstyled">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Approach</a></li>
                    <li><a href="#">Sustainability</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Careers</a></li>
                  </ul>
              </div>
              <div class="col-md-6">
                <h3 class="footer-heading mb-4 text-white">Categories</h3>
                  <ul class="list-unstyled">
                    <li><a href="#">Full Time</a></li>
                    <li><a href="#">Freelance</a></li>
                    <li><a href="#">Temporary</a></li>
                    <li><a href="#">Internship</a></li>
                  </ul>
              </div>
            </div>
          </div>

          
          <div class="col-md-2">
            <div class="col-md-12"><h3 class="footer-heading mb-4 text-white">Find us on</h3></div>
              <div class="col-md-12">
                <p>
                  <a href="www.facebook.com" class="pb-2 pr-2 pl-0"><span class="icon-facebook"></span></a>
                  <a href="#" class="p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="p-2"><span class="icon-instagram"></span></a>
                  <a href="#" class="p-2"><span class="icon-vimeo"></span></a>

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
            &copy; 2019. <a href="#">Work Nepal</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Summer Project</a>
          </div>
    

  </body>
</html>