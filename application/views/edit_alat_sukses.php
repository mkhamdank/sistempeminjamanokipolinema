<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PMJ ALAT PASTI</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
</head>
<body style="background-color: black">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <img src="<?php echo base_url('assets/img/logo-resmi.png') ?>" width="95px" height="50px">
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo site_url('peminjaman_controller') ?>">Daftar Alat</a></li>
      <li><a href="<?php echo site_url('peminjaman_controller/rekap') ?>">Rekap Sebelum</a></li>
      <li><a href="<?php echo site_url('peminjaman_controller/history') ?>">List Peminjam</a></li>
      <!-- <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
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
<div class="jumbotron text-center" style="background-color: black;color: yellow";>
<div class="container">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <h1><font style="color: yellow">Edit Daftar Alat BERHASIL!</font></h1>
    <img src="<?php echo base_url('assets/img/stopnarkoba.png') ?>" width="95px">
    <p>
      <?php
        echo anchor('peminjaman_controller/update_dataalat/'. $this->uri->segment(3),'<button type="button" style="background-color:yellow" class="btn btn-default">Edit Daftar Lagi</button>');
        echo "&nbsp";
        echo anchor('peminjaman_controller','<button type="button" style="background-color:yellow" class="btn btn-default">Lihat Daftar</button>');
      ?>
    </p>
</div>
  </div>
</div>

</body>
</html>