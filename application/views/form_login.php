<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PMJ ALAT PASTI</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
</head>
<body style="background-color: #dddddd ">
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <img src="<?php echo base_url('assets/img/ukm.png') ?>" width="95px" height="50px">
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">LOGIN</a></li>
      <!-- <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li> -->
    </ul>
    
  </div>
</nav>
<div class="jumbotron text-center" style="background-color: #dddddd ">
	<div class="container text-center">
	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
		
	</div>
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			<?php echo form_open('login_controller') ?>
				<?php echo validation_errors(); ?>
				<p><h2><b>LOGIN</b></h2></p>
				
				<label>Username</label>
				<input type="text" name="username" placeholder="Username" class="form-control">
				<label>Password</label>
				<input type="password" name="password" placeholder="Password" class="form-control">
				<br>
				<button class="btn btn-default"><b>LOGIN</b></button><br><br>
				<a  class="btn btn-default" href="<?php echo site_url('user/create') ?>"><b>REGISTER USER</b></a><br><br>
				<a  class="btn btn-default" href="<?php echo site_url('') ?>"><b>BATAL</b></a>

			<?php echo form_close(); ?>
		</div>
	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
		
	</div>
	</div>
</div>
</body>
</html>