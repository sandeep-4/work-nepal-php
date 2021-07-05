<?php
function redirect($path){

	header('location:'.$path); 
}
function checkUserLogin(){
	if(isset($_SESSION['username'])){
		return true;
	}
else{
	
	return false;
}
}
function checkAdminLogin(){
	if(isset($_SESSION['admin']['username'])){
		return true;
	}
else{
	
	return false;
}
}
 function dump($data){
 	echo "<pre>";
 	print_r($data);
 	echo "</pre>";
 }
 function redirection($path){
 	echo '<script>window.location.href="'.$path.'";</script>';
 }
 function showMsg($msg){
 	$_SESSION['msg']='<div class="alert alert-block alert-success">
									<button class="close" type="button" data-dismiss="alert">
										<i class="icon-remove"></i>
									</button>
									<i class="icon-ok green"></i>									
									<strong class="green">Error										
									</strong>
									'.$msg.'
								</div>';
 }

 function dateDifference($date1){
 	$today = date("Y-m-d"); 
 	$diff=date_diff($date1,$today);
 	return $diff;
 }
 ?>

