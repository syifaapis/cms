<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title><?= $judul; ?></title>
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
			<a href="<?= base_url('') ?>" class="logo d-flex align-items-center" style="color: white;">
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

		<!-- Page Title -->

		<div class="container">
			<div class="row">

				<div class="col-lg-8">

					<!-- Blog Details Section -->
					<section id="blog-details" class="blog-details section">
						<div class="container">

							<article class="article">

								<div class="post-img">
									<img src="<?= base_url('assets/upload/konten/'.$konten->foto)?>" alt=""
										class="img-fluid">
								</div>

								<h2 class="title"><?= $konten->judul; ?></h2>

								<div class="meta-top">
									<ul>
										<li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
												href="blog-details.html"><?= $konten->nama; ?></a></li>
										<li class="d-flex align-items-center"><i class="bi bi-folder"></i> <a
												href="blog-details.html"><?= $konten->nama_kategori; ?></a></li>
										<li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
												href="blog-details.html"><time
													datetime="2020-01-01"><?= $konten->tanggal; ?></time></a></li>

									</ul>
								</div><!-- End meta top -->

								<div class="content">
									<div>
										<?= nl2br($konten->keterangan); ?>
									</div>
								</div>


								<div class="meta-bottom">
									<i class="bi bi-folder"></i>
									<ul class="cats">
										<li><a href="#">Business</a></li>
									</ul>

									<i class="bi bi-tags"></i>
									<ul class="tags">
										<li><a href="#">Creative</a></li>
										<li><a href="#">Tips</a></li>
										<li><a href="#">Marketing</a></li>
									</ul>
								</div><!-- End meta bottom -->

							</article>

						</div>
					</section><!-- /Blog Details Section -->

				</div>

				<div class="col-lg-4 sidebar">
					<div class="widgets-container">
						<!-- Categories Widget -->
						<div class="categories-widget widget-item">
							<h3 class="widget-title">Categories</h3>
							<ul class="mt-3">
								<?php foreach ($kategori as $kate){ ?>
								<li><a
										href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>"><?= $kate['nama_kategori'] ?></a>
								</li>
								<?php } ?>
							</ul>
						</div>
						<!--/Categories Widget -->

						<!-- Garis pemisah antara kategori dan gambar -->
						<hr class="my-4">

						<div style="margin-bottom: 20px; border: none; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); border-radius: 10px; overflow: hidden; transition: transform 0.3s, box-shadow 0.3s;"
							onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 20px rgba(0, 0, 0, 0.15)';"
							onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.1)';">
							<?php foreach($another_konten as $aa) { ?>
							<div style="display: flex; align-items: center; gap: 10px;">
								<div style="flex: 1;">
									<a href="<?= base_url('home/artikel/') . $aa['slug'] ?>">
										<img src="<?= base_url('assets/upload/konten/') . $aa['foto'] ?>"
											alt="<?= $aa['judul'] ?>"
											style="width: 100%; height: 100px; object-fit: cover; border-top-left-radius: 10px; border-bottom-left-radius: 10px;">
									</a>
								</div>
								<div style="flex: 2; padding: 16px;">
									<p style="margin: 0; font-size: 1.1rem; font-weight: bold;">
										<a href="<?= base_url('home/artikel/') . $aa['slug'] ?>"
											style="color: #000; text-decoration: none; transition: color 0.3s;"
											onmouseover="this.style.color='#007bff';"
											onmouseout="this.style.color='#000';">
											<?= $aa['judul'] ?>
										</a>
									</p>
								</div>
							</div>
							<?php } ?>
						</div>

					</div>



				</div>
			</div>

		</div>

		<!-- Blog Posts 2 Section -->



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
