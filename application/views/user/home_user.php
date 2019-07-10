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
      <li class="active"><a href="<?php echo site_url('user') ?>">HOME</a></li>
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
        <legend class="text-center">SELAMAT DATANG DI PEMINJAMAN ALAT OKI POLINEMA</legend>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <a href="<?php echo site_url('dataukm/kmk') ?>">
            <div class="jumbotron" style="height: 250px ">
              <div class="container">
                <img src="<?php echo base_url('assets/img/logo/kmk.png') ?>" width="100px" height="100px">
                <legend class="text-center">KMK</legend>
              </div>
            </div>
            </a>
        </div>
        
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <a href="<?php echo site_url('dataukm/kompen') ?>">
            <div class="jumbotron" style="height: 250px ">
              <div class="container">
                <img src="<?php echo base_url('assets/img/logo/kompen.png') ?>" width="100px" height="100px">
                <legend class="text-center">LPM Kompen</legend>
              </div>
            </div>
            </a>
        </div>

        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <a href="<?php echo site_url('dataukm/bkm') ?>">
            <div class="jumbotron" style="height: 250px ">
              <div class="container">
                <img src="<?php echo base_url('assets/img/logo/bkm.png') ?>" width="100px" height="100px">
                <legend class="text-center">BKM</legend>
              </div>
            </div>
            </a>
        </div>

        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <a href="<?php echo site_url('dataukm/or') ?>">
            <div class="jumbotron" style="height: 250px ">
              <div class="container">
                <img src="<?php echo base_url('assets/img/logo/or.png') ?>" width="100px" height="100px">
                <legend class="text-center">Olahraga</legend>
              </div>
            </div>
            </a>
        </div>

        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <a href="<?php echo site_url('dataukm/pasti') ?>">
            <div class="jumbotron" style="height: 250px ">
              <div class="container">
                <img src="<?php echo base_url('assets/img/logo/pasti.png') ?>" width="100px" height="100px">
                <legend class="text-center">PASTI</legend>
              </div>
            </div>
            </a>
        </div>

        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <a href="<?php echo site_url('dataukm/plfm') ?>">
            <div class="jumbotron" style="height: 250px ">
              <div class="container">
                <img src="<?php echo base_url('assets/img/logo/plfm.png') ?>" width="100px" height="100px">
                <legend class="text-center">PLFM</legend>
              </div>
            </div>
            </a>
        </div>

        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <a href="<?php echo site_url('dataukm/rispol') ?>">
            <div class="jumbotron" style="height: 250px ">
              <div class="container">
                <img src="<?php echo base_url('assets/img/logo/rispol.png') ?>" width="100px" height="100px">
                <legend class="text-center">RISPOL</legend>
              </div>
            </div>
            </a>
        </div>

        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <a href="<?php echo site_url('dataukm/talitakum') ?>">
            <div class="jumbotron" style="height: 250px ">
              <div class="container">
                <img src="<?php echo base_url('assets/img/logo/talitakum.png') ?>" width="100px" height="100px">
                <legend class="text-center">Talitakum</legend>
              </div>
            </div>
            </a>
        </div>

        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <a href="<?php echo site_url('dataukm/teater') ?>">
            <div class="jumbotron" style="height: 250px ">
              <div class="container">
                <img src="<?php echo base_url('assets/img/logo/teater.png') ?>" width="100px" height="100px">
                <legend class="text-center">Theatristic</legend>
              </div>
            </div>
            </a>
        </div>

        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <a href="<?php echo site_url('dataukm/usma') ?>">
            <div class="jumbotron" style="height: 250px ">
              <div class="container">
                <img src="<?php echo base_url('assets/img/logo/usma.png') ?>" width="100px" height="100px">
                <legend class="text-center">USMA</legend>
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