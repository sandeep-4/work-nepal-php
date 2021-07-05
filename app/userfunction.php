<?php
 include_once('app/connect.php');

function insertUser($conn, $data){
	$data['password']=md5($data['password']);
$stmtinsert=$conn->prepare("INSERT INTO users (`fname`,`lname`,`username`,`email`,`password`,`phone`) VALUES (:fname, :lname, :username, :email, :password, :phone)");

	$stmtinsert->bindParam(':fname', $data['fname']);
	$stmtinsert->bindParam(':lname', $data['lname']);
    $stmtinsert->bindParam(':username', $data['username']);
	$stmtinsert->bindParam(':email', $data['email']);
	 $stmtinsert->bindParam(':password', $data['password']);
	$stmtinsert->bindParam(':phone', $data['phone']);
	if ($stmtinsert->execute()) {
		return true;
	}else{
	return false;
}
return false;
}
function updateUser($conn, $data){
	$stmtupdate=$conn->prepare("UPDATE users SET fname=:fname, lname=:lname,username=:username, email=:email, password=:password, phone=:phone   WHERE id=:id");

	$stmtupdate->bindParam(':fname', $data['fname']);
	$stmtupdate->bindParam(':lname', $data['lname']);
	$stmtupdate->bindParam(':username', $data['username']);
	$stmtupdate->bindParam(':email', $data['email']);
	$stmtupdate->bindParam(':password', $data['password']);
	$stmtupdate->bindParam(':phone', $data['phone']);
	if ($stmtupdate->execute()) {
		return true;
	}
	return false;
}
 function getAllUsers($conn){
 	$stmtSelect = $conn->prepare("SELECT * FROM users");
 	$stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetchAll();
 }
   function getById($conn, $id){
 	$stmtSelect = $conn->prepare("SELECT * FROM users where id=:id");
 	$stmtSelect->bindParam(':id',$id);
 	$stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetch();
 }
  function deleteUser($conn, $id){
	$stmtdelete=$conn->prepare("DELETE FROM users WHERE id=:id ");
	$stmtdelete->bindParam(':id', $id);
	if ($stmtdelete->execute()) {

		return true;
	}
	return false;
}


function countAll($conn)
{
	$stmtSelect = $conn->prepare("SELECT * FROM users");
	$stmtSelect->execute();
	return $stmtSelect->rowCount();
}
function aunthenciationOfCredientials($conn,$data){
	$data['password']=md5($data['password']);
	$stmtAunthenciate=$conn->prepare("SELECT * FROM users WHERE username=:username AND password=:password");
	$stmtAunthenciate->bindParam(':username', $data['username']);
	$stmtAunthenciate->bindParam(':password', $data['password']);
	$stmtAunthenciate->execute();
	$stmtAunthenciate->setFetchMode(PDO:: FETCH_ASSOC);
	return $stmtAunthenciate->fetch();
	
		
}