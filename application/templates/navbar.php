<div class="super_container">

	<!-- Header -->

	<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<span>SMA X BANDUNG</span>
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
						<li class="main_nav_item"><a href="<?= base_url('home') ?>">home</a></li>
						<li class="main_nav_item"><a href="<?= base_url('home#profil') ?>">profil</a></li>
						<li class="main_nav_item"><a href="<?= base_url('elearningsiswa') ?>">E-Learning</a></li>
						<li class="main_nav_item">
							<div class="dropdown">
								<a class="secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									PPDB</a>
								<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
									<a class="dropdown-item" href="<?= base_url('ppdb') ?>">Info PPDB</a>
									<a class="dropdown-item" href="<?= base_url('ppdb/biaya') ?>">Biaya Pendidikan</a>
									<a class="dropdown-item" href="<?= base_url('ppdb/ketentuanppdb') ?>">Ketentuan Pendaftaran</a>
									<a class="dropdown-item" href="<?= base_url('Ppdb/form') ?>">Beli Formulir</a>
									<a class="dropdown-item" href="<?= base_url('Ppdb/registrasi') ?>">Buat Akun PPDB</a>
								</div>
							</div>
						</li>
						<li class="main_nav_item"><a href="<?= base_url('home/news') ?>">Berita</a></li>
						<li class="main_nav_item"><a href="<?= base_url('home#kontak') ?>">kontak</a></li>
						<li class="main_nav_item"><a href="<?= base_url('auth/login') ?>">LOGIN</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<img src="images/phone-call.svg" alt="">
			<span>+43 4566 7788 2457</span>
		</div>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
		</div>

	</header>

	<!-- Menu -->
	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="#">Home</a></li>
					<li class="menu_item menu_mm"><a href="#">Profil</a></li>
					<li class="menu_item menu_mm">
						<div class="dropdown">
							<a class="secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								PPDB</a>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<a class="dropdown-item" href="<?= base_url('ppdb') ?>">Info PPDB</a>
								<a class="dropdown-item" href="<?= base_url('ppdb/biaya') ?>">Biaya Pendidikan</a>
								<a class="dropdown-item" href="<?= base_url('ppdb/ketentuanppdb') ?>">Ketentuan Pendaftaran</a>
								<a class="dropdown-item" href="<?= base_url('Ppdb/form') ?>">Beli Formulir</a>
								<a class="dropdown-item" href="<?= base_url('Ppdb/registrasi') ?>">Buat Akun PPDB</a>
							</div>
						</div>
					</li>
					<li class="menu_item menu_mm"><a href="news.html">Berita</a></li>
					<li class="menu_item menu_mm"><a href="contact.html">Kontak</a></li>
				</ul>

				<!-- Menu Social -->

				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>

				<div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
			</div>

		</div>

	</div>