<?php
session_start();
$msg='';
include_once 'app/call.php';
include_once ('app/jobpostfunctions.php');
// $usernameCheck=$_SESSION['username'];
if(checkUserLogin()){
	redirect('index.php');
}
if(isset($_GET['id'])){

      $id=$_GET['id'];

			if(deletejobRegistrarions($conn,$id)){
				echo "Post deleted sucessfully";
							redirect('userpage.php');

			}else{
				echo "invalid username or password";
			}
			
		}
		
?>

