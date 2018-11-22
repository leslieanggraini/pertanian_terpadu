<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pertanian Terpadu</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/home/style.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/footer-distributed-with-address-and-phones.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/font-awesome/css/fontawesome.min.css') ?>">
	<link rel="shortcut icon" href="asset/home/LOGO1.png">

	<script defer src="https://use.fontawesome.com/releases/v5.4.1/js/all.js" integrity="sha384-L469/ELG4Bg9sDQbl0hvjMq8pOcqFgkSpwhwnslzvVVGpDjYJ6wJJyYjvG3u8XW7" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>
<body>
	<header>
		<nav class="navigasi">
		<div class="main">
			<div class="logo">
				<img src="<?php echo base_url('asset/home/LOGO1.png') ?>">
			</div>
			<div class="menu">
				<ul>
					<li> <a href="<?php echo site_url('Welcome/index_home') ?>" class="menu-item">Beranda</a> </li>
					<li> <a href="content" class="menu-item" >Artikel</a></li>
					<li> <a href="<?php echo site_url('Welcome/kontak') ?>" class="menu-item">About</a> </li>
					<li> <a href="<?php echo site_url('Welcome/masuk') ?>" class="menu-item">Login</a> </li>				
				</ul>
			</div>
			<div class="search">	
			<?php echo form_open ('welcome/pencarian')?>
			<input type = "text" name = "keyword" placeholder = "search">
			<button type = "submit">cari</button> 
			<?php echo form_close()?> 
			</div>
		</div>
		</nav>
		<div class="title">
			<h1>PERTANIAN TERPADU</h1>
		</div>
		
	</header>

	<br>
	
	<div class="content">
		<div class="container">
		<section id="1">
       		<div class="box" id="b1">
       			<a class="linkonten" href="<?php echo site_url('Welcome/Artikel1') ?>">
       			<div class="icon" id="l1"></div>       			
       			<div class="konten">
       				<h3>KELAPA</h3>
       				<p>Tips Budidaya Kelapa Kopyor untuk Mendapat Hasil Maksimal</p>
       			</div>
       			</a>
       		</div>
       		<div class="box" id="b2">
       			<a class="linkonten" href="<?php echo site_url('Welcome/Artikel2') ?>">
       			<div class="icon" id="l2"></div>       			
       			<div class="konten">
       				<h3 id="p1">PADI</h3>
       				<p id="p1">Pentingnya Pengaturan Jarak Tanam dan Pengairan pada Budidaya Padi</p>
       			</div>
       			</a>
       		</div>
       		<div class="box" id="b3">
       			<a class="linkonten" href="<?php echo site_url('Welcome/Artikel3') ?>">
       			<div class="icon" id="l3"></div>
       			<div class="konten">
       				<h3>PEKARANGAN</h3>
       				<p>Potensi Pemanfaatan Pekarangan untuk Mendukung Ketahanan Pangan</p>
       			</div>
       			</a>
       		</div>
       	</section>
       	<a href="<?php echo site_url('Welcome/konten') ?>"class="btn btn-info btn-sm">More info <i class="fa fa-arrow-circle-right"></i></a>

    	</div>
    	
    	<br>

    	<footer class="footer-distributed">
			<div class="footer-left">
				<img src="<?php echo base_url('asset/home/LOGO1.png') ?>">
				<p class="footer-links">
					<a href="<?php echo site_url('Welcome/index_home') ?>">Beranda</a>
					·
					<a href="<?php echo site_url('Welcome/konten') ?>">Artikel</a>
					·
					<a href="<?php echo site_url('Welcome/kontak') ?>">Contact</a>
				</p>
				<p class="footer-company-name">Pertanian Terpadu &copy; 2018</p>
			</div>
			<div class="footer-center">
				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Jalan Terusan Ryacudu</span> Lampung Selatan, Indonesia</p>
				</div>
				<br>
				<div>
					<i class="fa fa-phone"></i>
					<p>+62852-7362-7271</p>
				</div>
				<br>
				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="PetanianTerpadu@gmail.com">PertanianTerpadu@gmail.com</a></p>
				</div>
			</div>
			<div class="footer-right">
				<p class="footer-company-about">
					<span>About the </span>
					Pusat informasi seputar Pertanian, Agrikultur dan Perkebunan.
				</p>
				<div class="footer-icons">
					<a href=""><i class="fab fa-facebook"></i></a>
					<a href=""><i class="fab fa-twitter"></i></a>
					<a href=""><i class="fab fa-linkedin"></i></a>
					<a href=""><i class="fab fa-github"></i></a>
				</div>
			</div>
		</footer>
    </div>

	<script type="text/javascript">
	$(window).on("scroll", function() {
        if($(window).scrollTop()) {
            $('nav').addClass('black');
    }

</body>
</html>