
<!DOCTYPE html>
<html>
<head>
	<title>Registrasi Form</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/asset/akun/style1.css">
</head>
<body>
	<div class="box">
		<h1>Registrasi Admin</h1>
		<form method="POST" action="<?php echo site_url("Welcome/prosesDaftar"); ?>">
			
			<p>Username</p>
			<input type="text" name="username" placeholder="Enter Username" value="<?php echo set_value("username"); ?>">
			<?php echo form_error('username'); ?> 

			<p>Email</p>
			<input type="email" name="email" placeholder="Enter Email" value="<?php echo set_value("email"); ?>">
            <?php echo form_error('email'); ?>

			<p>Password</p>
			<input type="password" name="password" placeholder="Enter Password" value="<?php echo set_value("password"); ?>">
            <?php echo form_error('password'); ?>
            
            <p>Password Verification</p>
			<input type="password" name="pwverif" placeholder="Enter Password Verification">
			<?php echo form_error('pwverif'); ?>
			
			<button type="submit">Registrasi</button><br>
			<a href="masuk">Sudah memiliki akun?</a>
		</form>
	</div>

</body>
</html>