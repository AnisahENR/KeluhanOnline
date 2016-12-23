<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php /*?><?php
if (isset($this->session->userdata['isLogin'])) {
$username = ($this->session->userdata['isLogin']['username']);
} else {
header("location: form_login");
}
?><?php */?>
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
			<li><?php echo anchor(base_url().'index.php/admin/data_user','Data User');?></li>
			</ul>
	</div>
	<div id="notif">
	NOTIFIKASI ADMIN <br />
	<form action="<?php echo base_url();?>index.php/notifikasi/form_notifikasi" method="post" name="kirim">
	<table border="0" cellpadding="4" bordercolor="#FFFFFF">
	<tr>
	<td>Dari</td>
	<td>:</td>
	<td><?php echo $user->username?></td>
	<td><input type="hidden" name="admin" value="<?php echo $user->username;?>">
	<?php echo form_error('username');?></td>
	</tr>
	
	<td>Kepada</td>
	<td>:</td>
	<td><?php echo $pengguna?></td>
	<td><input type="hidden" name="user" value="<?php echo $pengguna;?>">
	<?php echo form_error('username');?></td>
	</tr>
	
	<tr>
	<td>Pesan</td>
	<td>:</td>
	<td><input type="text" size="40" name="pesan" value="<?php echo set_value('pesan');?>" class="inputan">
	<?php echo form_error('nama');?>
	</td>
	</tr>
	
	<tr>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td><input type="submit" name="kirim" value="Kirim"></td>
	</tr>
</table>
	</table>
	</center>

<div class="footer">
	<p><center>Copyright &copy; 2016 KELOMPOK MKPL </center></p>
</div>

</body>
</html>