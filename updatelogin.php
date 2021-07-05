<?php
session_start();
$msg='';




include 'app/call.php';
if(checkUserLogin()){
	redirect('index.php');
}
if(isset($_POST['updateloginbtn'])){
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	$id=$_POST['id'];
    $_SESSION['id']=$_POST['id'];
    $_SESSION['username']=$_POST['username'];


  $userId=selectUserId($conn,$id);

foreach($userId as $key=> $userids){
	 $userids;
}

]
	$stmtLogin=$conn->prepare("SELECT * FROM users WHERE username=:username AND password=:password AND id=:id");
	$stmtLogin->bindParam(':username', $username);
	$stmtLogin->bindParam(':password', $password);
	$stmtLogin->bindParam(':id', $userids);
	$stmtLogin->setFetchMode(PDO:: FETCH_ASSOC);
	if($stmtLogin->execute()){
		if($stmtLogin->rowcount()>0){
			$userInfo= $stmtLogin->fetchAll();
			
$_SESSION['userid']=$userids;
			redirect('editPost.php');
		}else
		 {
			$msg="Invalid username or password";
			echo ($msg);
		}
		
	}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Log in</title>

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
</head>

<body>

<div class="container">
  <div class="row">
    <div class="col">
    </div>
    <div class="col-6">
      	<div class="page-container login-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">

					<!-- Advanced login -->
					<form method="POST">
						<div class="panel panel-body login-form">
							<div class="text-center">
								<div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
								<h5 class="content-group">User Login</h5>
								<h6 style="color:red; font-size:20px; text-align:center;"> </h6>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="text" name="username" required class="form-control" placeholder="username">
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="password" name="password" required class="form-control" placeholder="password">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="text" name="id" required class="form-control" placeholder="id of news to update">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>

							<div class="form-group">
								<button type="submit" name="updateloginbtn" class="btn bg-blue btn-block">Login <i class="icon-arrow-right14 position-right"></i></button>
							</div>

							<div class="form-group login-options">
								<div class="row">
									<div class="col-sm-6">
										<label class="checkbox-inline">
											<input type="checkbox" class="styled" >
											Remember
										</label>
									</div>

									<div class="col-sm-6 text-right">
										<a href="login_password_recover.html">Forgot password?</a>
									</div>
								</div>
							</div>

							

							
					</form>
					<!-- /advanced login -->


					<!-- Footer -->
					<div class="footer text-muted">WorkNepal </a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Summer Project</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

    </div>
    <div class="col">
    </div>
  </div>

</div>

</body>
</html>
