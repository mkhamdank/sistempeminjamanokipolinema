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
      <li class="active"><a href="<?php echo site_url('admin_controller') ?>">HOME</a></li>
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
        <legend>DATA SEMUA USER</legend>
        <a href="<?php echo site_url('admin_controller/create_user') ?>" class="btn btn-default">Tambah User</a>
        <div class="table-responsive">
          <table class="table table-condensed">
            <thead>
              <tr>
                <th>Username</th>
                <th>Password</th>
                <th>Level</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                <?php foreach ($datauser as $key) { ?>
                    <tr>
                        <td><?php echo $key->username ?></td>
                        <td><?php echo $key->password ?></td>
                        <td><?php $level = $key->level;
                        if ($level == 1) {
                            echo "Admin";
                        }
                        else if ($level == 2) {
                            echo "Admin UKM";
                        }
                        else if ($level == 3) {
                            echo "User";
                        } ?></td>
                        <td>
                          <a href="<?php echo site_url('admin_controller/edit_user/'.$key->id) ?>" class="btn btn-default">Edit</a>
                          <a href="<?php echo site_url('admin_controller/delete_user/'.$key->id) ?>" class="btn btn-default">Delete</a></td>
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