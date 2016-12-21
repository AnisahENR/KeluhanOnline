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
Hello, <b><?php echo $pengguna->name;?></b>
</div>
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
	<center>
	<tr bgcolor="#FFFFFF" bordercolor="#000000" align="justify">
		<?php $actual = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		preg_match("/[^\/]+$/", $actual, $matches);
		$username = $matches[0];
		?>
		<?php $query = mysql_query("SELECT nama_pengirim, nama_penerima, pesan, tanggal_ambil FROM notifikasi WHERE nama_penerima='".$username."'");?>
		
		<?php if($query == FALSE) { 
   		die(mysql_error()); // TODO: better error handling
		} else {
		$a = mysql_fetch_array($query); ?>
		<h2><?php echo $a['nama_pengirim']; ?></h2> <br />
		<h2><?php echo $a['nama_penerima']; ?></h2> <br />
		<h2><?php echo $a['pesan']; ?></h2> <br />
		<h2><?php echo $a['tanggal_ambil']; ?></h2> <br />
		<?php }
		//echo $query->nama_pengirim;
		?>
		<?php /*?><td><a href='<?php echo base_url()."index.php/user/edit_ktp/".$id;?>'>Edit Draft</a></td><?php */?>
	</center> 

<div id="footer">
	<p><center>Copyright &copy; 2016 KELOMPOK MKPL </center></p>
</div>
</div>
</body>
</html>