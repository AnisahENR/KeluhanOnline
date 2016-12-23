<<<<<<< HEAD:application/views/data_user.php
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php /*?><?php
if (isset($this->session->userdata['isLogin'])) {
$username = ($this->session->userdata['isLogin']['username']);
} else {
header("location: index");
}
?><?php */?>

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
			<li><?php echo anchor(base_url().'index.php/admin/home','Beranda');?></li>
			<li><?php echo anchor(base_url().'index.php/admin/keluhan_admin','Keluhan');?></li>
			<li><?php echo anchor(base_url().'index.php/admin/data_user','Data User');?></li>
			</ul>
		<div id="userbar">
			<?php echo anchor(base_url().'index.php/login/logout','Logout');?>
		</div>
		</div>
	
	<center><h2>MEMBER TERDAFTAR</h2></center>
	<center>
	<table border="2" cellspacing="2" bgcolor="#FFFFFF" bordercolor="#000000" width="700">
	<td><h3>ID</h3></td>
	<td><h3>Nama</h3></td>
	<td><h3>Username</h3></td>
	<td><h3>Email</h3></td>
	<td><h3>Level</h3></td>
	<td><h3>Aksi</h3></td><br>
	<?php foreach($query as $lihat){
	?>
		<tr bgcolor="#FFFFFF" bordercolor="#000000" align="justify">
		<td><?php echo $lihat->id_user; ?></td>
		<td><?php echo $lihat->name; ?></td>
		<td><?php echo $lihat->username; ?></td>
		<td><?php echo $lihat->email; ?><br /></td>
		<td><?php if ($lihat->level == '1') {
		echo 'Admin';
		} else {
		echo 'Member';
		}; ?><br/></td>
		<td align="center"><a href='<?php echo base_url()."index.php/admin/hapus_user/".$lihat->id_user;?>'>Hapus User</a></td>
	
	<?php 
	}
	?>
	</tr>
	</table>
	</center>
<br/>
	
<div id="footer">
	<p><center>Copyright &copy; 2016 KELOMPOK MKPL </center></p>
</div>
</div>
</body>
=======
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php /*?><?php
if (isset($this->session->userdata['isLogin'])) {
$username = ($this->session->userdata['isLogin']['username']);
} else {
header("location: index");
}
?><?php */?>

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
			<li><?php echo anchor(base_url().'index.php/admin/index','Beranda');?></li>
			<li><?php echo anchor(base_url().'index.php/admin/keluhan_admin','Keluhan');?></li>
			<li><?php echo anchor(base_url().'index.php/admin/data_user','Data User');?></li>
			</ul>
		<div id="userbar">
			<?php echo anchor(base_url().'index.php/login/logout','Logout');?>
		</div>
		</div>
	
	<center><h2>MEMBER TERDAFTAR</h2></center>
	<center>
	<table border="2" cellspacing="2" bgcolor="#FFFFFF" bordercolor="#000000" width="700">
	<td><h3>ID</h3></td>
	<td><h3>Nama</h3></td>
	<td><h3>Username</h3></td>
	<td><h3>Email</h3></td>
	<td><h3>Level</h3></td>
	<td><h3>Aksi</h3></td><br>
	<?php foreach($query as $lihat){
	?>
		<tr bgcolor="#FFFFFF" bordercolor="#000000" align="justify">
		<td><?php echo $lihat->id_user; ?></td>
		<td><?php echo $lihat->name; ?></td>
		<td><?php echo $lihat->username; ?></td>
		<td><?php echo $lihat->email; ?><br /></td>
		<td><?php if ($lihat->level == '1') {
		echo 'Admin';
		} else {
		echo 'Member';
		}; ?><br/></td>
		<td align="center"><a href='<?php echo base_url()."index.php/admin/hapus_user/".$lihat->id_user;?>'>Hapus User</a></td>
	
	<?php 
	}
	?>
	</tr>
	</table>
	</center>
<br/>
	
<div id="footer">
	<p><center>Copyright &copy; 2016 KELOMPOK MKPL </center></p>
</div>
</div>
</body>
>>>>>>> origin/evi:KeluhanOnline/application/views/data_user.php
</html>