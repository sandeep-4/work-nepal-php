<?php
session_start();
$msg='';
include 'app/call.php';
  


$stmtLogin=$conn->prepare("SELECT id FROM users WHERE username=:username");
	$stmtLogin->bindParam(':username', $_SESSION['username']);
	$stmtLogin->execute();
	$stmtLogin->setFetchMode(PDO:: FETCH_ASSOC);
	$id=$stmtLogin->fetch();
foreach ($id as $key => $ids) {
	$idvalue=$ids;
}




?>
<div class="container">
  <div class="row" style="color: #bddff2;">
    <div class="col-sm">
<h6 style="color: gray;">Welcome !!! </h6><h6 style="color: gray;">
<?php echo $_SESSION['username'];?></h6><h6 style="color: gray;"> 
 Please fill the form to post your vacency </h6>     </div>
</div>
</div>
</div>

 <!DOCTYPE html>
<html lang="en">
  <head>
    <title>job form</title>
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
  include_once('app/jobpostfunctions.php');
  include_once('app/helperfunctions.php');

if (isset($_POST['submitbtn'])) {
		 if(insertjobInfo($conn, $_POST)){
		 	echo"job posted successfully";
		 	redirection('userpage.php');
	}else{
		echo "error";
	}
}
?>

	</div>


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
					<div class="page-header-content">
						<div class="page-title">
							
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
										<h5 class="panel-title">Fill out the job requirements</h5>
										
									</div>

									<div class="panel-body">
									
										<div class="form-group">
											<label>Job title</label>
											<input type="text" name="job_title" class="form-control" placeholder="job title" required minlength="4" maxlength="15">
										</div>
										<div class="form-group">
											<label>Job type</label>
											<input type="text" name="type" class="form-control" placeholder="Enter job type" required minlength="4" maxlength="25">
										</div>
										<div class="form-group">
											<label>Company Name</label>
											<input type="text" name="company_name" class="form-control" placeholder="Enter your company name" required minlength="4" maxlength="21">
										</div>
										<div class="form-group">
											<label>Company Email</label>
											<input type="text" name="email" class="form-control" placeholder="Enter your company email" required minlength="4" maxlength="25">
										</div>
										<div class="form-group">
											<label>Location</label>
											<input type="text" name="location" class="form-control" placeholder="Enter your org. location" required minlength="4" maxlength="15">
										</div>
										<div class="form-group">
											<label>Qualification</label>
											<input type="text" name="qualification" class="form-control" placeholder="Enter qualication required" required minlength="4" maxlength="25">
										</div>
										<div class="form-group">
											<label>Post</label>
											<input type="text" name="post" class="form-control" placeholder="Enter post to apply for" required minlength="4" maxlength="15">
										</div>
										
										<div class="form-group">
											<label>Experience</label>
											<input type="text" name="experience" class="form-control" placeholder="Enter your experience" required minlength="4" maxlength="25">
										</div>

										<div class="form-group">
											<label>No of people equired</label>
											<input type="text" name="employeesRequired" class="form-control" placeholder="Employees Required">
										</div>

										<div class="form-group">
											<label>Salary</label>
											<input type="text" name="salary" class="form-control" placeholder="Salary" required  maxlength="8">
										</div>

										<div class="form-group">
											<label>User ID</label>
											<input type="text" name="id" value="<?php echo $idvalue; ?>" class="form-control" placeholder="ID" readonly>
										</div>

										
										<div class="form-group">
											<label>Date to submit</label>
											<input type="date" name="date_to_submit"  class="form-control" placeholder="date" required minlength="4" maxlength="15">
										</div>
									
									<div class="text-right">
											<button type="submit" name ="submitbtn" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
										</div>


										
									</div>
								</div>
							</form>
<!-- 					<button onclick="window.location.href='logout.php'">   Log Out</button>
 -->						</div>
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
