<style>
	.avatar {
		vertical-align: middle;
		width: 40px;
		height: 40px;
		border-radius: 50%;
	}

	.bd{
		padding-top: 10%;
		padding-right: 5px;
	}

</style>
<script
	src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

<link href="<?php echo base_url(); ?>/public/css/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>/public/css/all.min.css" rel="stylesheet" type="text/css">

<nav class="navbar navbar-inverse">
	<div class="container-fluid" style="color:mediumturquoise;">
		<div class="navbar-header" >
			<a class="navbar-brand" style="color:red;">MrDoc</a>
		</div>
		<ul class="nav navbar-nav">
			<li ><a href="<?php echo site_url('Home/index');?>">Home</a></li>
			<li><a href="#">User Guide</a></li>
			<li><a href="#" >Contacts</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li>
				<div class="bd">
					<?php
					// user icon image
					if($this->session->userdata('username') != ''){?>
						<img src="<?php echo base_url('public/img/user.png')?>" alt="Avatar" class="avatar"><?php
					}
					?>
				</div>
			</li>
			<li>
				<?php
				if ($this->session->userdata('username') != ''){
					?>
					<a class="navbar-brand" style="color:#f8fff4; font-size:1.6rem;">
						<?php
						echo ' Logged as ';
						// display user name on the header
						echo $this->session->userdata('username');
						?>
					</a>
					<?php
				}else{
				?>
				<a href="<?php echo site_url('login_controller/login');?>"name="submit" value="submit"  style="color:mediumturquoise;">
					<span class="glyphicon glyphicon-log-in"></span><?php
					echo ' Login ';
					}?></a>
			</li>
			<li><a href="<?php echo site_url('login_controller/logout');?>"name="submit" value="submit"  style="color:mediumturquoise;">
					<?php
					if ($this->session->userdata('username') != ''){
						//display logout button after logging
						echo 'Log Out';
					}else{
						echo '';
					}?></a>
			</li>

		</ul>
	</div>
</nav>
</nav>
