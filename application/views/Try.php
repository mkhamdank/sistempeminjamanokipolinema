<!DOCTYPE html>
<html lang="">
	<head>
		<title>Menghitung</title>
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

<div class="jumbotron text-center" style="background-color: #55FFAA">
	<h2><b>Berhitung...</b></h2>
	<br>
	<form action="<?php echo site_url('try/output');?>"></form>
	Bilangan 1 : <input type="text" name="bil1"/><br/><br/>
	Bilangan 2 : <input type="text" name="bil2"/><br/><br/>
	<select name="pilihan">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
	</select><br/><br/>
	<input type="submit" name="Hituuung">
	</form>
	</div>
	</body>
</html>