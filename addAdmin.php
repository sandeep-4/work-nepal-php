<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Add Admin</title>
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
  include_once('app/adminFunctions.php');
  include_once('app/helperfunctions.php');

if (isset($_POST['submitbtn'])) {
		 if(insertAdmin($conn, $_POST)){
		 	echo"user created successfully";
		 	// showMsg('User Created Successfully');
		 	redirection('index.php');
	}else{
		echo "error";
	}
}
?>

	</div>
	
	<div class="page-container">

		
			<div class="content-wrapper">

				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							<br><br><br><br><hr>
							<h4 style="color: blue; text-align: center;"><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Admin shall fill the form to add another admin. </span></h4>
							<hr>
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
										<h5 class="panel-title">Fill out the information</h5>
										
									</div>

									<div class="panel-body">
									
										<div class="form-group">
											<label> Name</label>
											<input type="text" name="name" class="form-control" placeholder="Enter full name" required minlength="5" maxlength="21">
										</div>
										<div class="form-group">
											<label>Username</label>
											<input type="text" name="username" class="form-control" placeholder="Enter username" required minlength="5" maxlength="21">
										</div>
										<div class="form-group">
											<label>Password</label>
											<input type="password" name="password" class="form-control" placeholder="Enter password" required minlength="5" maxlength="21">
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
