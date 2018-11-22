<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pemupukan Bawang</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/A16/style_A16.css') ?>">

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
				<img src="<?php echo base_url('asset/A16/LOGO1.png') ?>">
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
		
	</header>
	<div class="title">
			<h1>Pemupukan yang Tepat untuk Tanaman Bawang Merah</h1>
			<img src="<?php echo base_url('asset/A16/bawang.jpg') ?>">
	</div>
	
	<div class="content">
		<p><br>&nbsp Bawang merah merupakan tanaman yang banyak membutuhkan hara, baik pada masa pertumbuhan vegetatif maupun saat pembentukan, pembesaran dan pematangan umbi. Pemupukan untuk tanaman bawang merah harus tepat jenis, tepat waktu, tepat cara, dan tepat kombinasi.</p>

		<p><br>&nbsp Selain itu, pemupukan yang tepat juga merupakan salah satu cara penting untuk meningkatkan ketahanan tanaman terhadap serangan hama dan patogen penyebab penyakit pada tanaman bawang merah.</p>
		
		<p><br> &nbsp Tanaman bawang merah banyak menyerap unsur hara makro dari dalam tanah seperti Nitrogen (N), Phosphor (P), dan Kalium (K). Namun, unsur-unsur tersebut tidak selalu tersedia di dalam tanah karena sistem budidaya yang terus-menerus dilakukan. Dalam budidaya bawang merah, diperlukan pemupukan sebanyak tiga kali, yaitu pada saat pengolahan lahan dan pemeliharaan tanaman.</p>

		<p><br> &nbsp Pemupukan pertama diberikan bersama ketika pengolahan tanah atau sebelum dilakukan penanaman bibit bawang merah. Pupuk disebar di atas bedengan, lalu diaduk merata dengan tanah.</p>

		<p><br> &nbsp Jenis pupuk yang digunakan adalah NPK Mutiara (16:16:16) 500 kg, SP 36 sebanyak 50—100 kg dan KCl 30—60 kg untuk dosis aplikasi per hektarenya. Untuk pemupukan pertama ini, jika akan menambahkan pupuk kompos atau pupuk kandang, dosis NPK Mutiara (16:16:16) dapat dikurangi menjadi 250 kg/ha.
		</p>

		<p><br> &nbsp Alasan menggunakan pupuk ini adalah karena unsur P dan K sulit larut sehingga perlu waktu (minimal 14 hari) agar unsur tersebut dapat diserap tanaman.
		</p>

		<p><br> &nbsp Pada umur 7 hari akar tanaman bawang mulai tumbuh dan membutuhkan unsur tersebut untuk perkembangannya. Unsur P dan K dari NPK, SP 36 dan KCl akan tersedia bagi tanaman sepanjang pertumbuhan bawang merah. Selanjutnya, pemupukan susulan pertama diberikan saat tanaman berumur 10—15 HST (hari setelah tanam) dengan jenis pupuk Urea 180 kg/ha atau ZA 400 kg/ha.	
		</p>

		<p><br> Aplikasi pupuk bisa dengan cara ditebar di atas bedengan.</p>

		<p><br> &nbsp Pemupukan ini bertujuan memberikan cadangan makanan bagi umbi karena pada umur 15—30 HST cadangan makanan umbi cepat habis sehingga perlu unsur N dan S untuk pembentukan daun, batang, dan akar. Pupuk susulan kedua diberikan saat tanaman berumur 30—35 HST dengan jenis pupuk Urea 180 kg/ha. Sementara, unsur N dari Urea digunakan dalam proses fotosintesis untuk pembentukan karbohidrat.</p>
		
		<p><br> &nbsp Pemberian pupuk susulan perlu diikuti dengan penyiraman apabila diperkirakan tidak terjadi hujan. Disamping itu, dapat pula diberikan pupuk hayati sesuai anjuran apabila tersedia sehingga bisa mengurangi pemakaian pupuk kimia.</p>

		<p><br> &nbsp Perlu diingat, pemupukan tanaman bawang merah di setiap daerah tidak sama tergantung tingkat kesuburan tanah. Untuk itu, jika Anda akan melakukan pemupukan harus melihat kondisi tanah dan tanaman terlebih dahulu.</p>

		<p><br><br>
			Sumber : <a href="https://www.pertanianku.com/pemupukan-yang-tepat-untuk-tanaman-bawang-merah/">pertanianku.com</a>
		</p>

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