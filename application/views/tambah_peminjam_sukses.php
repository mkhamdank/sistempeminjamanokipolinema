<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PMJ ALAT PASTI</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">P A S T I</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Daftar Alat dan Peminjam</a></li>
      <!-- <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li> -->
    </ul>
  </div>
</nav>
<div class="jumbotron text-center" style="background-color: pink";>
<div class="container">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <h2>SUKSES</h2>
    <p>
      <?php
        echo anchor('peminjaman_controller/create_peminjam','<button type="button" class="btn btn-info">Masukkan Daftar</button>');
        echo "&nbsp";
        echo anchor('peminjaman_controller','<button type="button" class="btn btn-info">Lihat Daftar</button>');
      ?>
    </p>
</div>
  </div>
</div>

</body>
</html>