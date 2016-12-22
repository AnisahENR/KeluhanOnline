<html>
 <head>
  <title>Form Login</title>
  <style>
   body
   {
    font-family:Calibri;
    margin:50px;
   }
   
   #form-login{
   margin:auto;
   width:500px;
   padding:10px;
   border:1px #ccc solid;
   font-size:18px;
   font-weight:bold;
   color:#FF6600;
   }
   
   .inputan
   {
    padding:3px;
    font-family:Calibri;
    border:1px solid #ccc;
   }
   
   .tombol
   {
    padding:5px;
    background:#FF6600;
    color:#FFF;
    font-weight:bold;
    font-family:Calibri;
    font-size:15px;
    border:#eee 1px solid;
   }
   
   .error
   {
    color:#FF6600;
    font-size:11px;
   }
   
   
  </style>
 </head>
<body>
<div class="main">
<?php
if (isset($message_display)) {
echo "<div class='message'>";
echo $message_display;
echo "</div>";
}
?>
	<div id="form-login">
	<center>
<form action="<?php echo base_url();?>index.php/registrasi/regis_form_process" method="post" name="signup">
<h2>SIGNUP FIRST</h2>
<table border="0" cellpadding="4">
	<tr>
	<td>Nama</td>
	<td>:</td>
	<td><input type="text" size="40" name="name" value="<?php echo set_value('name');?>" class="inputan">
	<?php echo form_error('name');?></td>
	</tr>
	
	<tr>
	<td>Username</td>
	<td>:</td>
	<td><input type="text" size="40" name="username" value="<?php echo set_value('username');?>" class="inputan">
	<?php echo form_error('username');?></td>
	</tr>

	<tr>
	<td>Email</td>
	<td>:</td>
	<td><input type="text" size="40" name="email" value="<?php echo set_value('email');?>" class="inputan">
	<?php echo form_error('email');?></td>
	</tr>
	
	<tr>
	<td>Password</td>
	<td>:</td>
	<td><input type="password" size="40" name="password" value="<?php echo set_value('password');?>">
	<?php echo form_error('password');?></td>
	</tr>

	<tr>
	<td><input type="hidden" value="<?php echo set_value("0");?>">
	<?php echo form_error('level');?></td>
	</tr>
	
	<tr>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td><input type="submit" name="registrasi" value="Registrasi"> </td>
	</tr>
</table>
Sudah punya akun? Silahkan <a href="<?php echo base_url() ?>index.php/login/login_form">Masuk</a>
</form>
</center>
</div>

<div class="footer">
	<p><center>Copyright &copy; 2015 RPL KELOMPOK 8</center></p>
</div>
</body>
</html>