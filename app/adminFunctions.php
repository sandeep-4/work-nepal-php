<?php
 include_once('app/connect.php');



   function getAdminUserById($conn, $id){
 	$stmtSelect = $conn->prepare("SELECT * FROM adminpannel where id=:id");
 	$stmtSelect->bindParam(':id',$id);
 	$stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetch();
 }
  function deleteAdminUser($conn, $id){
	$stmtdelete=$conn->prepare("DELETE FROM adminpannel WHERE id=:id");
	$stmtdelete->bindParam(':id', $id);
	if ($stmtdelete->execute()) {
		return true;
	}
	return false;
}


function countAllAdmin($conn){
	$stmtSelect = $conn->prepare("SELECT * FROM adminpannel");
	$stmtSelect->execute();
	return $stmtSelect->rowCount();
}


function deleteUserByAdmin($conn,$id){
$stmtdelete=$conn->prepare("DELETE FROM users WHERE id=:id ");
	$stmtdelete->bindParam(':id', $id);
	if ($stmtdelete->execute()) {

		return true;
	}
	return false;
}
function insertAdmin($conn, $data){
	$data['password']=md5($data['password']);
$stmtinsert=$conn->prepare("INSERT INTO adminpannel (`name`,`username`,`password`) VALUES (:name, :username, :password)");

	$stmtinsert->bindParam(':name', $data['name']);
	$stmtinsert->bindParam(':username', $data['username']);
    $stmtinsert->bindParam(':password', $data['password']);
	if ($stmtinsert->execute()) {
		return true;
	}else{
	return false;
}
return false;
}