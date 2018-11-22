<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sayur Kangkung</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/A19/style_A19.css') ?>">

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
				<img src="<?php echo base_url('asset/A19/LOGO1.png') ?>">
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
			<h1>Tips dan Trik Bertanam Kangkung Agar Hasil Melimpah</h1>
			<img src="<?php echo base_url('asset/A19/kangkung.jpeg') ?>">
	</div>
	
	<div class="content">
		<p>&nbsp Kondisi geografis Indonesia sangat cocok sebagai tempat untuk membudidayakan kangkung. Bertanam kangkung bisa dilakukan di dataran rendah sampai dataran tinggi. Berdasarkan habitat hidupnya, kangkung dibedakan menjadi 2 jenis, yaitu kangkung darat dan kangkung air.</p>

		<p>&nbsp Nah, berikut ini akan diulas mengenai tips-tips budidaya kangkung darat dengan cara mudah namun dengan hasil melimpah.</p>
		
		<h3><br>Pembibitan</h3>
		
		<p><br> &nbsp Kunci sukses dalam budidaya salah satunya, yakni pemilihan bibit yang unggul. Pasalnya, bibit unggul akan menghasilkan tanaman yang baik dan tahan penyakit. Pembibitan untuk tanaman kangkung bisa dilakukan dengan dua cara, yaitu sistem generatif dengan menyebar benih biji kangkung dan sistem vegetatif dengan setek batang. Namun, sebaiknya gunakan sistem generatif karena hasilnya akan jauh lebih melimpah dan tahan penyakit.</p>

		<h3><br>Lahan</h3>

		<p> &nbsp Selain bibit unggul, gunakanlah lahan yang sudah bersih dari segala macam gulma dan kotoran. Lalu, buatlah bedengan-bedengan selebar 1 meter dengan jarak pisah sekitar 30 cm. Usahakan juga agar lahan yang ditanami mendapat sinar matahari yang cukup.</p>

		<h3><br>Lahan</h3>

		<p><br> &nbsp Pemupukan dilakukan satu kali sebelum masa tanam dengan menggunakan pupuk kandang (kotoran ayam), agar lebih cepat terurai sehingga cocok untuk kangkung yang memiliki masa panen yang sebentar.</p>

		<h3><br>Penanaman</h3>

		<p> &nbsp Taruhlah biji-biji kangkung pada lubang-lubang yang dibuat di lahan dengan jarak 20 cm per lubang, hindari menyebar biji kangkung karena berakibat tidak meratanya tanaman sehingga hasilnya yang didapat akan menurun.</p>

		<h3><br>Pemeliharaan</h3>

		<p><br> &nbsp Pengairan adalah hal yang sangat penting dan dilakukan setiap hari pagi dan sore agar kangkung tumbuh dengan sempurna dan mendapat nutrisi yang cukup. Jika terjadi serangan hama atau penyakit gunakanlah pestisida untuk mengendalikan hama. Hama yang biasa menyerang kangkung berupa ulat grayak dan kutu daun.</p>

		<p><br> &nbsp Setelah 4—5 minggu kangkung sudah bisa di panen, pemanenannya sendiri bisa dilakukan dengan dua cara, yaitu dicabut dan dipotong. Untuk pemanenan pertama sebaiknya gunakan sistem potong karena kangkung dapat tumbuh kembali setelahnya dan menekan biaya modal. Sementara, untuk panen kedua kangkung sebaiknya dicabut.</p>

		<p><br><br>
			Sumber : <a href="https://www.pertanianku.com/tips-dan-trik-bertanam-kangkung-agar-hasil-melimpah/">pertanianku.com</a>
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