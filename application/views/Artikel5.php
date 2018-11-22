<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Artikel 5</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/A5/style_A5.css') ?>">

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
				<img src="<?php echo base_url('asset/A5/LOGO1.png') ?>">
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
			<h1>Jenis Tanaman Hias Bunga Pilihan untuk Mempercantik Pekarangan</h1>
			<img src="<?php echo base_url('asset/A5/bunga.jpg') ?>">
	</div>
	
	<div class="content">
		<p>&nbsp Hampir setiap rumah pasti memiliki pekarangan, baik dalam luasan kecil maupun besar. Pekarangan memiliki banyak fungsi, di antaranya adalah menambah estetika bangunan rumah dengan ditanam tanaman hias. Dengan adanya tanaman hias, lingkungan rumah akan menjadi lebih indah dan asri.</p>

		<p>&nbsp Terdapat berbagai jenis tanaman hias, salah satu yang paling digemari adalah tanaman hias bunga. Tanaman hias bunga merupakan tanaman yang memiliki nilai estetika karena bunga yang dimilikinya. Ada banyak jenis tanaman hias bunga yang bisa ditanam di pekarangan, berikut adalah pilihan yang cocok untuk Anda.</p>

		<h2><br>Melati</h2>
		<br><center><img src="<?php echo base_url('asset/A5/melati.jpg') ?>"></center>
		
		<p><br>&nbsp Melati merupakan salah satu bunga yang paling populer di Indonesia. Salahkan salah satu jenis bunga melati, yaitu melati putih telah ditetapkan sebagai bunga nasional negara kita. Bunga melati menjadi pilihan pertama karena memiliki karakteristik bunga yang paling cocok dijadikan tanaman hias dan memiliki wangi yang khas.</p>

		<p>&nbsp Pemeliharaan tanaman dari bunga melati cukup sederhana, tidak ada perilaku khusus untuk merawat bunga ini. Tanaman tidak memerlukan lokasi khusus untuk penanamannya, Anda bisa menanamnya langsung di tanah atau dalam pot. Untuk menjaga estetika bunga, Anda bisa melakukan pemangkasan pada ranting yang sudah layu atau tumbuh tidak teratur. Pemangkasan juga akan mempercepat munculnya bunga.</p>

		<h2><br>Kamboja</h2>
		<br><center><img src="<?php echo base_url('asset/A5/kamboja.jpg') ?>"></center>
		
		<p><br>&nbsp Tidak sedikit orang yang memilih kamboja sebagai tanaman hias di pekarangannya. Selain memiliki bunga yang cantik, bentuk batang dan daun dari tanaman kamboja juga unik sehingga bisa menambah nilai estetikanya. Di Indonesia biasanya sering dijumpai tanaman kamboja dengan bunga berwarna putih, kuning, ungu, dan merah. Bunganya cukup harum.</p>

		<p>&nbsp Pemeliharaan tanaman kamboja cukup sederhana. Tanaman kamboja ini bisa ditanam langsung ditanam di tanah atau dalam pot. Sebagian orang terkadang juga menanam tanaman kamboja ini dalam bentuk bonsai. Gunakan media tanam porous yang tidak mudah memadat untuk menghindari genangan air,karena tanaman kamboja tidak tahan dengan genangan.</p>

		<h2><br>Kembang Sepatu</h2>
		<br><center><img src="<?php echo base_url('asset/A5/sepatu.jpg') ?>"></center>
		
		<p><br>&nbsp Kembang sepatu menjadi pilihan banyak orang karena pemeliharaannya yang sangat mudah. Ukuran bunga yang cukup besar menjadi daya tarik tersendiri dari tanaman ini. Bunganya berwarna merah dan berbentuk seperti terompet. Tanaman ini mampu tumbuh tinggi sampai 5 meter. Anda bisa menanamnya dalam pot untuk mengendalikan tinggi pohon.</p>

		<p>&nbsp Tanaman kembang sepatu membutuhkan banyak cahaya agar perkembangan bunganya lebih cepat. Namun, jangan sampai media tanam sampai kering, saat musim kemarau Anda harus rajin menyiramnya. Tanaman ini tidak akan berbuah, Anda bisa melakukan perbanyakan melalui stek atau cangkok.</p>

		<h2><br>Bougenville/Kertas</h2>
		<br><center><img src="<?php echo base_url('asset/A5/boge.jpg') ?>"></center>
		
		<p><br>&nbsp Bougenville atau yang kerap disebut bunga kertas ini merupakan bunga yang berasal dari Amerika Selatan. Daya tarik dari bunga ini adalah warna dari bunga yang cerah dan tumbuh rimbun. Disebut bunga kertas karena seludang bunganya tipis seperti kertas. Tanaman ini mampu tumbuh hingga 10 meter karena memang batangnya berkayu dan mampu tumbuh besar.</p>

		<p>&nbsp Bunga bougenville memerlukan pencahayaan dan sinar matahari yang cukup banyak seperti kamboja, sehingga baiknya ia ditempatkan di lokasi yang terbuka. Untuk mempercantik tampilan bunga ini, pangkaslah batang-batang yang masih sedikit bunganya agar bougenville terlihat subur. Hal yang perlu diperhatikan adalah tanaman ini mudah terserang hama sehingga Anda bisa menyemprotnya dengan pestisida apabila tanaman terserang.</p>

		<p><br><br>
			Sumber : <a href="https://farming.id/bunga-untuk-pekarangan/"> farming.id</a>

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