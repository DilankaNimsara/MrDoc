<?php

$actual_link = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
$url= basename($actual_link);

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
				<li class="<?php if($url == "index"){echo 'active';} ?>"><a href="<?php echo base_url('Home/index')?>">Home</a></li>
				<li class="<?php //echo $cl;?>"><a href="<?php echo base_url('Home/viewDocument')?>">View Document</a></li>
				<li><a href="#section2">Edit Document</a></li>
				<li><a href="#section3">Upload Document</a></li>
				<?php
				if($this->session->userdata('type')=='admin'){
				?>
					<li class="<?php if($url == "manageAccount"){
						echo 'active';
					}elseif ($url == "qacForm"){
						echo 'active';
					}elseif ($url == "userForm"){
						echo 'active';
					}
					?>"><a href="<?php echo base_url()?>login_controller/manageAccount">Manage Accounts</a>
					</li>
					<?php
				}elseif ($this->session->userdata('type')=='QAC'){
					?>
					<li class="<?php if($url == "QACaccountUpdate"){echo 'active';} ?>"><a href="<?php echo base_url()?>login_controller/QACaccountUpdate">Account Settings</a></li>
					<?php
				}elseif ($this->session->userdata('type')=='User'){
					?>
					<li class="<?php if($url == "useraccountupdate"){echo 'active';} ?>"><a href="<?php echo base_url()?>login_controller/useraccountupdate">Account Settings</a></li>
					<?php
				}
				?>


			</ul><br>
		</div>
</div>

</nav>
