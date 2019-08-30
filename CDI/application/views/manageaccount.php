<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Manage Account</title>
	<?php include 'header.php'; ?>

</head>
<body>
<div class="container-fluid ">
	<div class="row content">
		<div class="col-sm-2 ">
			<!-- content -->
			<?php include 'sidenav.php' ?>
		</div>
		<div class="col-sm-7 text-left">
			<!-- content -->
			<br/>
			<div class="btn-group btn-group-justified">
				<a class="btn btn-primary">Admin Settings</a>
				<a href="<?php echo base_url('login_controller/qacForm'); ?>" class="btn btn-info btn-primary">QAC Settings</a>
				<a href="<?php echo base_url('login_controller/userForm'); ?>" class="btn btn-info">User Settings</a>
			</div>
			<br/>
			<h1>User Accounts and Passwords</h1>
			<br>
			<!-- search -->
			<div class="search-container" align="right">
				<form action="#">
					<table>
						<tr>
							<td><input type="text" placeholder="Search.." name="search" class="form-control"></td>
							<td style="padding-left: 10px;">
								<button type="submit" class="btn btn-primary">Search</button>
							</td>
						</tr>
					</table>
				</form>
			</div>
			<!-- search -->
			<br/>
			<table align="center" class="table table-hover" style="width: 90%; ">
				<thead>
				<tr>
					<th>User Name</th>
					<th>Password</th>
					<th>Account type</th>
					<th>E-mail</th>
					<th>Delete</th>
				</tr>
				</thead>
				<tbody>
				<?php

				if ($fetch_data->num_rows() > 0) {
					foreach ($fetch_data->result() as $row) {

						if ($row->type == 'admin') {
							echo "<tr bgcolor='mediumturquoise'>";
						} else {
							echo "<tr>";
						}
						?>
						<td><?php echo $row->username; ?></td>
						<td><?php echo $row->password; ?></td>
						<td><?php echo $row->type; ?></td>
						<td><?php echo $row->email; ?></td>
						<?php
						if ($row->type != 'admin') {
							?>
							<td><a href="#" class="delete_data " id="<?php echo $row->username; ?>">Delete</a></td>
							<?php
						}else{
							?>
							<td><a href="#" class="delete_data " id="<?php echo $row->username; ?>"></a></td>
							<?php
						}
						?>

						</tr>
						<?php
					}
				} else {

				}

				?>
				</tbody>
			</table>
		</div>

		<script>
            $(document).ready(function () {
                $('.delete_data').click(function () {
                    var id = $(this).attr("id");
                    if (confirm("Are you sure,You want to delete this")) {
                        window.location = "<?php echo base_url(); ?>login_controller/delete_data/" + id;
                    } else {
                        return false;
                    }

                })
            });
		</script>


		<!-- content -->
		<div class="col-sm-3 sidenav1">

			<div class="container" style="margin-left:auto; width: 230px ">
				<div class="row">
					<div class="col-4"></div>
					<div class="col-4">
						<form method="post"
							  action="<?php echo base_url(); ?>login_controller/admin_account_update_validation">

							<div class="form">
								<span class="form container" style="color: #f8fff4;"><h4><center>Change User Name and Password</center></h4></span>
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

								<center>
									<button type="submit" class="btn btn-primary" name="insert" value="Login">Update
									</button>
									<center>
										<span
											class="text-danger"> <?php echo $this->session->flashdata("error") ?></span>
							</div>
						</form>

					</div>

				</div>

			</div>


		</div>
	</div>
</div>


</body>
</html>

