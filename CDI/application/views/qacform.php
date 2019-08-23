
<!doctype html>
<html>
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
			<a href="<?php echo base_url('Home/manageAccount');?>" class="btn btn-default">Admin Settings</a>
			<div class="btn btn-warning">QAC Settings</div>
			<a href="<?php echo base_url('Home/userForm');?>" class="btn btn-default">User Settings</a>
		</div>
	</div>

</body>
</html>
