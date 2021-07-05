<?php
session_start();

$post_id=$_SESSION['id'];
// $usernameA=$_SESSION['users'];

// echo $usernmaeA;
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>apply form</title>
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
  <?php 
  include_once('app/userfunction.php');
  include_once('app/applyfunctions.php');
  include_once('app/helperfunctions.php');

if (isset($_POST['applybtn'])) {
		 if(insertappliedjobs($conn, $_POST)){
		 	echo"applied successfully";
		 	redirection('logout.php');
	}else{
		echo "error";
	}
}
?>

      
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


	<div class="page-container">

		<div class="page-content">

			
			<div class="content-wrapper">

				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							<br><br>
							<h4 style="color: blue;"><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Apply for your dream job. </span></h4>
						</div>

						
					</div>

				
  


				</div>
				<div class="content">

					<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-6">

							<form action="#" method="POST">
								<div class="panel panel-flat">
									<div class="panel-heading">
										<h5 class="panel-title">Fill the  requirements</h5>
										
									</div>

									<div class="panel-body">
									
									<div class="form-group">
											<label>Job id</label>
											<input type="text" name="post_id" class="form-control" value="<?php echo $post_id; ?>" readonly>
										</div>


										<div class="form-group">
											<label>First Name</label>
											<input type="text" name="fname" class="form-control" placeholder="First Name" required>
										</div>
										<div class="form-group">
											<label>Last Name</label>
											<input type="text" name="lname" class="form-control" placeholder="Last Name" required>
										</div>
										<div class="form-group">
											<label>E-mail</label>
											<input type="text" name="email" class="form-control" placeholder="E-mail" required>
										</div>
										<div class="form-group">
											<label>Education</label>
											<input type="text" name="education" class="form-control" placeholder="Education" required>
										</div>
										<div class="form-group">
											<label>Experience</label>
											<input type="text" name="experience" class="form-control" placeholder="Enter experience">
										
										
										<div class="form-group">
											<label>Skills</label>
											<input type="text" name="skills" class="form-control" placeholder="Enter your skills" required>
										</div>

										<div class="form-group">
											<label>Languages</label>
											<input type="text" name="languages" class="form-control" placeholder="Languages" required>
										</div>

									  
									
					
										<div class="text-right">
											<button type="submit" name ="applybtn" class="btn btn-primary">Apply <i class="icon-arrow-right14 position-right"></i></button>
										</div>


										
									</div>
								</div>
							</form>
						</div>
						<div class="col-md-3"></div>

									</div>
								</div>
							</form>

						</div>


				</div>
			</div>

		</div>

	</div>

</body>
</html>
