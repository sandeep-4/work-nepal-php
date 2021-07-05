<?php
function insertjobInfo($conn, $data){
	
	$stmtinsert=$conn->prepare("INSERT INTO approvepost (`id`,`job_title`,`type`,`company_name`,`email`,`location`,`qualification`,`post`,`experience`,`employeesRequired`,`salary`,`date_to_submit`) VALUES (:id,:job_title, :type, :company_name,:email ,:location, :qualification, :post, :experience,:employeesRequired, :salary,:date_to_submit)");

	$stmtinsert->bindParam(':id', $data['id']);
	$stmtinsert->bindParam(':job_title', $data['job_title']);
	$stmtinsert->bindParam(':type', $data['type']);
	$stmtinsert->bindParam(':company_name', $data['company_name']);
	$stmtinsert->bindParam(':email', $data['email']);
	$stmtinsert->bindParam(':location', $data['location']);
	$stmtinsert->bindParam(':qualification', $data['qualification']);
	$stmtinsert->bindParam(':post', $data['post']);
	$stmtinsert->bindParam(':experience', $data['experience']);
	$stmtinsert->bindParam(':employeesRequired', $data['employeesRequired']);
	$stmtinsert->bindParam(':salary', $data['salary']);
    $stmtinsert->bindParam(':date_to_submit', $data['date_to_submit']);

	if ($stmtinsert->execute()) {
		return true;
	}
	return false;
}


function ApprovedinsertjobInfo($conn, $data){
	
	$stmtinsert=$conn->prepare("INSERT INTO post_job (`id`,`job_title`,`type`,`company_name`,`email`,`location`,`qualification`,`post`,`experience`,`employeesRequired`,`salary`,`date_to_submit`) VALUES (:id,:job_title, :type, :company_name,:email ,:location, :qualification, :post, :experience,:employeesRequired, :salary,:date_to_submit)");

	$stmtinsert->bindParam(':id', $data['id']);
	$stmtinsert->bindParam(':job_title', $data['job_title']);
	$stmtinsert->bindParam(':type', $data['type']);
	$stmtinsert->bindParam(':company_name', $data['company_name']);
	$stmtinsert->bindParam(':email', $data['email']);
	$stmtinsert->bindParam(':location', $data['location']);
	$stmtinsert->bindParam(':qualification', $data['qualification']);
	$stmtinsert->bindParam(':post', $data['post']);
	$stmtinsert->bindParam(':experience', $data['experience']);
	$stmtinsert->bindParam(':employeesRequired', $data['employeesRequired']);
	$stmtinsert->bindParam(':salary', $data['salary']);
    $stmtinsert->bindParam(':date_to_submit', $data['date_to_submit']);

	if ($stmtinsert->execute()) {
		return true;
	}
	return false;
}

function getAlljobs($conn){
 	$stmtSelect = $conn->prepare("SELECT * FROM post_job");
 	$stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetchAll();
 }

function countAlljobs($conn)
{
	$stmtSelect = $conn->prepare("SELECT * FROM post_job ");
	$stmtSelect->bindParam(':location', $location);
	$stmtSelect->execute();
	return $stmtSelect->rowCount();
}

 function updateEnteredJobById($conn, $id, $data){
// $username=$_SESSION['user']['username'];

 	$stmtUpdate = $conn->prepare("UPDATE post_job SET job_title=:job_title ,type=:type ,company_name=:company_name,email=:email, location=:location ,qualification=:qualification ,post=:post,experience=:experience ,salary=:salary,date_to_submit=:date_to_submit WHERE post_id=:post_id");
 	
 	$stmtUpdate->bindParam(':post_id',$id);
 	$stmtUpdate->bindParam(':job_title', $data['job_title']);
	$stmtUpdate->bindParam(':type', $data['type']);
	$stmtUpdate->bindParam(':company_name', $data['company_name']);
    $stmtUpdate->bindParam(':email', $data['email']);
	$stmtUpdate->bindParam(':location', $data['location']);
	$stmtUpdate->bindParam(':qualification', $data['qualification']);
	$stmtUpdate->bindParam(':post', $data['post']);
	$stmtUpdate->bindParam(':experience', $data['experience']);
	$stmtUpdate->bindParam(':salary', $data['salary']);
	$stmtUpdate->bindParam(':date_to_submit', $data['date_to_submit']);
	
 	if($stmtUpdate->execute()){
 		return true;
 	}
 	else
 		return "sorry you cant edit";

 }
 function getEnteredjobById($conn, $id){

 	$stmtSelect = $conn->prepare("SELECT * FROM post_job where post_id=:post_id");
 	$stmtSelect->bindParam(':post_id',$id);
 	$stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	$_data=$stmtSelect->fetch();


	return $_data;
}

 function deletejobRegistrarions($conn,  $id){
	$stmtdelete=$conn->prepare("DELETE FROM post_job WHERE  post_id=:post_id");
	$stmtdelete->bindParam(':post_id',$id);
	if ($stmtdelete->execute()) {
		return true;
	}
	return false;
}
 function deletejobRegistrarionsApproval($conn,  $id){
	$stmtdelete=$conn->prepare("DELETE FROM approvepost WHERE  post_id=:post_id");
	$stmtdelete->bindParam(':post_id',$id);
	if ($stmtdelete->execute()) {
		return true;
	}
	return false;
}




function getalljob($conn){
	$stmtget=$conn->prepare("SELECT * FROM post_job");
	$stmtget->execute();
	$stmtget->setFetchMode(PDO::FETCH_ASSOC);
 	$_data=$stmtget->fetch();
 	return $data;
}


function selectUserId($conn,$id){
	$stmtLogin=$conn->prepare("SELECT id FROM post_job WHERE post_id=:post_id");
	$stmtLogin->bindParam(':post_id', $id);
	$stmtLogin->execute();
	$stmtLogin->setFetchMode(PDO:: FETCH_ASSOC);
	return $stmtLogin->fetch();
// foreach ($id as $key => $ids) {
// // echo $ids;
// 	# code...
// 	$postid=$ids;
// }
}