<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets\css\bootstrap.min.css">
</head>
<body>
<div class="jumbotron text-center">
<div class="container text-center">
<h1> Hasil perhitungan </h1>
<h3> 
<?php echo $angka1.$pilih_hitung.$angka2."=".$hasil_hitung?>
</h3>
<a href="<?php echo site_url('calculator/hitung');?>"><< Kembali menghitung</a>
</div>
</div>
</body>