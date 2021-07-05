<?php
session_start();
$msg='';
include 'app/call.php';


if(isset($_GET['id'])){
	$id=$_GET['id'];
	$_SESSION['id']=$id;
if(isset($_POST['appliersbtn'])){
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	$_SESSION['users']=$username;
	$stmtLogin=$conn->prepare("SELECT * FROM appliers WHERE username=:username AND password=:password");
	$stmtLogin->bindParam(':username', $username);
	$stmtLogin->bindParam(':password', $password);
	$stmtLogin->setFetchMode(PDO:: FETCH_ASSOC);
	if($stmtLogin->execute()){
		if($stmtLogin->rowcount()>0){
			$userInfo= $stmtLogin->fetchAll();
			$_SESSION['user'] ['username']=$userInfo['username'];
			$_SESSION['user'] ['password']=$userInfo['password'];
			// $_SESSION['user'] ['fname']=$userInfo['fname'];
			redirect('applyform.php');
		}else
		 {
			$msg="Invalid username or password";
		}
		
	}

}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="css/animate.css">

	<link rel="stylesheet" type="text/css" href="css/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="css/select2.min.css">
	
	<link rel="stylesheet" type="text/css" href="css/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/job1.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					 Login to Apply
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" method="POST">
<h5 style="color: red; text-align: center;"><?php echo $msg; ?></h5>
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="User name" required  maxlength="21">
					</div>
<hr>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password" required maxlength="21">
					</div>
					<hr>
					<hr>
			
					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" name="appliersbtn">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	

	<script src="js/jquery-3.3.1.min.js"></script>

	<script src="js/animsition.min.js"></script>

	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<script src="select2.min.js"></script>

	<script src="js/moment.min.js"></script>
	<script src="js/daterangepicker.js"></script>

	<script src="js/countdowntime.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
