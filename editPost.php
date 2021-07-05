<?php
session_start();
include 'app/call.php';
 $servername = "localhost";
$username = "root";
$password = "";

    $pdo = new PDO("mysql:host=$servername;dbname=merojob", $username, $password);
  if(isset($_GET['id'])){

      $id=$_GET['id'];
    $query= "SELECT * FROM post_job WHERE post_id=$id ";
  $result = $pdo->query($query);
    $result->setFetchMode(PDO::FETCH_ASSOC);
    while($row=$result->fetch()){
            $id= $row['post_id']; 
            $jobtitle= $row['job_title'];   
             $type= $row['type'];  
             $company=$row['company_name']; 
             $email=$row['email']; 
           $location= $row['location'];  
           $qualification=  $row['qualification']; 
           $post= $row['post'];  
           $experience=  $row['experience']; 
              $salary=       $row['salary'];

                    
    }

}

  
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Edit Post</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    
    
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <?php 
  include_once('app/userfunction.php');
  include_once('app/jobpostfunctions.php');
  include_once('app/helperfunctions.php');

if (isset($_POST['editbtn'])) {
		 if(updateEnteredJobById($conn, $id, $_POST)){
		 	echo"post updated successfully";
		 	redirection('userpage.php');
	}else{
		echo "error";
	}
}
?>

	</div>
	
	<div class="page-container">

		<div class="page-content">

			
			<div class="content-wrapper">

				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							<h4 style="color: blue;"><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Edit your job here </span></h4>
						</div>

						
					</div>

					
				</div>


				<div class="content">

					<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-6">

							<form action="#" method="POST">
								<div class="panel panel-flat">
									<div class="panel-heading">
										<h5 class="panel-title">Fill out the job requirements</h5>
										
									</div>

									<div class="panel-body">
									
										<div class="form-group">
											<label>Job title</label>
											<input type="text" name="job_title" class="form-control" value="<?php  echo $jobtitle; ?>"></input>
										</div>
										<div class="form-group">
											<label>Job type</label>
											<input type="text" name="type" class="form-control" value="<?php  echo $type; ?>">
										</div>
										<div class="form-group">
											<label>Company Name</label>
											<input type="text" name="company_name" class="form-control" value="<?php  echo $company; ?>">
										</div>
										<div class="form-group">
											<label>Email</label>
											<input type="text" name="email" class="form-control" value="<?php  echo $email; ?>">
										</div>
										<div class="form-group">
											<label>Location</label>
											<input type="text" name="location" class="form-control" value="<?php  echo $location; ?>">
										</div>
										<div class="form-group">
											<label>Qualification</label>
											<input type="text" name="qualification" class="form-control" value="<?php  echo $qualification; ?>">
										</div>
										<div class="form-group">
											<label>Post</label>
											<input type="text" name="post" class="form-control" value="<?php  echo $post; ?>">
										</div>
										
										<div class="form-group">
											<label>Experience</label>
											<input type="text" name="experience" class="form-control" value="<?php  echo $experience; ?>">
										</div>

										<div class="form-group">
											<label>Salary</label>
											<input type="text" name="salary" class="form-control" value="<?php  echo $salary; ?>">
										</div>

									  
									
					
										<div class="text-right">
											<button type="submit" name ="editbtn" class="btn btn-primary">Update <i class="icon-arrow-right14 position-right"></i></button>
										</div>


										
									</div>
								</div>
							</form>
						</div>
						<div class="col-md-3"></div>

					

										
									</div>
								</div>
							</form>

						</div>

						
				

				</div>

			</div>

		</div>

	</div>

</body>
</html>
