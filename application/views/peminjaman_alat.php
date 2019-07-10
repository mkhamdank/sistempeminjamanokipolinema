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
      <li><a href="<?php echo site_url('peminjaman_controller') ?>">Daftar Alat</a></li>
      <li class="active"><a href="<?php echo site_url('peminjaman_controller/rekap') ?>">Rekap Sebelum</a></li>
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
<div class="jumbotron text-center" style="background-color: black"> 
<div class="container">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background-color: black">
    
      <h2 style="color: yellow"><b>Daftar Peminjaman Alat UKM PASTI</b></h2>
      <img src="<?php echo base_url('assets/img/stopnarkoba.png') ?>" width="95px"><br><br>
        <table class="table table-bordered text-center" style="color: yellow">
          <thead>
            <tr>
              <td><b>Nama Peminjam</b></td>
              <td><b>NIM</b></td>
              <td><b>Nama Sekber</b></td>
              <td><b>Nama Alat</b></td>
              <td><b>Jumlah</b></td>
              <td><b>Nama Kegiatan</b></td>
              <td><b>Surat</b></td>
              <td><b>Jaminan</b></td>
              <td><b>No Telp</b></td>
              <td><b>Tanggal Pinjam</b></td>
              <td><b>Tanggal Kembali</b></td>
              <td><b>Aksi</b></td>
            </tr>
          </thead>
          <tbody>
          <?php foreach ($peminjaman as $key) {?>
            <tr>
              <td><?php echo $key->nama_peminjam?></td>
              <td><?php echo $key->nim_peminjam?></td>
              <td><?php echo $key->namasekber?></td>
              <td><?php echo $key->namaalat?></td>
              <td><?php echo $key->jumlah_alat?></td>
              <td><?php echo $key->nama_kegiatan?></td>
              <td><?php echo $key->surat?></td>
              <td><?php echo $key->jaminan?></td>
              <td><?php echo $key->no_telp?></td>
              <td><?php echo $key->tanggal_pinjam?></td>
              <td><?php echo $key->tanggal_kembali?></td>
              <td><a href="<?php echo site_url('peminjaman_controller/kembalikan/'.$key->nim_peminjam.'/'.$key->fk_alat);?>" class="btn btn-default">Kembalikan</a></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
        

      <br>

      <!-- <h2 style="color: yellow"><b>Daftar Peminjam</b></h2>
      <table class="table table-bordered text-center" style="color: yellow">
      <thread>
        <tr>
          <td><b>Nama Peminjam</b></td>
          <td><b>Nama Sekber</b></td>
          <td><b>No Hp</b></td>
          <td><b>Aksi</b></td>

        </tr>
      </thread>
      <tbody>
        <?php foreach ($array_peminjam as $key) {?>
        <tr>
          <td><?php echo $key['namapeminjam']?></td>
          <td><?php echo $key['namasekber']?></td>
          <td><?php echo $key['nohp']?></td>
          <td><a href="<?php echo site_url('peminjaman_controller/edit_peminjam/'.$key['idpeminjam']);?>" class="btn btn-default">Edit</a> <a href="<?php echo site_url('peminjaman_controller/delete_peminjam/'.$key['idpeminjam']);?>" class="btn btn-default">Delete</a></td>
        </tr>
        <?php } ?>
      </tbody>
        
      </table> -->

</div>
  </div>
</div>

</body>
</html>