
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
	<div class="container" style="margin-left:auto; width: 500px ">
		<div class="row">
			<div class="col-4"></div>
			<div class="col-4 box">
				<form method="post" action="<?php echo base_url(); ?>login_controller/user_account_update_validation">

					<div class="form">
						<span class="form text-muted container" style="color: #f8fff4;"><h4><center>Change User Name and Password</center></h4></span>
						<div class="form-group">
							<label for="username">New Username</label>
							<input type="text" class="form-control" id="username" name="username"
								   placeholder="Enter username"/>
							<span class="text-danger"><?php echo form_error('username') ?></span>
						</div>
						<div class="form-group">
							<label for="password">New Password</label>
							<input type="password" class="form-control" name="password" id="password"
								   placeholder="Enter password"/>
							<span class="text-danger"><?php echo form_error('password') ?></span>
						</div>

						<div class="form-group">
							<label for="password">Confirm Password</label>
							<input type="password" class="form-control" name="new_password" id="password"
								   placeholder="Re-enter password"/>
							<span class="text-danger"><?php echo form_error('confirm password') ?></span>
						</div>

						<center><button type="submit" class="btn btn-primary" name="insert" value="Login">Update
							</button><center>
								<span class="text-danger"> <?php echo $this->session->flashdata("error") ?></span>
					</div>
				</form>

			</div>

		</div>

	</div>
</div>
</body>
</html>
