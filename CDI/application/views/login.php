<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<?php include 'header.php';?>
</head>

<body>

<div class="container" style="margin-left:auto; width: 500px ">

	<div class="row">
		<div class="col-4"></div>
		<div class="col-4 box">
			<form method="post" action="<?php
			echo base_url();?>login_controller/login_validation">

				<div class="form">
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
					<div class="form-group">
						<label for="type">Account type</label>
						<select class="form-control" name="type">
							<option name="type" value="admin">Admin</option>
							<option name="type" value="QAC">QAC</option>
							<option name="type" value="User">User</option>
						</select>
						<!--<input type="text" class="form-control" name="type" id="type" placeholder="Enter type"/>-->
						<span class="text-danger"><?php echo form_error('type')?></span>
					</div>
					<div class="form-group form-check">
						<a href="#">Forgot Password?</a>
					</div>
					<button type="submit" class="btn btn-primary" name="insert" value="Login">Login</button>
					<span class="text-danger"> <?php echo $this->session->flashdata("error")?></span>
				</div>
			</form>

		</div>
		<div class="col-4"></div>
	</div>

</div>
</body>
</html>

