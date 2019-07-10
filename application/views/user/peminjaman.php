<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PMJ ALAT OKI</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
<style type="text/css">
      #home-sec { 
  
    
      background: url(<?php echo base_url();?>assets/img/ukm.png) no-repeat;
      background-attachment: fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      width: 100%;
      display: block;
      height: auto;
      padding-top:210px;
      min-height:650px;
      color:#fff;
}
    </style>
    <!-- <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" /> -->
    <!-- FONTAWESOME STYLE CSS -->
    <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--ANIMATED FONTAWESOME STYLE CSS -->
    <link href="<?php echo base_url();?>assets/css/font-awesome-animation.css" rel="stylesheet" />
     <!--PRETTYPHOTO MAIN STYLE -->
    <link href="<?php echo base_url();?>assets/css/prettyPhoto.css" rel="stylesheet" />
       <!-- CUSTOM STYLE CSS -->
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    
</head>
<body style="background-color: #dddddd">
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <img src="<?php echo base_url('assets/img/ukm.png') ?>" width="95px" height="50px">
    </div>
    <ul class="nav navbar-nav">
      <li><a href="<?php echo site_url('user') ?>">HOME</a></li>
      <!-- <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li> -->
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <?php if (ISSET($username)): ?>
        <li><a href="<?php echo site_url('login_controller/logout') ?>">Logout</a></li>
      <?php endif ?>
    </ul>
  </div>
</nav>
<div>
    <div class="container">
      <legend class="text-center"><b>PEMINJAMAN ALAT KMK POLINEMA</b></legend>
      <?php echo form_open('peminjaman/index/'.$this->uri->segment(3)); ?>
      <?php echo validation_errors(); ?>
          <?php foreach ($alat as $key){ ?>
          <label>Nama Alat</label>
          <input type="text" name="fk_alat" class="form-control" placeholder="Nama Alat" value="<?php echo $key->nama_alat ?>" disabled>
          <input type="hidden" name="fk_alat" class="form-control" placeholder="Nama Alat" value="<?php echo $key->nama_alat ?>">
          <label>Jumlah ALat</label>
          <input type="text" name="jumlah_alat" class="form-control" placeholder="Jumlah Alat">
          <label>Kondisi</label>
          <input type="hidden" name="kondisi_alat" class="form-control" placeholder="Kondisi" value="<?php echo $key->kondisi_alat ?>">
          <input type="text" name="kondisi_alat" class="form-control" placeholder="Kondisi" value="<?php echo $key->kondisi_alat ?>" disabled>
          <label>Kegiatan</label>
          <input type="text" name="kegiatan" class="form-control" placeholder="Kegiatan">
          <label>Surat</label>
          <select name="surat" id="input" class="form-control">
            <option value="Ada">Ada</option>
            <option value="Tidak Ada">Tidak Ada</option>
          </select>
          <label>Jaminan</label>
          <input type="text" name="jaminan" class="form-control" placeholder="Jaminan">
          
          <br><br><br>
          <button type="submit" class="btn btn-default">Pinjam</button>
      <?php echo form_close(); ?>
      <?php } ?>
    </div>
</div>
<br><br><br>
<div id="footer">
    Copyright OKI JOSS 2017 | Aynraini dan Dinda
</div>


    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js"></script>
    
</body>
</html>