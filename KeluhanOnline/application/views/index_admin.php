<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>KELUHAN ONLINE</title>
<link rel="stylesheet" href="<?= base_url().'css/style.css';?>" type="text/css" media="all" />
</head>
<div id="nama">
HALAMAN AWAL ADMIN !
</div>
<body>
	<div id="container"></br>
	<h1> KELUHAN ONLINE </h1>
		<div id="wrapper">
			<ul id="menu">
			<li><?php echo anchor(base_url().'index.php/admin/index','Beranda');?></li>
			<li><?php echo anchor(base_url().'index.php/admin/keluhan_admin','Keluhan');?></li>
			<li><?php echo anchor(base_url().'#','Data User');?></li>
			</ul>
	</div>
	<div id="image">
		<img src="<?php echo base_url('image/satu.jpg'); ?>" width="100%">
		</div>
	<div id="footer">
	<p><center>Copyright &copy; 2016 KELOMPOK MKPL </center></p>
	</div>
</div>

</body>
</html>