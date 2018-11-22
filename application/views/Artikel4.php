<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Artikel 4</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/A4/style_A4.css') ?>">

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
				<img src="<?php echo base_url('asset/A4/LOGO1.png') ?>">
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
			<h1>Mengolah Sampah Organik Menjadi Pupuk</h1>
			<img src="<?php echo base_url('asset/A4/pupuk.jpg') ?>">
	</div>
	
	<div class="content">
		<p>&nbsp Sampah merupakan permasalahan yang terus menjadi momok di masyarakat, terutama di daerah perkotaan. Banyak yang belum menyadari jika sampah yang dihasilkan sebenarnya mampu dimanfaatkan kembali. Sampah yang termasuk non organik dapat dilakukan daur ulang atau setidaknya dijual, sedangkan sampah organik bisa diubah menjadi pupuk dengan sedikit pengolahan.</p>

		<p>&nbsp Sampah organik rumah tangga biasa berupa sisa makanan, buah, sayuran, dan daun yang gugur. Indonesia memproduksi 200 ribu ton sampah setiap harinya dan 85% di antaranya merupakan sampah organik. Sampah organik ini masih banyak yang dibuang begitu saja tanpa dimanfaatkan. Padahal sampah organik memiliki potensi tinggi untuk bisa digunakan menjadi pupuk.</p>

		<h2><br>POC (Pupuk Organik Cair)</h2>
		
		<p><br> &nbsp Pupuk organik cair merupakan salah satu jenis pupuk hasil pengolahan sampah organik. Pupuk organik cair dihasilkan dengan menampung sampah organik di suatu wadah. Wadah bisa menggunakan drum bekas yang dibagian bawahnya diberi lubang untuk dimasukkan keran yang nantinya sebagai tempat keluar cairan pupuk. Drum diberi tutup tetapi tetap diberi beberapa lubang sebagai jalan masuk lalat hitam yang berfungsi untuk membantu pembusukan. Jika sampah organik sudah terkumpul dan mulai membusuk di dalam drum, lalat hitam akan datang dengan sendirinya.</p>

		<p> &nbsp Sampah organik yang mudah dan cepat terbentuk menjadi pupuk organik cair adalah buah atau sayur, terutama yang sudah dalam kondisi membusuk. Namun, tidak menutup kemungkinan sampah rumah tangga lain dan dedaunan juga bisa digunakan, lakukan pemotongan atau penghalusan untuk mempercepat proses pembusukan. Jika sampah organik sudah terkumpul dalam drum, dalam waktu 1-2 bulan keran bisa dibuka dan mengeluarkan pupuk organik cair. Tambah terus sampah organiknya jika yang di dalam drum sudah mulai menyusut. Pupuk organik cair yang sudah matang tidak berbau menyengat, tetapi berbau seperti tanah dan berwarna coklat.</p>

		<p><br>Beberapa hal penting yang perlu diperhatikan dalam pembuatan pupuk organik cair adalah:</p>

		<p><br>1. Pastikan drum tidak terpapar cahaya matahari secara langsung dan tidak terkena air hujan.</p>
		<p>2. Berikan dekomposer seperti EM4 agar pembusukan lebih cepat terjadi.</p>
		<p>3. Apabila pupuk organik cair memiliki bau menyengat berarti pembentukan pupuk gagal dan jangan digunakan.</p>

		<p><br> &nbsp Dari hasil penelitian, pupuk organik cair mampu mengandung unsur seperti Magnesium (Mg), Kalium (K), Sulfur (S), Calsium(Ca), Argon (Ar), Ferum (Fe), Argentum (Ag), dan Rhodium (Rh). Pengaplikasian bisa dengan mencampurkan pupuk organik cair dengan air dengan perbandingan 1:10 dan disiramkan ke tanah atau tanaman. Kegiatan berkebun pasti akan lebih menyenangkan jika bisa membuat pupuk sendiri.</p>

		<p><br><br>
			Sumber : <a href="https://farming.id/mengolah-sampah-organik/"> farming.id</a>

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