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
<div class="jumbotron" style="background-color: black"> 
<div class="container">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background-color: black;color: yellow">
    
      <h2 style="color: yellow" class="text-center"><b>Peminjaman Alat UKM PASTI</b></h2>
      <div class="col-lg-12 text-center">
        <img src="<?php echo base_url('assets/img/stopnarkoba.png') ?>" width="95px">
      </div>
      <?php echo form_open('peminjaman_controller/pinjam/'.$this->uri->segment(3));?>
      <legend style="color: yellow" class="text-center">Pinjam Alat</legend>
      <?php echo validation_errors();?>
      
        <div class="form-group">
          <label for="">Nama Peminjam</label>
          <input type="text" class="form-control" id="" name="namapeminjam" placeholder="Nama Peminjam">
          <label for="">NIM</label>
          <input type="text" class="form-control" id="" name="nim_peminjam" placeholder="NIM">
          <label for="">Nama Sekber</label>
          <input type="text" class="form-control" id="" name="namasekber" placeholder="Nama Sekber">
          <label for="">Nama Alat</label>
          <select name="namaalat" id="namaalat" class="form-control">
            <?php foreach ($alat->result_array() as $key) { ?>
              <option value="<?php echo $key['kodealat'] ?>"><?php echo $key['namaalat'] ?></option>
            <?php } ?>
          </select>
          <label for="">Jumlah Alat</label>
          <input type="text" class="form-control" id="" name="jumlah_alat" placeholder="Jumlah Alat">
          <label for="">Nama Kegiatan</label>
          <input type="text" class="form-control" id="" name="nama_kegiatan" placeholder="Nama Kegiatan">
          <label for="">Surat Peminjaman</label>
          <select name="surat" id="inputSurat" class="form-control" required="required">
            <option value="Ada">Ada</option>
            <option value="Tidak Ada">Tidak Ada</option>
          </select>
          <label for="">Jaminan</label>
          <select name="jaminan" id="inputSurat" class="form-control" required="required">
            <option value="KTM">KTM</option>
            <option value="Tidak Ada">Tidak Ada</option>
          </select>
          <label for="">No Telp</label>
          <input type="text" name="no_telp" id="inputNo_telp" class="form-control" placeholder="No Telp">
          <label for="">Tanggal Pinjam</label>
          <input type="date" name="tanggal_pinjam" id="inputTanggal_pinjam" class="form-control" required="required" title=""  value="<?php echo date("Y-m-d") ?>">
          <label for="">Tanggal Kembali</label>
          <input type="date" class="form-control" id="" name="tanggal_kembali" placeholder="Tanggal Kembali" value="<?php echo date("Y-m-d") ?>">
        </div>
      
        
      
        <button type="submit" class="btn btn-default" style="background-color: yellow">Pinjam</button>
      <?php echo form_close(); ?>


</div>
  </div>
</div>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</body>
</html>