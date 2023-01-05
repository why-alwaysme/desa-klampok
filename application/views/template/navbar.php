<div class="navbar1 fixed-top">
	<nav class="container row navbar navbar-expand-lg mx-auto">

		<div class="logo">
			<a href="<?= base_url('') ?>">
				Desa<span>Klampok</span>
			</a>
		</div>

		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
			<i class="fa fa-bars" style="color:#fff"></i>
		</button>

		<div class="collapse navbar-collapse" id="navb">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item mx-md-2">
					<a class="nav-link" href="<?= base_url('') ?>">Beranda</a>
				</li>
				<li class="nav-item mx-md-2">
					<a class="nav-link" href="<?= site_url('Home/Profil') ?>">Profil</a>
				</li>
				<li class="nav-item mx-md-2">
					<a class="nav-link" href="<?= site_url('Berita') ?>">Berita</a>
				</li>
				<li class="nav-item mx-md-2">
					<a class="nav-link" href="<?= site_url('Air') ?>">Air</a>
				</li>
				<li class="nav-item mx-md-2">
					<a class="nav-link" href="<?= site_url('Posyandu') ?>">Posyandu</a>
				</li>
			</ul>
		</div>

	</nav>

</div>