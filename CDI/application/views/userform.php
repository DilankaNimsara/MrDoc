
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
			<a href="<?php echo base_url('Home/manageAccount');?>" class="btn btn-default">Admin Settings</a>
			<a href="<?php echo base_url('Home/qacForm');?>" class="btn btn-default">QAC Settings</a>
			<div class="btn btn-warning">User Settings</div>
		</div>
	</div>

</body>
</html>
