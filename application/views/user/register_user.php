<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PMJ ALAT OKI</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
</head>
<body style="background-color: #dddddd">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <img src="<?php echo base_url('assets/img/ukm.png') ?>" width="95px" height="50px">
    </div>
    <ul class="nav navbar-nav">
      <!-- <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li> -->
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <!-- <li><a href=""><b>Halo, <?php if(isset($username)){
        echo $username;
        } ?></b></a></li> -->
        <?php if (!ISSET($username)) { ?>
          <li><a href="<?php echo site_url('login_controller') ?>">Login</a></li>
        <?php } else if (ISSET($username)) { ?>
          <li><a href="<?php echo site_url('login_controller/logout') ?>">Logout</a></li>
        <?php } ?>
    </ul>
  </div>
</nav>
<div class="jumbotron text-center" style="background-color: #dddddd">
<div class="container">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    
    <?php echo form_open('user/register_user');?>
    <legend>REGISTER DATA USER</legend>
    <h5>Silahkan daftarkan data diri Anda sebelum meminjam.</h5>
    <?php echo validation_errors();?>
    <div class="form-group">
      <label>Nama</label>
      <input type="text" class="form-control" name="nama" placeholder="Nama">
      <label>NIM</label>
      <input type="text" class="form-control" name="nim" placeholder="NIM">      
      <label for="">UKM</label>
      <select name="fk_ukm" id="inputFk_ukm" class="form-control">
        <?php foreach ($ukm as $key) { ?>
          <option value="<?php echo $key->no_ukm ?>"><?php echo $key->nama_ukm ?></option>
        <?php } ?>
      </select>
    </div>
      <button type="submit" class="btn btn-default">Register</button>
      <?php echo form_close();?>
</div>
  </div>
</div>

</body>
</html>