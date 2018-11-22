<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Artikel Kopi</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/A20/style_A20.css') ?>">

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
				<img src="<?php echo base_url('asset/A20/LOGO1.png') ?>">
			</div>
			<div class="menu">
				<ul>
					<li> <a href="<?php echo site_url('Welcome/index_home') ?>" class="menu-item">Beranda</a> </li>
					<li> <a href="<?php echo site_url('Welcome/konten') ?>" >Artikel</a></li>
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
			<h1>Kopi Gung Pinto</h1>
			<img src="<?php echo base_url('asset/A20/kopi.jpg') ?>">
	</div>
	
	<div class="content">
		<p>&nbsp Bicara geografis gunung ternyata dengan mudah menemukan komoditas yang satu ini. Komoditas apalagi kalau bukan kopi. Bahkan kopi yang dihasilkan dan tumbuh di tanah-tanah vulkanis, konon memiliki ciri, aroma dan rasa yang unik.</p>

		<p>&nbsp Tanaman kopi yang tumbuh di Desa Gung Pinto, Karo termasuk salah satu kopi yang cukup diminati oleh pasar kopi. Namun sayang harga jualnya belum terlalu bagus dikarenakan kualitas biji kopi belum dipanen sesuai kematangannya. Tanaman kopi yang ada di areal Desa Gung Pinto ditanam di pinggir-pinggir kebun milik petani. Tanpa perawatan khusus, sehingga hasilnyapun belum maksimal.</p>
		
		<p><br> &nbsp Kopi robusta yang tumbuh rata-rata sudah berumur 3 hingga 5 tahun dalam kondisi yang beragam. Beberapa petani mengaku mendapatkan bibit dari sekitar wilayah Berastagi. Kejelasan varietas memerlukan studi yang lebih lanjut. Saat ini panen sudah lebih baik dari sebelumnya. Karena yang dipanen merupakan kopi yang sudah cukup matang hingga yang matang di pohon.</p>

		<p> &nbsp Hasil panenan sudah bisa langsung dihuller di Paguyuban Maka Mehuli dengan upah berkisar 250 rupiah per kilogram buah kopi. Pasta yang menjadi penanggungjawab huller milik Paguyuban Maka Mehuli ini merasa senang bisa membantu kawan-kawan petani. Upah giling yang 100 rupiah per kilo menjadi hak atas tenaga yang dicurahkan. Artinya menambah pendapatan harian dari proses pengupasan kulit kopi tersebut. Biasanya dia dibantu oleh istrinya.</p>

		<p><br> &nbsp Biji kopi yang sudah digiling, akan dimasukkan dalam karung agar terfermasi antara 8-12 jam oleh pemilik biji kopi. Selanjutnya dikeringkan dengan kondisi masih ada kulit ari. Pembeli dari Berastagi atau Medan lebih memilih jenis kopi dalam tahap ini dibanding dalam bentuk green bean.</p>

		<p> &nbsp Bagi petani Desa Gung Pinto dan sekitarnya, bahwa kopi merupakan tanaman penyelamat saat mereka membutuhkan dana sewaktu-waktu. Sebagian petani mengibaratkan pohon kopi sebagai tabungan mereka. Semoga, kelak mereka juga semakin sadar untuk merawat pohon-pohon mereka agar tabungannya semakin banyak. Semoga lambat laun tingkat kesejahteraan mereka akan lebih baik.</p>

		<p><br><br>
			Sumber : <a href="https://pertaniansehat.com/read/2015/11/25/kopi-gung-pinto.html">Pertanian Sehat Indonesia</a>
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