<?php
function insertappliedjobs($conn, $data){
	
	$stmtinsert=$conn->prepare("INSERT INTO apply (`post_id`,`fname`,`lname`,`email`,`education`,`experience`,`skills`,`languages`) VALUES (:post_id,:fname, :lname, :email, :education, :experience, :skills, :languages)");
	$stmtinsert->bindParam(':post_id', $data['post_id']);
    $stmtinsert->bindParam(':fname', $data['fname']);
	$stmtinsert->bindParam(':lname', $data['lname']);
	$stmtinsert->bindParam(':email', $data['email']);
	$stmtinsert->bindParam(':education', $data['education']);
	$stmtinsert->bindParam(':experience', $data['experience']);
	$stmtinsert->bindParam(':skills', $data['skills']);
	$stmtinsert->bindParam(':languages', $data['languages']);

	if ($stmtinsert->execute()) {
		return true;
	}
	return false;
}
function getAllAppliedjobs($conn){
 	$stmtSelect = $conn->prepare("SELECT * FROM apply");
 	$stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetchAll();
 }
