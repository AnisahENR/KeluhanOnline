<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
if (isset($this->session->userdata['isLogin'])) {
$username = ($this->session->userdata['isLogin']['username']);
} else {
header("location: index");
}
?>

<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>KELUHAN ONLINE</title>
<link rel="stylesheet" href="<?= base_url().'css/style.css';?>" type="text/css" media="all" />
</head>
<body>
	<div id="container">
	<h1><br>KELUHAN ONLINE</h1>
        <div id="wrapper">
			<ul id="menu">
	<li><?php echo anchor(base_url().'index.php/user/home','Beranda');?></li>
	<li><?php echo anchor(base_url().'index.php/user/keluhan','Keluhan');?></li>
	<li><?php echo anchor(base_url().'index.php/user/viewnotifikasi/'.$pengguna->username,'Notifikasi');?></li>
		</ul>
	<div id="userbar">
	<?php echo anchor(base_url().'index.php/login/logout','Logout');?>
	</div>
	</div>
	<div id="keluhan">
	<form action="<?php echo base_url();?>index.php/keluhan/form_keluhan" method="post" name="kirim">
	<table border="0" cellpadding="4" bordercolor="#FFFFFF">
	<tr>
	<td>Username</td>
	<td>:</td>
	<td><input type="text" size="40" name="username" value="<?php echo set_value('username');?>" class="inputan">
	<?php echo form_error('username');?>
	</td>
	</tr>
	
	<tr>
	<td>Keluhan</td>
	<td>:</td>
	<td><input type="text" size="40" name="keluhan" value="<?php echo set_value('keluhan');?>" class="inputan">
	<?php echo form_error('keluhan');?>
	</td>
	</tr>
	
	<tr>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td><input type="submit" name="kirim" value="Kirim"></td>
	</tr>
</table>
<table>
	
	<td><h3>Username</h3></td>
	<td><h3>Keluhan</h3></td>
	<?php foreach($query as $a){
	?>
		<tr bgcolor="#FFFFFF" bordercolor="#000000" align="justify">
		<td><?php echo $a->username; ?></td>
		<td><?php echo $a->keluhan; ?></td>
	<?php 
	}
	?>
	</tr>
	</table>
	</div>
	
<div id="footer">
	<p><center>Copyright &copy; 2016 KELOMPOK MKPL </center></p>
</div>
</div>

</body>
</html>