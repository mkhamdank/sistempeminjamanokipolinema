<!DOCTYPE html>
<html lang="">
	<head>
		<title>Hasil</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	</head>
	<body>
		<nav class="navbar navbar-default">
  	<div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">FRAMEWORK</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Belajar Menghitung</a></li>
      <!-- <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li> -->
    </ul>
  </div>
</nav>
	<div class="jumbotron text-center" style="background-color: #FFD4FF">
		<h2><b>Hasil Hitung</b></h2>
		<h3>
			<?php echo $bil1.$pilihan.$bil2."=".$output; ?>
		</h3>
		<a href="<?php echo site_url('try/')?>"><b>Hitung Kembali</b>
	</div>
	</body>
</html>