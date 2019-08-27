<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
	<link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
<link href="public/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="public/css/style.css" rel="stylesheet" type="text/css">
<link href="public/css/all.min.css" rel="stylesheet" type="text/css">
<script src="public/js/jquery-3.4.1.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
</head>

<body>
	<?php

	if(isset($_POST['submit'])){

		$adminname=$_POST['adminname'];
		$adminpassword=$_POST['adminpassword'];

		$conn=mysqli_connect("localhost","root","");
		if (!$conn) {
			?>
			<script>
  				alert('Could not connect');
        	</script>
        	<?php
		}

		$sql="create database mrdoc";
		
		if (mysqli_query($conn,$sql)) {
			?>
			<script>
				<?php redirect(base_url() . 'login_controller/login');?>
  				alert('Database is created');
        	</script>
			<?php

			$link=mysqli_connect("localhost","root","","mrdoc");

			$sql2 = "CREATE TABLE user(
		    username VARCHAR(20) NOT NULL PRIMARY KEY,
		    password VARCHAR(20) NOT NULL
		    type VARCHAR(20) NOT NULL
			)";  

			if(mysqli_query($link,$sql2)){
				//echo "Your Table Created !!";  
			}else{
				?>
				<script>
		  			alert('Someting went wrong ');
		        </script>
		        <?php
			}

			$sql1 = "CREATE TABLE fileupload(
		    file VARCHAR(250) NOT NULL PRIMARY KEY,
		    category VARCHAR(30) NOT NULL,
		    year INT NOT NULL,
		    academic_year VARCHAR(70) NOT NULL,
		    subject_code VARCHAR(70) NOT NULL
			)";  

			if(mysqli_query($link,$sql1)){
				//echo "Your Table Created !!";  
			}else{
				?>
				<script>
		  			alert('Someting went wrong');
		        </script>
		        <?php
				//echo "Someting went wrong";
			}

			$sql3 = "INSERT INTO user (username,password) VALUES ('$adminname', '$adminpassword','admin')";

			if(mysqli_query($link,$sql3)){
				//echo "inserted !!";  	
			}else{
				?>
				<script>
		  			alert('Someting went wrong');
		        </script>
		        <?php
			}


		}else{
			?>
			<script>
  				alert('Error creating Database ');
        	</script>
			<?php
		}
	}

	?>

	<br>
	<form method="POST">
	<table border="0" align="center" width="50%">
		<tr height="100">
			<th colspan="2"><h3><center>Database Settings</center></h3></th>
		</tr>
		<tr>
			<td>Database Name</td>
			<td valign="50">
				<div class="col-sm-8">
					<input type="text" class="form-control" placeholder="mrdoc" name="dbname" readonly >
				</div>
			</td>
		</tr>
		<tr>
			<td>Server Name</td>
			<td valign="50">
				<div class="col-sm-8">
					<input type="text" class="form-control" placeholder="localhost" name="servername" readonly>
				</div>
			</td>
		</tr>
		<tr>
			<td>User Name</td>
			<td valign="50">
				<div class="col-sm-8">
					<input type="text" class="form-control" placeholder="root" name="username" readonly>
				</div>
			</td>
		</tr>
		<tr>
			<td>Password</td>
			<td valign="50">
				<div class="col-sm-8">
					<input type="text" class="form-control" placeholder="" name="password" readonly>
				</div>
			</td>
		</tr>
		<tr>
			<td colspan="2" height="100"><center><h3> Create Admin Account</h3></center></td>
		</tr>
		<tr>
			<td>User name</td>
			<td valign="50">
				<div class="col-sm-8">
					<input type="text" class="form-control" placeholder="Admin" name="adminname">
				</div>
			</td>
		</tr>
		<tr>
			<td>Password</td>
			<td valign="50">
				<div class="col-sm-8">
					<input type="text" class="form-control" placeholder="Password" name="adminpassword">
				</div>
			</td>
		</tr>
		<tr>
			<td colspan="2" height="100"><center><button type="submit" class="btn btn-primary" name="submit" value="Submit">Create</button></center></td>
		</tr>
		
		</table>
	</form>


	
</body>
</html>
