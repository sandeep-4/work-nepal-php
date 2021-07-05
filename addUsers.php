<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Add Users</title>
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
  include_once('app/helperfunctions.php');

if (isset($_POST['submitbtn'])) {
		 if(insertUser($conn, $_POST)){
		 	echo"user created successfully";
		 	// showMsg('User Created Successfully');
		 	redirection('index.php');
	}else{
		echo "error";
	}
}
?>

	
	<div class="page-container">

		<div class="page-content">

			
			<div class="content-wrapper">

				<div class="page-header">
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
                          <li><a href="appliersignup.php">Applier sign up</a></li>
                       <li><a href="login.php">Post a Job</a></li>
                                                      </li>
                
                        
                      </li>

                      <li><a href="logout.php"><span class="bg-primary text-white py-3 px-4 rounded"><span class="icon mr-3"></span>Log out</span></a></li>
                         
                         
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
					<div class="page-header-content">

						<div class="page-title">
							<h4 style="color: gray; text-align: center;"><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Please fill the form to create your User Account </span></h4>
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
										<!-- <h5 class="panel-title" style="color: gray;">User Account :</h5> -->
										
									</div>

									<div class="panel-body">
									
										<div class="form-group">
											<label>First Name</label>
											<input type="text" name="fname" class="form-control" placeholder="Enter first name" required minlength="5" maxlength="21">
										</div>
										<div class="form-group">
											<label>Last Name</label>
											<input type="text" name="lname" class="form-control" placeholder="Enter last name" required minlength="5" maxlength="21">
										</div>
										<div class="form-group">
											<label>Username</label>
											<input type="text" name="username" class="form-control" placeholder="Enter username" required minlength="5" maxlength="21">
										</div>
										<div class="form-group">
											<label>Email</label>
											<input type="email" name="email" class="form-control" placeholder="Enter email address">
										</div>
										<div class="form-group">
											<label>Password</label>
											<input type="password" name="password" class="form-control" placeholder="Enter password" required minlength="5" maxlength="35">
										</div>
										
										<div class="form-group">
											<label>Phone Number</label>
											<input type="number" name="phone" class="form-control" placeholder="Enter phone number" required minlength="10" maxlength="10">
										</div>

									  
									
					
										<div class="text-right">
											<button type="submit" name ="submitbtn" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
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
