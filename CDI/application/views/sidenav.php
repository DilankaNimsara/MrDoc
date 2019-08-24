<?php

?>
	<style>
		.row.content {height: 450px}

		.sidenav {
			padding: 20px;
			background-color: rgb(30, 33, 36, 0.95);
			height: 150%;
		}
		@media screen and (max-width: 767px) {
			.row.content {height: auto;}
		}
		.navbar {
			margin-bottom: 0;
			border-radius: 0;
		}

		@media screen and (max-width: 767px) {
			.sidenav {
				height: auto;
				padding: 15px;
			}
			.row.content {height:auto;}
		}


	</style>

<nav>

	<div class="row content">
		<div class="sidenav hidden-xs">
			<h2><a href="<?php echo base_url('Home/menupage')?>" style="color: #5a6268">Menu</a></h2>
			<ul class="nav nav-pills nav-stacked">
				<li class="<?php //echo $cl ;?>"><a href="<?php echo base_url('Home/index')?>">Home</a></li>
				<li class="<?php //echo $cl;?>"><a href="<?php echo base_url('Home/viewDocument')?>">View Document</a></li>
				<li><a href="#section2">Edit Document</a></li>
				<li><a href="#section3">Upload Document</a></li>
				<li><a href="<?php echo base_url('login_controller/manageAccount');?>">Manage Accounts</a></li>
			</ul><br>
		</div>
</div>

</nav>


