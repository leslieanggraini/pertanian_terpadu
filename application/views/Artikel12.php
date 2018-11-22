<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Artikel 12</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/A12/style_A12.css') ?>">

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
				<img src="<?php echo base_url('asset/A12/LOGO1.png') ?>">
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
			<h1>Fitroemediasi, Mengatasi Limbah dengan Tumbuhan</h1>
			<img src="<?php echo base_url('asset/A12/bunga.jpg') ?>">
	</div>
	
	<div class="content">
		<p>Aktivitas pertambangan logam-logam berat menyebabkan pencemaran lingkungan dan berbahaya bagi kesehatan manusia. Remediasi merupakan upaya penanggulangan limbah di lingkungan sehingga dapat mengurangi resiko-resiko dari kontaminan. Metode remediasi yang telah dilakukan secara fisik dan kimia memiliki kekurangan, yaitu biaya yang mahal, dilakukan secara intensif, serta merusak struktur dan kesuburan tanah. Dilakukan pengembangan teknologi alternatif remediasi yang lebih ekonomis dan ramah lingkungan yang dikenal dengan fitoremediasi.</p>

		<p><br>Fitoremediasi adalah metode untuk mencuci limbah menggunakan tumbuhan. Pencucian ini dapat berupa penghancuran, inaktivasi maupun imobilisasi limbah ke bentuk yang tidak berbahaya. Hal ini berlandaskan kemampuan tumbuhan yang digunakan dalam strategi remediasi yaitu:</p>

		<p><br>1. mengakumulasi limbah (phytoextraction)</p>
		<p>2. akar dapat menyerap limbah dari air tanah (rhizofiltration)</p>
		<p>3. metabolisme terhadap limbah pada jaringan tumbuhan (phytotransformation)</p>
		<p>4. menstimulasi aktivitas mikroba yang berasosiasi dengan akar (phytostimulation)</p>
		<p>5. akar dapat mengimobilisasi limbah di tanah (phytostabilization)</p>
		<p>6. menyerap logam dari dalam tanah dalam jumlah besar (phytomining)</p>

		<p><br>Kemampuan tumbuhan untuk menyerap limbah sangat bervariasi, sehingga hanya tumbuhan yang memiliki sifat hiperakumulator pada logam berat yang spesifik yang digunakan untuk fitoremediasi. Hiperakumulator adalah kemampuan tumbuhan menyerap logam melalui akar kemudian diakumulasi di dalam tubuhnya untuk diolah kembali atau dibuang saat panen. Beberapa logam berat yang biasanya diakumulasi oleh tumbuhan hiperakumulator adalah kadmium (Cd), seng (Zn), kobalt (Co), tembaga (Cu), timah (Pb), merkuri (Hg), mangan (Mn), nikel (Ni), minyak bumi, bahan radioaktif, dan senyawa organik. Adapun tumbuhan yang bersifat hiperakumulator di antaranya bayam-bayaman, kangkung, gulma (putri malu, beberapa jenis rumputan, gulma perairan), bunga matahari, dan azolla. Beberapa tumbuhan kemudian dimodifikasi secara genetik agar dapat meningkatkan efisiensi dan kisaran serapan logam yang dapat diakumulasi.</p>

		<p><br>Beberapa contoh penerapan fitoremediasi dilakukan adalah dengan metode wet land atau waste water garden. Limbah dialirkan ke kolam penampungan yang ditanami tumbuhan air yang bersifat hiperakumulator (contoh: eceng gondok, kayu apu). Tanaman dipanen secara berkala untuk kemudian dimusnahkan. Sistem ini digunakan di beberapa daerah di Bali dan pabrik bahan peledak di Tenessee, Amerika Serikat. Bunga matahari digunakan untuk fitoremediasi untuk menanggulangi cemaran radiasi nuklir pada tanah setelah bencana kebocoran nuklir di Chernobyl, Hiroshima, dan Fukushima.</p>

		<center><br><img src="<?php echo base_url('asset/A12/olah.jpg') ?>"></center>

		<p><br><br>
			Sumber : <a href="https://farming.id/fitoremediasi-mengatasi-limbah-dengan-tumbuhan/"> farming.id</a>

		</p>
		<p>Penulis : Arinda Dwi Yonida <a href="arinda@farming.id">arinda@farming.id</a>
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