<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/asset/akun/style.css">
</head>
<body>
	<div class="box">
		<h1>Login Admin</h1>
		<form method="POST" action="<?php echo site_url("Welcome/prosesMasuk"); ?>">

			<p>Email</p>
			<input type="email" name="email" placeholder="Enter Email" value="<?php echo set_value("email"); ?>">
			<?php echo form_error('email'); ?>

			<p>Password</p>
			<input type="password" name="password" placeholder="Enter Password" value="<?php echo set_value("password"); ?>">
			<?php echo form_error('password'); ?>

			<button type="submit">Login</button><br>
			<a href="daftar">Belum Memiliki Akun?</a><br>
			<a href="<?php echo base_url("welcome/index_home") ?>">kembali</a>
		</form>
	</div>

</body>
</html>