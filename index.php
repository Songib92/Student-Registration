<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Student | Registration</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	<?php 

		/**
	 	* Student Reg Form
	 	*/
	 	if ( isset($_POST['submit']) ) {
	 	
	 		// Get Value From This Form
	 		$name 		= $_POST['sname'];
	 		$email 		= $_POST['email'];
	 		$pnumber 	= $_POST['pnumber'];
	 		$age 		= $_POST['age'];
	 	}

	 		/**
	 	 	* Age Calculate
	 	 	*/
	 		if ( $age >=18 && $age <=28 ) {
	 			$age_cal = true;
	 		}else{
	 			$age_cal = false;
	 		}

	 	/**
	 	 * Empty Field Checking
	 	 */
	 	if (empty($name) || empty($email) || empty($pnumber) || empty($age)) {
	 		$massage = "<p class='alert alert-danger'> আপনার সঠিক তথ্য দিয়ে ঘরগুলো পূরণ করুন !! <button class='close' data-dismiss='alert'>&times;</button></p>";
	 	}elseif($age_cal == false){
	 		$massage = "<p class='alert alert-warning'> আপনার বয়স সঠিক নয় !! <button class='close' data-dismiss='alert'>&times;</button></p>";
	 	} else{
	 		$massage = "<p class='alert alert-success'> ধন্যবাদ আপনার তথ্য পূরণ সম্পন্ন হয়েছে !! <button class='close' data-dismiss='alert'>&times;</button></p>";
	 	}

	 


	 ?>

	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
				<h2>Sign Up</h2>
				<?php 
				/**
				 * Massage Validation Setting
				 */
					if (isset($massage)) {
						echo $massage;
					}
				 ?>
				<form action="" method="POST">
					<div class="form-group">
						<label for="">Student Name</label>
						<input name="sname" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Phone Number</label>
						<input name="pnumber" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Age</label>
						<input name="age" class="form-control" type="text">
					</div>
					<div class="form-group">
						<input name="submit" class="btn btn-primary" type="submit" value="Add New Student">
					</div>
				</form>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>