<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>KELUHAN ONLINE</title>
</head>
HALAMAN AWAL!

<body>
	<center>
	<?php echo anchor(base_url().'index.php/user/home','Beranda');?>
	<?php echo anchor(base_url().'index.php/user/keluhan','Keluhan');?>
	<?php echo anchor(base_url().'index.php/user/viewnotifikasi/'.$pengguna->username,'Notifikasi');?>
	<?php echo anchor(base_url().'index.php/login/logout','Logout');?>
	</center>

	<center>
	<tr bgcolor="#FFFFFF" bordercolor="#000000" align="justify">
		<td>Username: <?php echo $username; ?></td><br />
		<td>Keluhan: <?php echo $keluhan; ?></td><br />
	</center>

<div class="footer">
	<p><center>Copyright &copy; 2016 KELOMPOK MKPL </center></p>
</div>

</body>
</html>