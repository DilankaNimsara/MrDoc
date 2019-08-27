
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>User Settings</title>
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
			<a href="<?php echo base_url('login_controller/qacForm');?>" class="btn btn-default">QAC Settings</a>
			<div class="btn btn-warning">User Settings</div>
		</div>
	</div>

	<!--------------------------------------->
	<div class="container" style="margin-left:auto; width: 500px ">

		<div class="row">
			<div class="col-4"></div>
			<div class="col-4 box">
				<form method="post" action="<?php
				echo base_url();?>login_controller/user_Create_validation">

					<div class="form">
						<span class="form text-muted container text-primary" style="color: #f8fff4;"><h2><center>Create User Account</center></h2></span>
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
						<center><button type="submit" class="btn btn-primary" name="insert" value="Login">Create</button></center>
						<span class="text-danger"> <?php echo $this->session->flashdata("error")?></span>
					</div>
				</form>

			</div>
			<div class="col-4"></div>
		</div>

	</div>
	<!--------------------------------------->

</body>
</html>
