<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets\css\bootstrap.min.css">

	<meta charset="utf-8">
</head>
<body>
<div class="jumbotron text-center">
<div class="container text-center">
<h1> Kalkulator Ajaib!</h1>
<form action="<?php echo site_url('calculator/hasil_hitung');?>" method="POST">
	angka pertama : &nbsp <input type="text" name="angka1"/><br/><br/>
	angka kedua : &nbsp &nbsp &nbsp <input type="text" name="angka2"/><br/><br/>
	<select name="pilih hitung">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
	</select><br/><br/>
	<input type="submit" name="hitung">
</form>
</div>
</div>
</body>
</html>