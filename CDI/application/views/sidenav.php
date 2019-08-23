<?php
/*
switch (title()){

	case 1:
		$class1="active";
		print 'c';
		break;
	case 2:
		$class2="active";
		break;
}
*/

?>
	<style>
		.row.content {height: 400px}
		.sidenav {
			padding: 15px;
			background-color: rgb(30, 33, 36, 0.95);
			height: 150%;
		}
		@media screen and (max-width: 767px) {
			.row.content {height: auto;}
		}
	</style>
<nav>
<div class="container-fluid">
	<div class="row content">
		<div class="sidenav hidden-xs">
			<h2><a href="<?php echo base_url('Home/menupage')?>" style="color: #5a6268">Menu</a></h2>
			<ul class="nav nav-pills nav-stacked">
				<li class="<?php //echo $class1 ;?>"><a href="<?php echo base_url('Home/index')?>">Home</a></li>
				<li class="<?php //echo $class2;?>"><a href="<?php echo base_url('Home/viewDocument')?>">View Document</a></li>
				<li><a href="#section2">Edit Document</a></li>
				<li><a href="#section3">Upload Document</a></li>
				<li><a href="#section3">Manage Accounts</a></li>
			</ul><br>
		</div>
</div>
</div>
</nav>


