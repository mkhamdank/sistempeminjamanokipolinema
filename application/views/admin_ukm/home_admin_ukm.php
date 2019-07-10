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
<body style="background-color: #dddddd ">
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <img src="<?php echo base_url('assets/img/ukm.png') ?>" width="95px" height="50px">
    </div>
    <ul class="nav navbar-nav">
      <!-- <li class="active"><a href="#"></a></li> -->
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
      <h1>UKM <?php foreach ($ukm as $key) {
        echo $key->nama_ukm;
      } ?></h1>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <a href="<?php echo site_url('admin_ukm_controller/dataalat') ?>">
            <div class="jumbotron">
              <div class="container">
                <h4>DATA ALAT</h4>
              </div>
            </div>
            </a>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <a href="<?php echo site_url('admin_ukm_controller/datapeminjaman') ?>">
            <div class="jumbotron">
              <div class="container">
                <h4>DATA PEMINJAMAN</h4>
              </div>
            </div>
            </a>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <a href="<?php echo site_url('admin_ukm_controller/rekap_peminjaman') ?>">
            <div class="jumbotron">
              <div class="container">
                <h4>REKAP PEMINJAMAN</h4>
              </div>
            </div>
            </a>
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