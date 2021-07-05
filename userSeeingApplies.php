<?php
session_start();
if(isset($_GET['id'])){
  $id=$_GET['id'];
  
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>All Applies</title>
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
                <h2 class="mb-0 site-logo"><a href="index.php" style="color: red;">All<strong class="font-weight-bold" style="color: blue;">Applies</strong> </a></h2>
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                      <li><a href="index.php">For Candidates</a></li>
                      
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

                      <li><a href="login.php"><span class="bg-primary text-white py-3 px-4 rounded"><span class="icon-plus mr-3"></span>Post a job</span></a></li>
                         <li><a href="logout.php"><span class="bg-primary text-white py-3 px-4 rounded"><span class="icon mr-3"></span>Log out</span></a></li>

                         
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
            <h2 class="mb-5 h3">Recent Apply</h2>
           
 <?php

 $servername = "localhost";
$username = "root";
$password = "";
    $pdo = new PDO("mysql:host=$servername;dbname=merojob", $username, $password);
  
    $query= "SELECT * FROM apply WHERE post_id=$id";

// .
// $stmtget=$conn->prepare("SELECT * FROM apply");
//   $stmtget->execute();
//   $stmtget->setFetchMode(PDO::FETCH_ASSOC);
//   $_data=$stmtget->fetch();
//   return $data
// .


  $result = $pdo->query($query);
    $result->setFetchMode(PDO::FETCH_ASSOC);
    while($row=$result->fetch()):
 ?>


  <div class="jumbotron" >
  <h1 >Curriculam vite</h1>
  <p class="lead">Name: <?php echo htmlspecialchars($row['fname']);  ?>
             <?php echo htmlspecialchars($row['lname']);  ?><br>
           Email :  <?php echo htmlspecialchars($row['email']);  ?><br>
           Education:  <?php echo htmlspecialchars($row['education']);  ?><br>
           Experience:  <?php echo htmlspecialchars($row['experience']);  ?><br>
           Skills:  <?php echo htmlspecialchars($row['skills']);  ?><br>
           Languages:  <?php echo htmlspecialchars($row['experience']);  ?><br>
<!-- <h4 >Applied for :</h4>
job title: <?php echo htmlspecialchars($row['job_title']);  ?><br>
company name: <?php echo htmlspecialchars($row['company_name']);  ?><br>
Job Type: <?php echo htmlspecialchars($row['type']);  ?><br> -->
</p>
  
</div>

<!-- 

             <?php echo htmlspecialchars($row['fname']);  ?>
             <?php echo htmlspecialchars($row['lname']);  ?>
             <?php echo htmlspecialchars($row['email']);  ?>
             <?php echo htmlspecialchars($row['education']);  ?>
            <?php echo htmlspecialchars($row['experience']);  ?>
             <?php echo htmlspecialchars($row['skills']);  ?>
            <?php echo htmlspecialchars($row['languages']);  ?> -->
            
  

 <?php endwhile; ?>

<hr>

                       </div>
             
                  </div>
                </div>
               
             </div>
            
             <hr>
             <hr>
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


    <div class="site-blocks-cover overlay inner-page" style="background-image: url('images/job1.jpg'); width: 100%"; data-aos="fade" data-stellar-background-ratio="1">
      <div class="container" style="width: 100%;">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6 text-center" data-aos="fade">
            <h1 class="h3 mb-0">Your Dream Job</h1>
            <p class="h3 text-white mb-5">Is Waiting For You</p>
            <p><a href="#" class="btn btn-outline-warning py-3 px-4">Find Jobs</a> <a href="#" class="btn btn-warning py-3 px-4">Apply For A Job</a></p>
            
          </div>
        </div>
      </div>
    </div>

    

    

    


    
    


    
    <footer class="site-footer"  style="width: 100%;">
      <div class="container">
        

        <div class="row">
          <div class="col-md-4">
            <h3 class="footer-heading mb-4 text-white">About</h3>
            <p>Write about.</p>
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
            <div class="col-md-12"><h3 class="footer-heading mb-4 text-white">Social Icons</h3></div>
              <div class="col-md-12">
                <p>
                  <a href="#" class="pb-2 pr-2 pl-0"><span class="icon-facebook"></span></a>
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
  </div>

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
    

  

    

  </body>
</html>