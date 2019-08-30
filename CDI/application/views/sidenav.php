<?php

$actual_link = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
$url= basename($actual_link);

?>

<nav>

	<div class="row content">
		<div class="sidenav hidden-xs">
			<h2><a href="<?php echo base_url('Home/menupage')?>" class="menucolor"><span class="glyphicon glyphicon-th"></span> Menu</a></h2>
			<ul class="nav nav-pills nav-stacked">
				<li class="<?php if($url == "index"){echo 'active';} ?>"><a href="<?php echo base_url('Home/index')?>"><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span> Home</a></li>
				<li class="<?php if($url == "viewDocument"){echo 'active';} ?>"><a href="<?php echo base_url('Home/viewDocument')?>">View Document <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-search"></span></a></li>
				<li><a href="#section2" > Edit Document <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-edit"></span></a></li>
				<li><a href="#section3"> Upload Document<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-upload"></span></a></li>
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
					?>"><a href="<?php echo base_url();?>login_controller/manageAccount">Manage Accounts<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>
					</li>
					<?php
				}elseif ($this->session->userdata('type')=='QAC'){
					?>
					<li class="<?php if($url == "QACaccountUpdate"){echo 'active';} ?>"><a href="<?php echo base_url();?>login_controller/QACaccountUpdate"><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span>Account Settings</a></li>
					<?php
				}elseif ($this->session->userdata('type')=='User'){
					?>
					<li class="<?php if($url == "useraccountupdate"){echo 'active';} ?>"><a href="<?php echo base_url();?>login_controller/useraccountupdate"><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span>Account Settings</a></li>
					<?php
				}
				?>


			</ul><br>
		</div>
</div>

</nav>
