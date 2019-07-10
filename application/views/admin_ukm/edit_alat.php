<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PMJ ALAT OKI</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
</head>
<body style="background-color: #dddddd ">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <img src="<?php echo base_url('assets/img/ukm.png') ?>" width="95px" height="50px">
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo site_url('admin_ukm_controller') ?>">HOME</a></li>
      <!-- <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li> -->
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <!-- <li><a href=""><b>Halo, <?php if(isset($username)){
        echo $username;
        } ?></b></a></li> -->
        <?php if (!ISSET($username)) { ?>
          <li><a href="login_controller">Login</a></li>
        <?php } else if (ISSET($username)) { ?>
          <li><a href="<?php echo site_url('login_controller/logout') ?>">Logout</a></li>
        <?php } ?>
    </ul>
  </div>
</nav>
<div class="jumbotron text-center" style="background-color: #dddddd ">
<div class="container">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <?php echo form_open('admin_ukm_controller/edit_alat/'.$this->uri->segment(3));?>
    <legend>EDIT DATA ALAT</legend>
    <?php echo validation_errors();?>
    <div class="form-group">
      <?php foreach ($alat as $key) { ?>
      <label>Nama Alat</label>
      <input type="text" class="form-control" name="nama_alat" value="<?php echo $key->nama_alat ?>">
      <label>Jumlah Alat</label>
      <input type="text" class="form-control" name="jumlah_alat" value="<?php echo $key->jumlah_alat ?>">
      <label>Kondisi Alat</label>
      <input type="text" class="form-control" name="kondisi_alat" value="<?php echo $key->kondisi_alat ?>">
      <label>Batas Pengembalian (Hari)</label>
      <input type="text" class="form-control" name="batas" value="<?php echo $key->batas_pinjam ?>">
      <?php } ?>
    </div>
      <button type="submit" class="btn btn-default">Edit Data</button>
      <?php echo form_close();?>
</div>
  </div>
</div>

</body>
</html>