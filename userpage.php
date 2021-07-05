
<?php
 session_start();
 include 'app/call.php';
 if(!checkUserLogin()){
  redirect('login.php');
}
    $stmtLogin=$conn->prepare("SELECT id FROM users WHERE username=:username");
  $stmtLogin->bindParam(':username', $_SESSION['username']);
  $stmtLogin->execute();
  $stmtLogin->setFetchMode(PDO:: FETCH_ASSOC);
  $id=$stmtLogin->fetch();

foreach ($id as $key => $ids) {
$idvalue=$ids;
}

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Work Nepal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
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
  
  <div class="site-wrap">
    
    
      
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

                      <li><a href="jobform.php?id=<?php echo$idvalue;?> "><span class="bg-primary text-white py-3 px-4 rounded"><span class="icon-plus mr-3"></span>Post a job</span></a></li>
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

    
    

   
    </div>
<?php
  $servername = "localhost";
$username = "root";
$password = "";

    $pdo = new PDO("mysql:host=$servername;dbname=merojob", $username, $password);
$query1= "SELECT * FROM users WHERE id= $idvalue";

  $result = $pdo->query($query1);
    $result->setFetchMode(PDO::FETCH_ASSOC);
    while($row=$result->fetch()){

?>

<div class="container">
   <div class="row">
    <div class="col-4">
      
<div class="container">
    <div class="row profile">
    <div class="col-md-3">
      <div class="profile-sidebar">
        <div class="profile-userpic">
          <img src="http://keenthemes.com/preview/metronic/theme/assets/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">
        </div>
       <h6 style="color: blue;">User Profile:</h6>
        <div class="profile-usertitle">
          <div class="profile-usertitle-name">
           <small style="color: green;"><cite><?php echo $row['username']; ?><br></cite></small>
           <?php echo $row['fname']." ".$row['lname']; ?><br>
           <?php echo $row['email']; ?><br>
           
          </div>
          <div class="profile-usertitle-job">
            <?php echo $row['phone']; ?>
          </div>
        </div>
       
        <div class="profile-userbuttons">
         
          <a href="logout.php"><button type="submit" class="btn btn-success">Log out</button></a>
        </div>
        
       
      </div>
    </div>
    <div class="col-md-9">
            
    </div>
  </div>
</div>

<br>
<br>



<?php
}
 ?>
</div>


<div class="col-8">
      <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="100">
            <h2 class="mb-5 h3">MY JOBS</h2>
                                      <table border="2px" class="table">
                                         <thead class="thead-dark">
  <tr style="color:black;">
    <th>id</th>
    <th>JOB TITLE</th>
    <th>JOB TYPE</th>
    <th>DETAILS</th>
    <th>UPDATE</th>
    <th>DELETE</th>
    <th>APPLIERS</th>
</thead>
  </tr>
 <?php
 include_once('app/helperfunctions.php');
 $servername = "localhost";
$username = "root";
$password = "";

    $pdo = new PDO("mysql:host=$servername;dbname=merojob", $username, $password);

$usernameA=$_SESSION['username'];

    $query= "SELECT * FROM post_job WHERE id= $idvalue";

  $result = $pdo->query($query);
    $result->setFetchMode(PDO::FETCH_ASSOC);
    while($row=$result->fetch()):
 ?>
 <tr style="color: black">
                 <td><?php echo htmlspecialchars($row['post_id']);  ?></td>
             <td><?php echo htmlspecialchars($row['job_title']);  ?></td>
             <td><?php echo htmlspecialchars($row['type']);  ?></td>
             <td><a href="detailsAbouttheJob.php?id=<?php echo ($row['post_id']); ?>">details</a></td> 
             <td><a href="editPost.php?id=<?php echo ($row['post_id']); ?>"><button class="btn btn-warning">update</button></a></td> 
             <td><a href="deletePost.php?id=<?php echo ($row['post_id']); ?>"><button class="btn btn-danger">delete</button></a></td>      
                    <td><a href="userSeeingApplies.php?id=<?php echo ($row['post_id']); ?>"><button class="btn btn-dark">appliers</button></a></td> 

           

            
   </tr>
     <?php endwhile; ?>
 </table>
 
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