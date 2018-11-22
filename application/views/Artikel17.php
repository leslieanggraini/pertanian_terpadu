<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Buah dan Sayur</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/A17/style_A17.css') ?>">

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
				<img src="<?php echo base_url('asset/A17/LOGO1.png') ?>">
			</div>
			<div class="menu">
				<ul>
					<li> <a href="<?php echo site_url('Welcome/index_home') ?>" class="menu-item">Beranda</a> </li>
					<li> <a href="<?php echo site_url('Welcome/konten') ?>"class="menu-item" >Artikel</a></li>
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
			<h1>Buah dan Sayuran Yang Bisa Membantu Atasi Kembung</h1>
			<img src="<?php echo base_url('asset/A17/buah.jpg') ?>">
	</div>
	
	<div class="content">
		<p>&nbsp Seseorang yang sering mengalami kembung setelah makan makanan asin atau saat mengalami fluktuasi hormon siklus bulanan biasanya akrab dengan pil diuretik. Namun tahukah Anda, ada beberapa buah dan sayuran yang ternyata juga bisa bantu atasi kembung dengan cara yang lebih alami.</p>

		<p>&nbsp Direktur Gizi di Good Housekeeping Institute, Jaclyn London, menyebut sayur dan buah yang mengandung banyak air plus kalium bisa membantu mengimbangi penyempitan pembuluh darah yang memicu kembung. Berikut sembilan buah dan sayuran yang berfungsi sebagai diuretik alami untuk mengatasi kembung, dilansir dari Cosmopolitan, Selasa (23/10).</p>
		
		<h3><br>Asparagus</h3>
		
		<p><br> &nbsp Sejak zaman Yunani dan Romawi kuno, asparagus digunakan sebagai diuretik alami. Efek diuretik sayuran ini berasal dari kandungan asam amino aspragin yang sering digunakan mengobati pembengkakan, rematik, dan retensi air pramenstruasi. Bau urine mungkin sedikit berbeda karena berasal dari asam asparagus yang dipecah menjadi senyawa belerang ketika dicerna tubuh.</p>

		<h3><br>Bit</h3>

		<p> &nbsp Bit tinggi potasium yang membantu menghilangkan cairan. Betanin, zat yang memberi warna pada bit mengandung protein c-reaktif yang rendah dan bersifat anti-inflamasi.</p>

		<h3><br>Kubis</h3>

		<p><br> &nbsp Kubis membantu mengurangi kadar air. Diet dengan sup kubis sangat populer untuk diuretik alami, bersamaan dengan seratnya yang tinggi untuk mengurangi kelebihan berat badan. Orang-orang Romawi menggunakan kubis untuk obat mabuk dan mengurangi alkohol dalam tubuh. Kubis merah juga bersifat anti-inflamasi karena mengandung antosianin.</p>

		<h3><br>Seledri</h3>

		<p> &nbsp Hippocrates merekomendasikan seledri untuk menghilangkan kelebihan cairan dalam tubuh. Para ilmuwan sekarang mengidentifikasi bahwa phthalides di seledri bersifat diuretik.</p>

		<h3><br>Cranberry</h3>

		<p><br> &nbsp Penduduk asli Amerika mengidentifikasi sifat diuretik pada cranberry untuk mengobati penyakit kudis yang diyakini akibat terlalu banyak garam. Jus cranberry sejak lama digunakan untuk mencegah dan mengobati gangguan kemih. Cranberry sangat bermanfaat mengeluarkan kelebihan cairan tanpa menghilangkan kalium dari tubuh.</p>

		<h3><br>Mentimun</h3>

		<p><br> &nbsp Mentimun memiliki sulfur dan silikon yang meningkatkan frekuensi buang air kecil, serta merangsang ginjal menghilangkan asam urat. Sarat dengan air dan kalium, mentimun rendah sodium, juga menghambat produksi asam nitrat dan enzim yang memicu peradangan. Ini yang membuat sayuran ini bisa mengurangi pembengkakan. Ini juga alasan mengapa banyak wanita menempatkan irisan mentimun di mata untuk mengempiskan kantung mata.</p>
		
		<h3><br>Semangka</h3>

		<p> &nbsp Semangka dengan kandungan air 92 persen dan tinggi kalium memiliki sifat diuretik. Buah ini mengandung asam amino yang melemaskan pembuluh darah dan mengurangi retensi air dalam tubuh.</p>

		<p><br><br>
			Sumber : <a href="https://www.pertanianku.com/buah-dan-sayuran-ini-bisa-bantu-atasi-kembung/">pertanianku.com</a>
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