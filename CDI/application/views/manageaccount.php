<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Manage Account</title>
	<?php include 'header.php'; ?>
	<style>
		.sidenav1 {
			background-color: transparent;
			height: 100%;
		}

	</style>
</head>
<body>
<div class="container-fluid ">
	<div class="row content">
		<div class="col-sm-2 ">
			<!-- content -->
			<?php include 'sidenav.php' ?>
		</div>
		<div class="col-sm-8 text-left">
			<!-- content -->
			<br/>
			<div class="btn-group btn-group-justified">
				<a class="btn btn-warning">Admin Settings</a>
				<a href="<?php echo base_url('Home/qacForm'); ?>" class="btn btn-default">QAC Settings</a>
				<a href="<?php echo base_url('Home/userForm'); ?>" class="btn btn-default">User Settings</a>
			</div>
			<br/>
			<h1>User Accounts and Passwords</h1>
			<br>
			<table align="center" class="table table-hover" style="width: 50%; ">
				<thead>
				<tr>
					<th>User Name</th>
					<th>Password</th>
				</tr>
				</thead>
				<tbody>
				<?php

				if($fetch_data->num_rows()>0){
					foreach ($fetch_data->result() as $row){
						?>
						<tr>
							<td><?php echo $row->username;?></td>
							<td><?php echo $row->password;?></td>
						</tr>
					<?php
					}
				}else{

				}

				?>
				</tbody>
			</table>
		</div>

		<!-- content -->
		<div class="col-sm-2 sidenav1">

			<div class="container" style="margin-left:auto; width: 230px ">
				<div class="row">
					<div class="col-4"></div>
					<div class="col-4 box">
						<form method="post" action="<?php echo base_url(); ?>Home/update_data">

							<div class="form">
								<span class="form text-muted container" style="color: #f8fff4;"><h4><center>Change User Name and Password</center></h4></span>
								<div class="form-group">
									<label for="username">New Username</label>
									<input type="text" class="form-control" id="username" name="username"
										   placeholder="Enter username"/>
									<span class="text-danger"><?php echo form_error('password') ?></span>
								</div>
								<div class="form-group">
									<label for="password">New Password</label>
									<input type="password" class="form-control" name="password" id="password"
										   placeholder="Enter password"/>
									<span class="text-danger"><?php echo form_error('password') ?></span>
								</div>

								<div class="form-group">
									<label for="password">Confirm Password</label>
									<input type="password" class="form-control" name="password" id="password"
										   placeholder="Re-enter password"/>
									<span class="text-danger"><?php echo form_error('password') ?></span>
								</div>

								<button type="submit" class="btn btn-primary" name="insert" value="Login">Update
								</button>
								<span class="text-danger"> <?php echo $this->session->flashdata("error") ?></span>
							</div>
						</form>

					</div>
					<div class="col-4"></div>
				</div>

			</div>


		</div>
	</div>
</div>


</body>
</html>
