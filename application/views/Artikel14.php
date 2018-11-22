<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Artikel 14</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/A14/style_A14.css') ?>">

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
				<img src="<?php echo base_url('asset/A14/LOGO1.png') ?>">
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
			<h1>Fenomena “Cold Stress” pada Tanaman</h1>
			<img src="<?php echo base_url('asset/A14/cold.jpg') ?>">
	</div>
	
	<div class="content">
		<p>Memasuki musim kemarau pada pertengahan tahun 2018, beberapa daerah di Indonesia mengalami penurunan suhu udara. Peristiwa ini disebabkan oleh energi panas matahari yang tidak dapat dipantulkan kembali ke permukaan bumi oleh awan. Di samping itu, tiupan angin pasat timur dari benua Australia yang mengalami puncak musim dingin, kemudian membawa aliran udara dengan suhu rendah ke Indonesia.</p>

		<p><br>Di daerah dataran tinggi seperti kawasan Dieng, suhu udara dapat mencapai kurang dari 0°C. Penurunan suhu drastis serta minimnya hujan dan angin menimbulkan lapisan es tipis, atau dikenal dengan embun upas. Para petani Dieng menyebutnya sebagai “embun beracun” karena menyebabkan kerusakan pada tanaman milik mereka. Akibatnya, petani mengalami kerugian dari penurunan hasil tanaman bahkan gagal panen.</p>

		<p><br>Dalam ilmu sains, fenomena embun upas adalah bentuk cold stress atau cekaman yang disebabkan suhu rendah. Cold stress terdiri dari chilling stress dan freezing stress. Fenomena ini dapat terjadi pada tanaman di lahan maupun pada hasil panen yang disimpan di pendingin. Dampak yang ditimbulkan dari cold stress pada tanaman disebut dengan cold injury (chilling injury dan freezing injury).</p>

		<p><br>Pertumbuhan setiap tanaman membutuhkan suhu optimum dengan rentang yang berbeda-beda. Suhu yang terlalu rendah menyebabkan gangguan fisiologis pada tanaman seperti dehidrasi, rusaknya membran sel oleh pembentukan kristal es, dan gangguan metabolisme lainnya. Apabila tanaman tidak bersifat toleran pada cekaman suhu rendah tersebut, maka pertumbuhannya akan terhambat hingga mengalami kematian. Contoh tanaman yang rentan terhadap cold stress adalah padi, jagung, kacang hijau, tomat, mentimun, dan ubi jalar.</p>

		<center><br><img src="<?php echo base_url('asset/A14/ubi.jpg') ?>"></center>

		<p><br>Chilling stress terjadi ketika tanaman yang rentan terpapar suhu udara berada mendekati titik beku (>0°C). Sel-sel tanaman menyusut akibat dehidrasi, sehingga mengalami kelayuan dan daunnya menguning hingga membusuk. Ketika suhu udara yang mencapai di bawah titik beku (< 0°C), maka terjadi freezing stress pada tanaman yang rentan. Sumber freezing stress dapat berasal dari air bawah tanah maupun uap air yang berada di udara. Freezing injury ditandai dengan pembentukan kristal es pada jaringan tanaman.</p>

		<h2><br>Penanggulangan</h2>

		<p><br>Penanggulangan cold stress dapat dilakukan dengan pemilihan varietas yang toleran dan cara-cara mekanis maupun teknis. Saat musim dingin dan bersalju, kegiatan bercocok tanam dilakukan dalam rumah kaca atau bangunan pelindung sejenis (cold frames) yang dilengkapi dengan alat pemanas dan kipas angin. Cara teknis yang dilakukan untuk melindungi tanaman dari paparan suhu rendah di antaranya pembumbunan, menutup tanaman menggunakan plastik, penyiraman pada tanaman, pemberian uap panas, dan lain-lain. Upaya-upaya tersebut dilakukan secara terus menerus selama kondisi suhu udara tidak dapat ditoleransi oleh tanaman.</p>

		<center><br><img src="<?php echo base_url('asset/A14/safe.jpg') ?>"></center>

		<p><br><br>
			Sumber : <a href="https://farming.id/fenomena-cold-stress-pada-tanaman/"> farming.id</a>

		</p>
		<p>Penulis : Fridia Nur Sofiarani <a href="http://ugm.id/aboutfridians">http://ugm.id/aboutfridians</a>
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