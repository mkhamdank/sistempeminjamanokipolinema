<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Peminjaman UKM PASTI</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">FRAMEWORK</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Data Alat</a></li>
      <!-- <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li> -->
    </ul>
  </div>
</nav>
<div class="jumbotron text-center" style="background-color: #daefee";>
      <h2><b>Data Alat</b></h2>
      <table class="table table-bordered text-center">
      <thread>
        <tr>
          <td>Kode Alat</td>
          <td>Nama Alat</td>
          <td>Jumlah Alat</td>
        </tr>
      </thread>
      <tbody>
        <?php foreach ($array as $key) {?>
        <tr>
          <td><?php echo $key['kodealat']?></td>
          <td><?php echo $key['namaalat']?></td>
          <td><?php echo $key['jumlahalat']?></td>
        </tr>
        <?php } ?>
      </tbody>
        
      </table>

</div>
</body>
</html>