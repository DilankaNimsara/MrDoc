<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>User Guide</title>
	<?php include 'header.php'; ?>
</head>
<body>
<div class="col-sm-2 ">
	<?php
	if ($this->session->userdata('username') != ''){
		include 'sidenav.php';
	}else{ ?>
		<?php
	}?>
</div>
<div class="col-sm-10 text-left">
	<!--- type heare---------->
	User Guide
</div>
</body>
</html>
