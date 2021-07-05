<?php

$servername = "localhost";
$username = "root";
$password = "";
try {
    $conn = new PDO("mysql:host=$servername;dbname=merojob", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if(isset($_GET['id'])){

      $id=$_GET['id'];
      // echo $id;
         $query= "SELECT * FROM approvepost WHERE post_id=$id";


  $result = $conn->query($query);
    $result->setFetchMode(PDO::FETCH_ASSOC);
                 while($row=$result->fetch()){
                             $post_id=$row['post_id'];
                             $id=$row['id'];
                             $job_title=$row['job_title'];
                             $type=$row['type'];
                             $company_name=$row['company_name'];
                             $email=$row['email']; 
                             $location=$row['location'];
                             $qualification=$row['qualification'];
                             $post=$row['post'];
                             $experience=$row['experience'];
                             $employeesRequired=$row['employeesRequired'];
                             $salary=$row['salary'];
                             $date_to_submit=$row['date_to_submit'];



    $stmtinsert=$conn->prepare("INSERT INTO post_job (`id`,`job_title`,`type`,`company_name`,`email`,`location`,`qualification`,`post`,`experience`,`employeesRequired`,`salary`,`date_to_submit`) VALUES (:id,:job_title, :type, :company_name,:email ,:location, :qualification, :post, :experience,:employeesRequired, :salary,:date_to_submit)");

	$stmtinsert->bindParam(':id',$id);
	$stmtinsert->bindParam(':job_title',$job_title);
	$stmtinsert->bindParam(':type', $type);
	$stmtinsert->bindParam(':company_name', $company_name);
	$stmtinsert->bindParam(':email', $email);
	$stmtinsert->bindParam(':location', $location);
	$stmtinsert->bindParam(':qualification', $qualification);
	$stmtinsert->bindParam(':post', $post);
	$stmtinsert->bindParam(':experience', $experience);
	$stmtinsert->bindParam(':employeesRequired', $employeesRequired);
	$stmtinsert->bindParam(':salary', $salary);
    $stmtinsert->bindParam(':date_to_submit', $date_to_submit);

	$stmtinsert->execute();
// echo "Approved  !!!";

$stmtdelete=$conn->prepare("DELETE FROM approvepost WHERE  post_id=:post_id");
    $stmtdelete->bindParam(':post_id',$post_id);
    $stmtdelete->execute();
     header('location:adminApprove.php');
}
}
}

catch(PDOException $e)
    {
    echo  $e->getMessage();
    }

	
	



?>