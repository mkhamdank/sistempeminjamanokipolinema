<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PMJ ALAT OKI</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
<style type="text/css">
      #home-sec { 
  
    
      background: url(<?php echo base_url();?>assets/img/PASTI.png) no-repeat;
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
<body style="background-color: #dddddd ">
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <img src="<?php echo base_url('assets/img/ukm.png') ?>" width="95px" height="50px">
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo site_url('admin_ukm_controller') ?>">HOME</a></li>
      <!-- <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li> -->
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <?php if (ISSET($username)): ?>
        <li><a href="<?php echo site_url('login_controller/logout') ?>" style="color: black">Logout</a></li>
      <?php endif ?>
    </ul>
  </div>
</nav>
<div>
    <div class="container">
        <legend>REKAP PEMINJAMAN <?php foreach ($ukm as $key) {
          echo $key->nama_ukm;
        } ?></legend>
        <div class="table-responsive">
          <table class="table table-condensed">
            <thead>
              <tr>
                <th>Nama Alat</th>
                <th>Jumlah</th>
                <th>Kondisi</th>
                <th>Gambar</th>
                <th>Batas Pinjam (Hari)</th>
                <th>Nama Peminjam</th>
                <th>NIM Peminjam</th>
                <th>Nama Penanggungjawab</th>
                <th>CP Penanggungjawab</th>
                <th>UKM</th>
                <th>Kegiatan</th>
                <th>Surat</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Jaminan</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
                <?php foreach ($peminjaman as $key) { ?>
                    <tr>
                        <td><?php echo $key->nama_alat ?></td>
                        <td><?php echo $key->jml ?></td>
                        <td><?php echo $key->kondisi_alat ?></td>
                        <td><?php echo $key->gambar_alat ?></td>
                        <td><?php echo $key->batas_pinjam ?></td>
                        <td><?php echo $key->nama ?></td>
                        <td><?php echo $key->nim ?></td>
                        <td><?php echo $key->nama_pjawab ?></td>
                        <td><?php echo $key->cp_pjawab ?></td>
                        <td><?php echo $key->nama_ukm ?></td>
                        <td><?php echo $key->kegiatan ?></td>
                        <td><?php echo $key->surat ?></td>
                        <td><?php echo $key->tgl_pinjam ?></td>
                        <td><?php echo $key->tgl_kembali ?></td>
                        <td><?php echo $key->jaminan ?></td>
                        <td><?php echo $key->status ?></td>
                    </tr>
                <?php } ?>
            </tbody>
          </table>
        </div>
    </div>
</div>
<div id="footer">
    Copyright OKI JOSS 2017 | Aynraini dan Dinda
</div>


    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js"></script>
    
</body>
</html>