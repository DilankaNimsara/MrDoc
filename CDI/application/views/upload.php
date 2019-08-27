<!doctype html>
<html>
<head>


	<?php
	include "connection.php";


	if (isset($_POST['submit'])) {

		$category = $_POST["category"];
		$year = $_POST["year"];
		$academic_year = $_POST["academic_year"];
		$subject_code = $_POST["subject_code"];


		$file = rand(1000, 100000) . "-" . $_FILES['file']['name'];
		$file_loc = $_FILES['file']['tmp_name'];
		$file_size = $_FILES['file']['size'];
		$file_type = $_FILES['file']['type'];
		$folder = "uploads/";

		// new file size in KB
		$new_size = $file_size / 1024;
		// new file size in KB

		// make file name in lower case
		$new_file_name = strtolower($file);
		// make file name in lower case

		$final_file = str_replace(' ', '-', $new_file_name);

		if (move_uploaded_file($file_loc, $folder . $final_file)) {

			$sql = "insert into fileupload (category,year,academic_year,subject_code,file) values('$category','$year','$academic_year','$subject_code','$final_file') ";

			mysqli_query($conn, $sql);

			if ($conn->query($sql) === TRUE) {
				echo "New record created successfully";
			} else {

			}

		}
	}

	?>


	<meta charset="utf-8">
	<title>Home</title>
	<link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/all.min.css" rel="stylesheet" type="text/css">
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>

<body>
<div class="container-fluid">
	<nav class="navbar navbar-expand-lg sticky-top navbar-light" style="background-color: #e7e49730">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
				class="navbar-toggler-icon"></span></button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active"><a class="nav-link" href="index.php">Home <span
							class="sr-only">(current)</span></a></li>
				<li class="nav-item"><a class="nav-link" href="#">User Manual</a></li>
			</ul>
			<a href="login.php" class="btn btn-primary btn-sm btn-space">SignIn</a>

			<a href="signup.php" class="btn btn-primary btn-sm btn-space">SignUp</a>
		</div>
	</nav>


	<div class="row">
		<div class="col-4"></div>
		<div class="col-4 box">
			<form method="POST" enctype="multipart/form-data>
					<div class=" form
			">
			<fieldset class="form-group"><br>
				<div class="row">
					<legend class="col-form-label col-sm-4 pt-0">Category</legend>
					<div class="col-sm-8">
						<div class="form-check">
							<input class="form-check-input" type="radio" name="category" id="gridRadios1"
								   value="orientation" checked>
							<label class="form-check-label" for="gridRadios1">Orientation</label>

						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="category" id="gridRadios2"
								   value="UGraduate">
							<label class="form-check-label" for="gridRadios2">Under Graduate</label>

						</div>
						<div class="form-check disabled">
							<input class="form-check-input" type="radio" name="category" id="gridRadios3"
								   value="PGraduate">
							<label class="form-check-label" for="gridRadios3">Post Graduate</label>

						</div>
					</div>
				</div>
			</fieldset>
			<div class="form-group row">
				<label for="year" class="col-sm-4 col-form-label">Year</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="year" placeholder="year" name="year">
				</div>
			</div>
			<div class="form-group row">
				<label for="academicyear" class="col-sm-4 col-form-label">Academic year</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="academicyear" placeholder="academic year"
						   name="academic_year">
				</div>
			</div>
			<div class="form-group row">
				<label for="subject" class="col-sm-4 col-form-label">Subject code</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="subject" placeholder="subject code" name="subject_code">
				</div>
			</div>
			<div class="form-group row">
				<label for="file" class="col-sm-4 col-form-label">Select File</label>
				<div class="col-sm-6">
					<input type="file" class="file-input" id="file" name="file" accept="application/pdf">

				</div>
			</div>

			<div class="form-group row">
				<div class="col-sm-10">
					<center>
						<button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit</button>
					</center>
				</div>
			</div>
		</div>
		<div class="col-4"></div>
	</div>

</div>
</form>
</body>
</html>
