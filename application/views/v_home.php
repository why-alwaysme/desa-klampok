<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?= base_url('') ?>frontend/libraries/bootstrap/css/bootstrap.css">
	<link rel="shortcut icon" type="image/icon" href="<?= base_url('') ?>/frontend/assets/logo/favicon.png" />
	<title><?= $title; ?></title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&
    family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&
    display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

	<link rel="stylesheet" href="<?= base_url('') ?>frontend/style/main.css">
</head>

<body>

	<?php include('template/navbar.php') ?>

	<header class="text-center">
		<h1>
			Jelajahi Keindahan Klampok
		</h1>
		<p>
			Desa Klampok, Kecamatan Singosari, Kabupaten Malang
		</p>
		<a class="btn btn-get-started px-4 mt-4" href="#dusun">Mulai</a>
	</header>

	<main>
		<section class="section-dusun" id="dusun">
			<div class="container">
				<div class="row">
					<div class="col text-center section-dusun-heading">
						<h2>Dusun</h2>
						<p>"Klampok adalah sebuah Desa yang terletak di bawah gunung Arjuno. <br>
							Desa ini memiliki tiga dusun, yaitu: Dusun Krajan, Dusun Kebonjati dan Dusun Prodo Sumbul."</p>
					</div>
				</div>
				<div class="row mt-3">
					<div class="col-md-4">
						<div class="card card-dusun text-center">
							<div class="card-body col-sm-12 row">
								<div class="col-sm-2">
									<i class="fas fa-leaf"></i>
								</div>
								<div class="col-sm-10">
									<h5>Krajan</h5>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card card-dusun text-center border-left-success">
							<div class="card-body col-sm-12 row">
								<div class="col-sm-2">
									<i class="fas fa-leaf"></i>
								</div>
								<div class="col-sm-10">
									<h5>Kebonjati</h5>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card card-dusun text-center border-left-success">
							<div class="card-body col-sm-12 row">
								<div class="col-sm-2">
									<i class="fas fa-leaf"></i>
								</div>
								<div class="col-sm-10">
									<h5>Sumbul</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row mt-5">
					<div class="col text-center section-dusun-heading">
						<h2>Peninggalan Bersejarah</h2>
						<p>"Desa Klampok memiliki situs peninggalan bersejarah dari Kerajaan Singosari. <br>
							Terdapat Candi Telih yang tidak tersentuh dan jarang sekali orang tahu. <br>
							Adapun museum Singhasari yang didirikan pada tahun 2015, museum ini terletak di Singhasari Regency Desa Klampok."</p>
					</div>
				</div>
				<div class="row mt-3">
					<div class="container">
						<div class="row justify-content-center card-peninggalan">
							<div class="col-sm-6 row justify-content-center mb-2">
								<img src=" <?= base_url('') ?>/frontend/assets/images/home/canditelih.jpg" alt="" class="img-fluid rounded">
							</div>
							<div class="col-sm-6 row justify-content-center mb-2">
								<img src="<?= base_url('') ?>/frontend/assets/images/home/museumsingosari.jpg" alt="" class="img-fluid rounded">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section-artikel">
			<div class="container">
				<div class="row">
					<h3>Artikel Terbaru</h3>
					<div class="row mt-4 berita-bawah">
						<?php foreach($berita2 as $i): ?>
							<div class="col-lg-4 mb-3">
								<a href="<?= site_url('Berita/Artikel/')?><?= $i->slug; ?>">
									<div class="card card-berita-item h-100 card-block">
										<img class="card-img-top" src="<?= base_url('')?>/upload/artikel/<?= $i->gambar;?>" alt="Card image cap">
										<div class="card-body">
											<p><span><?= $i->dusun;?></span>, <?=$i->tanggal;?></p>
											<h5 class="card-title"><?=$i->judul;?></h5>
											<h4 class="isi-berita">
												<p><?= $i->isi;?></p>
											</h4>
										</div>
									</div>
								</a>
							</div>
							<?php endforeach; ?>
        			</div>
				</div>
			</div>
		</section>

		<section class="section-peta h-100 w-100 bg-white" style="box-sizing: border-box">
			<div class="container">

					<style>
						@import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

								.content-3-2 .btn:focus,
								.content-3-2 .btn:active {
									outline: none !important;
								}
								
								.content-3-2 {
									padding: 5rem 2rem;
								}

								.content-3-2 .img-hero {
									width: 100%;
									margin-bottom: 3rem;
								}

								.content-3-2 .right-column {
									width: 100%;
								}

								.content-3-2 .title-text {
									font: 600 1.875rem/2.25rem Poppins, sans-serif;
									margin-bottom: 2.5rem;
									letter-spacing: -0.025em;
									color: #121212;
								}

								.content-3-2 .title-caption {
									font: 500 1.5rem/2rem Poppins, sans-serif;
									margin-bottom: 1.25rem;
									color: #121212;
								}

								.content-3-2 .circle {
									font: 500 1.25rem/1.75rem Poppins, sans-serif;
									height: 3rem;
									width: 3rem;
									margin-bottom: 1.25rem;
									border-radius: 9999px;
									background-color: #27c499;
								}

								.content-3-2 .text-caption {
									font: 400 1rem/1.75rem Poppins, sans-serif;
									letter-spacing: 0.025em;
									color: #565656;
								}
								
								.content-3-2 .btn-learn {
									font: 600 1rem/1.5rem Poppins, sans-serif;
									padding: 1rem 2.5rem;
									background-color: #27c499;
									transition: 0.3s;
									letter-spacing: 0.025em;
									border-radius: 0.75rem;
								}

								.content-3-2 .btn:hover {
									background-color: #45dbb2;
									transition: 0.3s;
								}

								@media (min-width: 768px) {
									.content-3-2 .title-text {
									font: 600 2.25rem/2.5rem Poppins, sans-serif;
									}
								}

								@media (min-width: 992px) {
									.content-3-2 .img-hero {
									width: 50%;
									margin-bottom: 0;
									}

									.content-3-2 .right-column {
									width: 50%;
									}

									.content-3-2 .circle {
									margin-right: 1.25rem;
									margin-bottom: 0;
									}
								}
						</style>


					<div class="content-3-2 container-xxl mx-auto  position-relative" style="font-family: 'Poppins', sans-serif">
						<div class="d-flex flex-lg-row flex-column align-items-center">
						<!-- Left Column -->
							<div class="img-hero text-center justify-content-center d-flex">
								<img id="hero" class="img-fluid"
								src="<?= base_url('')?>/frontend/assets/images/home/petaklampok.png"
								alt="" />
							</div>

						<!-- Right Column -->
							<div class="right-column d-flex flex-column align-items-lg-start align-items-center text-lg-start text-center">
									
									<ul style="padding: 0; margin: 0">
									<li class="list-unstyled" style="margin-bottom: 4rem">
									<h2 class="title-text">Peta Potensi Desa Klampok</h2>
									</li>
									<li class="list-unstyled" style="margin-bottom: 4rem">
									<h4
										class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
										<span class="circle text-white d-flex align-items-center justify-content-center">
										1
										</span>
										Situs Budaya Candi Tele
									</h4>
									</li>
									<li class="list-unstyled" style="margin-bottom: 4rem">
									<h4
										class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
										<span class="circle text-white d-flex align-items-center justify-content-center">
										2
										</span>
										Wisata Museum Singhasari
									</h4>
									</li>
									<li class="list-unstyled" style="margin-bottom: 4rem">
										<h4
											class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
											<span class="circle text-white d-flex align-items-center justify-content-center">
											3
											</span>
											Potensi Pertanian Desa
										</h4>
									</li>
									<li class="list-unstyled" style="margin-bottom: 4rem">
										<h4
											class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
											<span class="circle text-white d-flex align-items-center justify-content-center">
											4
											</span>
											Wisata Hutan Mangunan
										</h4>
									</li>
									<li class="list-unstyled" style="margin-bottom: 4rem">
										<h4
											class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
											<span class="circle text-white d-flex align-items-center justify-content-center">
											5
											</span>
											Wisata Spot Foto Klampok
										</h4>
									</li>
									</ul>
								</div>
							</div>
					</div>
			</div>
		</section>


		<section class="section-kkn">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 mb-3">
						<h3>Tentang Kami</h3>
						<h2>KKN Desa Klampok 2021</h2>
						<p>KKN Sinambung Desa Klampok 2021 Universitas Negeri Malang Semester Gasal Tahun Ajaran 2021-2022</p>
						<a class="btn btn-kkn py-2" href="<?= site_url('Home/KKN') ?>">Selengkapnya</a>
					</div>
					<div class="col-lg-6">
						<img class="rounded img-fluid" src="<?= base_url('') ?>/frontend/assets/images/home/timkkn.jpeg" alt="">
					</div>
				</div>
			</div>
		</section>
	</main>

	<?php include('template/footer.php') ?>

	<script src="<?= base_url('') ?>frontend/libraries/jquery/jquery-3.6.0.min.js"></script>
	<script src="<?= base_url('') ?>frontend/libraries/bootstrap/js/bootstrap.js"></script>
	<script src="<?= base_url('') ?>frontend/libraries/retina/retina.min.js"></script>
</body>

</html>