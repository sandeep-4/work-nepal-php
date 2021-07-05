<?php
session_start();
$msg='';
include_once 'app/call.php';
include_once ('app/jobpostfunctions.php');
if(checkUserLogin()){
	redirect('index.php');
}
		if(isset($_GET['id'])){
         $id=$_GET['id'];


		$stmt=$conn->prepare(deletejobRegistrarions($conn,$id));
		$stmt->setFetchMode(PDO:: FETCH_ASSOC);

			$userInfo= $stmt->fetchAll();
			if(deletejobRegistrarions($conn,$id)){
				echo "Post deleted sucessfully";
							redirect('adminApprove.php');

			}else{
				echo "Sorry you cant delete";
			}
			
		
		
	}


?>

