<?php
function insertappliersLogin($conn, $data){
	$data['password']=md5($data['password']);
	$stmtinsert=$conn->prepare("INSERT INTO appliers (`fullName`,`username`,`password`,`phone`) VALUES (:fullName, :username, :password, :phone)");

	$stmtinsert->bindParam(':fullName', $data['fullName']);
	$stmtinsert->bindParam(':username', $data['username']);
	$stmtinsert->bindParam(':password', $data['password']);
	$stmtinsert->bindParam(':phone', $data['phone']);

	if ($stmtinsert->execute()) {
		return true;
	}else{
	return false;
}
}
 function updateAppliers($conn, $id, $data){


 	$stmtUpdate = $conn->prepare("UPDATE appliers SET fullName=:fullName ,username=:username , ,password=:password,phone=:phone  WHERE id=:id AND username=:username");
 	
 	$stmtUpdate->bindParam(':id',$id);
 	$stmtUpdate->bindParam(':fullName', $data['fullName']);
	$stmtUpdate->bindParam(':username', $data['username']);
	$stmtUpdate->bindParam(':password', $data['password']);
    $stmtUpdate->bindParam(':phone', $data['phone']);
 	if($stmtUpdate->execute()){
 		return true;
 	}
 	else
 		return false;

 }