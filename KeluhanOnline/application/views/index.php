<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<<<<<<< HEAD

=======
<?php
if (isset($this->session->userdata['isLogin'])) {
$username = ($this->session->userdata['isLogin']['username']);
} else {
header("location: form_login");
}
?>
>>>>>>> evi
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>KELUHAN ONLINE</title>
<link rel="stylesheet" href="<?= base_url().'css/style.css';?>" type="text/css" media="all" />

<style>
body {font-family:Arial, Helvetica, sans-serif; font-size:12px;}

.fadein { 
position:center; height:500px; width:500px; margin:0 auto;
background: url("slideshow-bg.png") repeat-x scroll left top transparent;
padding: 10px;
 }
.fadein img { position:center; left:10px; top:10px; }
</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>
$(function(){
	$('.fadein img:gt(0)').hide();
	setInterval(function(){$('.fadein :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');}, 3000);
});
</script>

</head>
<div id="nama">
HALAMAN AWAL! 
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
	<div class="fadein">
	<img src="<?php echo base_url('image/mlg.jpg'); ?>" width="100%">
	<img src="http://chictraveler.wpengine.netdna-cdn.com/wp-content/uploads/2010/09/Picture-91-500x332.png">
	<img src="http://sevillespain.info/wp-content/uploads/2012/02/Casa-De-Carmona-Hotel-Seville-casa_de_carmona_galeria_mr_1200-500x332.jpg">
	<img src="http://hereelsewhere.com/wp-content/uploads/2012/06/Chambre22-500x332.jpeg">
	<img src="http://www.worlddesignhotels.com/wp-content/uploads/407/X%20Ordinary%20Room-500x332.jpg">
	<img src="http://armywife101.com/wp-content/uploads/2012/09/DoubleTree-Suites-by-Hilton-exterior-photo-Downtown-Disney-Resort-Area-Hotels-500x332.jpg">
</div>

<div id="footer">
	<p><center>Copyright &copy; 2016 KELOMPOK MKPL </center></p>
</div>
</div>

</body>
</html>