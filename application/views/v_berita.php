<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('') ?>/frontend/libraries/bootstrap/css/bootstrap.css">
    <link rel="shortcut icon" type="image/icon" href="<?= base_url('') ?>/frontend/assets/logo/favicon.png" />
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&
    family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&
    display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('') ?>/frontend/style/main.css">
</head>
<body>
    <section class="section-berita-header"></section>
    <section class="section-berita-content">
    <div class="container">
        <div class="row indikator">
            <div class="col pl-0">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="<?php echo base_url('') ?>">
                                Beranda
                            </a>
                        </li>
                        <li class="breadcrumb-item active">
                            Berita
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-7 pl-lg-0">
                <div class="carousel slide carousel-berita" id="banner" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?= base_url('')?>/frontend/assets/images/home/timkkn.jpeg" alt="" class="rounded img-fluid">
                            <div class="carousel-caption d-md-block carousel-berita-caption">
                                <h5 class="judul-berita">Pelaksanaan KKN UM Sinambung Desa Klampok 2021</h5>
                            </div>
                        </div>
                    <?php foreach($berita2 as $i): ?>
                        <div class="carousel-item">
                            <img src="<?= base_url('')?>/upload/artikel/<?= $i->gambar;?>" alt="" class="rounded img-fluid">
                            <div class="carousel-caption d-md-block carousel-berita-caption">
                                <h5 class="judul-berita"><?=$i->judul;?></h5>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <a href="#banner" class="carousel-control-prev" role="button" data-slide="prev" >
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a href="#banner" class="carousel-control-next" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-5">
                    <h4 class="artikel-terbaru" >ARTIKEL TERBARU</h4>
                <?php foreach($berita2 as $i): ?>
                    <div class="card-berita-kecil">
                        <a href="<?= site_url('Berita/Artikel/')?><?= $i->slug; ?>">
                        <div class="row">
                                <div class="col-sm-6">
                                    <img src="<?= base_url('')?>/upload/artikel/<?= $i->gambar;?>" alt="" class="img-fluid">
                                </div>
                                <div class="col-sm-6 my-3">
                                    <p> <span><?= $i->dusun;?></span></p>
                                    <h5><?=$i->judul;?></h5>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>    
            </div>
        </div>
        
        <hr class="garis">
        <div class="mt-3">
            <h5>Berita Lainnya</h5>
        </div>

        <div class="row mt-4 berita-bawah">

            <?php foreach($berita as $i): ?>
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
    </section>


<script src="<?= base_url('') ?>/frontend/libraries/jquery/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url('') ?>/frontend/libraries/bootstrap/js/bootstrap.js"></script>
    <script src="<?= base_url('') ?>/frontend/libraries/retina/retina.min.js"></script>
</body>
</html>