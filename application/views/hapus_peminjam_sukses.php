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
    <h1><font style="color: red">Hapus Daftar Peminjam BERHASIL!</font></h1>
    <p>
      <?php
        echo anchor('peminjaman_controller/delete_peminjam/'. $this->uri->segment(3),'<button type="button" class="btn btn-success">Hapus Peminjam Lagi</button>');
        echo "&nbsp";
        echo anchor('peminjaman_controller','<button type="button" class="btn btn-success">Lihat Daftar</button>');
      ?>
    </p>
</div>
  </div>
</div>

</body>
</html>