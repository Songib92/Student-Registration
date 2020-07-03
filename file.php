<?php include_once "app/function.php"; ?>

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
	 * File Upload Rules
	 */
	if ( isset($_POST['submit']) ) {

		// File's Parts Name
		$file_name	= $_FILES['photo']['name'];
		$file_tmp	= $_FILES['photo']['tmp_name'];
		$file_size	= $_FILES['photo']['size'] /1024;
		
		}


	 ?>
	

	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
				<h2>Upload Your Photo</h2>
				<hr>
				
				<form action="" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<input name="photo" type="file">
					</div>				
					<div class="form-group">
						<input name="submit" class="btn btn-primary" type="submit" value="Upload">
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