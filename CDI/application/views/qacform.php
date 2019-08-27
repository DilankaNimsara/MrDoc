
<!doctype html>
<html xmlns="http://www.w3.org/1999/html">
<head>
	<meta charset="utf-8">
	<title>QAC Settings</title>
	<?php include 'header.php';?>
</head>
<body>

<div class="col-sm-2">
	<?php include 'sidenav.php';?>
</div>
<div class="col-sm-10 text-left">
	<!-- content -->
	<br/>
	<div class="container">
		<div class="btn-group btn-group-justified">
			<a href="<?php echo base_url('login_controller/manageAccount');?>" class="btn btn-default">Admin Settings</a>
			<div class="btn btn-warning">QAC Settings</div>
			<a href="<?php echo base_url('login_controller/userForm');?>" class="btn btn-default">User Settings</a>
		</div>
	</div>

	<!---------------------------------------------------------------------------------->

	<?php
	//if ($this->uri->segment(2)=="qacinserted"){
		//echo "<br/>";
		//echo "<span style=\"font-size: 30px;\" class=\"text-success\">";
		//echo "QAC Account has been created";
		//echo "</span>";
	//}
	?>

	<div class="container" style="margin-left:auto; width: 500px ">

		<div class="row">
			<div class="col-4 box">
				<form method="post" action="<?php
				echo base_url();?>login_controller/QAC_Create_validation">

					<div class="form">
						<span class="form text-muted container text-primary" style="color: #f8fff4;"><h2><center>Create QAC Account</center></h2></span>
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" class="form-control" id="username" name="username" placeholder="Enter username"/>
							<span class="text-danger"><?php echo form_error('username')?></span>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" name="password" id="password" placeholder="Enter password"/>
							<span class="text-danger"><?php echo form_error('password')?></span>
						</div>
						<br/>
						<center><button type="submit" class="btn btn-primary" name="insert" value="insert">Create</button></center>
						<span class="text-danger"> <?php echo $this->session->flashdata("error")?></span>
					</div>
				</form>

			</div>
			<div class="col-4"></div>
		</div>

	</div>

	<!------------------------------------------------------------->
</div>

</body>
</html>
