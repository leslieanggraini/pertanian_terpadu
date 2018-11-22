<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/konten/style_C.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/footer-distributed-with-address-and-phones.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/font-awesome/css/fontawesome.min.css') ?>">
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
				<img src="<?php echo base_url('asset/A1/LOGO1.png') ?>">
			</div>
			<div class="menu">
				<ul>
					<li> <a href="<?php echo site_url('Welcome/index_home') ?>" class="menu-item">Beranda</a> </li>
					<li> <a href="<?php echo site_url('Welcome/konten') ?>" class="menu-item" >Artikel</a></li>
					<li> <a href="<?php echo site_url('Welcome/kontak') ?>" class="menu-item">Contact</a> </li>				
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
	
	<div class="content">
		<section class="courses">
				<article>
					<figure>
						<a href="<?php echo site_url('Welcome/Artikel16') ?>">
						<img src="<?php echo base_url('asset/konten/image/bawang.jpg') ?>" alt="Bawang" />
						<figcaption>Pemupukan yang Tepat untuk Tanaman Bawang Merah</figcaption>
					</figure>
					<hgroup>
						<h2>Pemupukan yang Tepat untuk Tanaman Bawang Merah</h2>
					</hgroup>
					<p>Bawang merah merupakan tanaman yang banyak membutuhkan hara, baik pada masa pertumbuhan vegetatif maupun saat pembentukan,..</p>
					</a>
				</article>
				<article>
					<figure>
						<a href="<?php echo site_url('Welcome/Artikel17') ?>">
						<img src="<?php echo base_url('asset/konten/image/buah.jpg') ?>" alt="Buah" />
						<figcaption>Buah dan Sayuran Yang Bisa Membantu Atasi Kembung</figcaption>
					</figure>
					<hgroup>
						<h2>Buah dan Sayuran Yang Bisa Membantu Atasi Kembung</h2>
					</hgroup>
					<p>Seseorang yang sering mengalami kembung setelah makan makanan asin atau saat mengalami fluktuasi hormon siklus bulanan biasanya,..</p>
					</a>
				</article>
				<article>
					<figure>
						<a href="<?php echo site_url('Welcome/Artikel25') ?>">
						<img src="<?php echo base_url('asset/konten/image/biji.jpg') ?>" alt="Durian" />
						<figcaption>Jarak Tanam yang Tepat untuk Tanam Durian</figcaption>
					</figure>
					<hgroup>
						<h2>Jarak Tanam yang Tepat untuk Tanam Durian</h2>
					</hgroup>
					<p>Budidaya durian merupakan salah satu usaha yang memiliki potensi baik. Ada banyak hal yang perlu dipersiapkan jika Anda mau menjadi,..</p>
					</a>
				</article>
				<article>
					<figure>
						<a href="<?php echo site_url('Welcome/Artikel18') ?>">
						<img src="<?php echo base_url('asset/konten/image/Jagung.jpg') ?>" alt="Jagung" />
						<figcaption>Jagung Rendah Aflatoksin Kini Siap Dikembangkan</figcaption>
					</figure>
					<hgroup>
						<h2>Jagung Rendah Aflatoksin Kini Siap Dikembangkan</h2>
					</hgroup>
					<p>Setiap tahunnya, kebutuhan akan jagung rendah aflatoksin (di bawah 20 ppb) diperkirakan mencapai 15 ribu ton. Jagung tersebut,..</p>
					</a>
				</article>
				<article>
					<figure>
						<a href="<?php echo site_url('Welcome/Artikel22') ?>">
						<img src="<?php echo base_url('asset/konten/image/Rawit.jpg') ?>" alt="Rawit" />
						<figcaption>Cara Budidaya Cabai Rawit Akuaponik</figcaption>
					</figure>
					<hgroup>
						<h2>Cara Budidaya Cabai Rawit Akuaponik</h2>
					</hgroup>
					<p>Budidaya cabai rawit ternyata tak hanya bisa dilakukan dengan sistem konvensional atau hidroponik, tapi juga bisa dengan sistem,..</p>
					</a>
				</article>				
			</section>
			<aside>
				<section class="popular">
					<h2>Artikel Lain</h2>
					<a href="<?php echo site_url('Welcome/Artikel1') ?>">Tips Budidaya Kelapa Kopyor untuk Mendapat Hasil Maksimal</a>
					<a href="<?php echo site_url('Welcome/Artikel2') ?>">Pentingnya Pengaturan Jarak Tanam dan Pengairan pada Budidaya Padi</a>
					<a href="<?php echo site_url('Welcome/Artikel3') ?>">Potensi Pemanfaatan Pekarangan untuk Mendukung Ketahanan Pangan</a>
					<a href="<?php echo site_url('Welcome/Artikel19') ?>">Tips dan Trik Bertanam Kangkung Agar Hasil Melimpah</a>
					<a href="<?php echo site_url('Welcome/Artikel20') ?>">Kopi Gung Pinto</a>
					<a href="../Artikel-rawit/Acab.html">Cara Budidaya Cabai Rawit Akuaponik</a>
					<a href="<?php echo site_url('Welcome/Artikel23') ?>">Rotasi Tanaman</a>
					<a href="<?php echo site_url('Welcome/Artikel24') ?>">Jamur Ustilago, Penyakit Padi yang Membawa Berkah</a>
					<a href="<?php echo site_url('Welcome/Artikel21') ?>">Mengenal Perbedaan Layu Fusarium dan Layu Bakteri</a>
				</section>
			</aside>
			<a href="<?php echo site_url('Welcome/konten2') ?>">
			<div class="btn">
				<button type="submit">Halaman Selanjutnya >></button>
			</div>
			</a>
			</div>
			
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

	<script type="text/javascript">
	$(window).on("scroll", function() {
        if($(window).scrollTop()) {
            $('nav').addClass('black');
    }

</body>
</html>