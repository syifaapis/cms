<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>CMS</title>
	<meta name="description" content="">
	<meta name="keywords" content="">

	<!-- Favicons -->
	<link href="<?= base_url('assets/Agri/') ?>assets/img/favicon.png" rel="icon">
	<link href="<?= base_url('assets/Agri/') ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com" rel="preconnect">
	<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Marcellus:wght@400&display=swap"
		rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?= base_url('assets/Agri/') ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/Agri/') ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="<?= base_url('assets/Agri/') ?>assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="<?= base_url('assets/Agri/') ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/Agri/') ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

	<!-- Main CSS File -->
	<link href="<?= base_url('assets/Agri/') ?>assets/css/main.css" rel="stylesheet">

	<!-- =======================================================
  * Template Name: AgriCulture
  * Template URL: https://bootstrapmade.com/agriculture-bootstrap-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="blog-page">

	<header id="header" class="header d-flex align-items-center position-relative"
		style="background-color: #D9EAFD; color: white; margin-bottom: 20px;">
		<div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
			<a href="<?= base_url('Auth') ?>" class="logo d-flex align-items-center" style="color: white;">
				<i class="bi bi-paw" style="font-size: 24px; margin-right: 10px;"></i>
				<h1 style="font-family: 'Trajan';"><?= $konfig->judul_website; ?></h1>
			</a>
			<nav id="navmenu" class="navmenu" style="display:flex; align-items:center;">
				<ul style="margin-right:20px; list-style: none;">
					<li><a href="<?= base_url() ?>" style="color: black; text-decoration: none;">Home</a></li>
					<?php foreach ($kategori as $kate){ ?>
					<a href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>" class="nav-item nav-link"
						style="color: black; text-decoration: none;">
						<?= $kate['nama_kategori'] ?>
					</a>
					<?php } ?>
				</ul>
				<i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
			</nav>
		</div>
	</header>
	<main class="main">
		<div class="container section-title aos-init aos-animate" data-aos="fade-up" style="margin-top: 60px;">
			<h1><?= $nama_kategori; ?></h1>
			<p>Choice Your Beauty</p>
		</div>


		<!-- Blog Posts 2 Section -->
		<section id="blog-posts-2" class="blog-posts-2 section">
			<div class="container">
				<div class="row gy-4 gx-4">
					<?php foreach ($konten as $uu){ ?>
					<div class="col-lg-4">
						<article class="position-relative h-100">
							<div class="card post-img position-relative overflow-hidden">
								<img src="<?= base_url('assets/upload/konten/'.$uu['foto']) ?>" class="img-fluid"
									alt="">
							</div>
							<div class="meta d-flex align-items-end">
								<span class="post-date">
									<p><?= $uu['tanggal'] ?></p>
								</span>
								<div class="d-flex align-items-center">
									<i class="bi bi-person"></i> <span class="ps-2"><?= $uu['nama'] ?></span>
								</div>
								<span class="px-3 text-black-50">/</span>
								<div class="d-flex align-items-center">
									<i class="bi bi-folder2"></i> <span class="ps-2"><?= $uu['nama_kategori'] ?></span>
								</div>
							</div>
							<div class="post-content d-flex flex-column">
								<h3 class="post-title"><?= $uu['judul'] ?></h3>
								<a href="<?= base_url('home/artikel/') . $uu['slug'] ?>"
									class="readmore stretched-link"><span>Baca Selengkapnya</span><i
										class="bi bi-arrow-right"></i></a>
							</div>
						</article>
					</div>
					<?php } ?>
				</div>
			</div>
		</section><!-- /Blog Posts 2 Section -->

		<!-- Blog Pagination Section -->
		<section id="blog-pagination" class="blog-pagination section">

			<div class="container">
				<div class="d-flex justify-content-center">
					<ul>
						<li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
						<li><a href="#">1</a></li>
						<li><a href="#" class="active">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li>...</li>
						<li><a href="#">10</a></li>
						<li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
					</ul>
				</div>
			</div>

		</section><!-- /Blog Pagination Section -->

		<!-- Call To Action Section -->

	</main>

	<footer id="footer" class="footer dark-background">

		<div class="footer-top">
			<div class="container">
				<div class="row gy-4">
					<div class="col-lg-4 col-md-6 footer-about">
						<a href="index.html" class="logo d-flex align-items-center">
							<span class="sitename"><?= $konfig->judul_website; ?></span>
						</a>
						<div class="footer-contact pt-3">
							<p><?= $konfig->profil_website; ?></p>
							<div class="social-links order-first order-lg-last mb-3 mb-lg-0">
								<a href="<?= $konfig->instagram; ?>"><i class="bi bi-instagram"></i></a>
								<a href="<?= $konfig->facebook; ?>"><i class="bi bi-facebook"></i></a>
							</div>

						</div>
					</div>

					<div class="col-lg-2 col-md-3 footer-links">
						<h4>Useful Links</h4>
						<ul>
							<li><a href="<?= base_url() ?>">Home</a></li>

							<?php foreach ($kategori as $kate){ ?>
							<li><a
									href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>"><?= $kate['nama_kategori'] ?></a>
							</li>

							<?php } ?>

						</ul>
					</div>

					<div class="col-lg-3 col-md-6 mb-5">
						<h4 class="mb-4">Contact Us</h4>
						<div class="d-flex">
							<h4 class="bi bi-house"></h4>
							<div class="pl-3">
								<h5 class="text-white" style="position:relative;left:0.5rem;">Alamat</h5>
								<p><?php echo $konfig->alamat; ?></p>
							</div>
						</div>
						<div class="d-flex">
							<h4 class="bi bi-folder"></h4>
							<div class="pl-3">
								<h5 class="text-white" style="position:relative;left:0.5rem;"> Email</h5>
								<p><?php echo $konfig->email; ?></p>
							</div>
						</div>
						<div class="d-flex">
							<h4 class="bi bi-phone"></h4>
							<div class="pl-3">
								<h5 class="text-white" style="position:relative;left:0.5rem;">Phone</h5>
								<p><?php echo $konfig->no_wa; ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- Scroll Top -->
	<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
			class="bi bi-arrow-up-short"></i></a>

	<!-- Preloader -->
	<div id="preloader"></div>

	<!-- Vendor JS Files -->
	<script src="<?= base_url('assets/Agri/') ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('assets/Agri/') ?>assets/vendor/php-email-form/validate.js"></script>
	<script src="<?= base_url('assets/Agri/') ?>assets/vendor/aos/aos.js"></script>
	<script src="<?= base_url('assets/Agri/') ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="<?= base_url('assets/Agri/') ?>assets/vendor/glightbox/js/glightbox.min.js"></script>

	<!-- Main JS File -->
	<script src="<?= base_url('assets/Agri/') ?>assets/js/main.js"></script>

</body>

</html>
