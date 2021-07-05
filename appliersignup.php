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
  include_once('app/appliersfunction.php');

if (isset($_POST['appliersbtn'])) {
		 if(insertappliersLogin($conn, $_POST)){
		 	echo"applier created successfully";
		 	redirection('index.php');
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
					<div class="page-header-content">
						<div class="page-title">
							<h4 style="color: blue; text-align: center;"><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Fill the form to create you apllying account </span></h4>
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
										<h5 class="panel-title" style="color: red;">Appliers sign up</h5>
										
									</div>

									<div class="panel-body">
									
										<div class="form-group">
											<label>Full Name</label>
											<input type="text" name="fullName" class="form-control" placeholder="Full Name" required minlength="5" maxlength="21">
										</div>
										<div class="form-group">
											<label>Username</label>
											<input type="text" name="username" class="form-control" placeholder="Username  "required minlength="5" maxlength="21">
										</div>
										<div class="form-group">
											<label>Password</label>
											<input type="password" name="password" class="form-control" placeholder="Password" required minlength="5" maxlength="21">
										</div>
										<div class="form-group">
											<label>Phone</label>
											<input type="text" name="phone" class="form-control" placeholder="Phone" required minlength="10" maxlength="10">
										</div>
										
					
										<div class="text-right">
											<button type="submit" name ="appliersbtn" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
										</div>


										
									</div>
								</div>
							</form>
							<!-- /basic layout -->
						</div>
						<div class="col-md-3"></div>

						
					<!-- /vertical form options -->


					<!-- Centered forms -->
					

						

										
									</div>
								</div>
							</form>
							<!-- /basic legend -->

						</div>

						
					<!-- /fieldset legend -->


					<!-- 2 columns form -->
					
					<!-- /2 columns form -->


					<!-- Footer -->
				
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
