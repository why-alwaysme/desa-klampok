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
                        <li class="breadcrumb-item">
                            <a href="<?php echo site_url('Berita') ?>">
                                Berita
                            </a>
                        </li>
                        <li class="breadcrumb-item active">
                            <?php foreach($artikel as $a): ?>
                                <?= $a->judul;?>
                            <?php endforeach; ?>  
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="col-lg-8">
        <?php foreach($artikel as $a): ?>
            <h3><?= $a->judul;?></h3>
            <p class="keterangan-artikel"> <span><?= $a->dusun;?></span>, <?=$a->tanggal;?></p>
        </div>
        <div class="row">
            <div class="col-lg-8 artikel-content">
                <img src="<?= base_url('')?>/upload/artikel/<?= $a->gambar;?>" alt="" class="rounded img-fluid cover-artikel">
                <p class="isi-artikel"><?= $a->isi; ?> </p>
                <?php endforeach; ?>
            </div>
            <div class="col-lg-4">
                <h4 class="artikel-terbaru" >ARTIKEL TERBARU</h4>
                <?php foreach($berita2 as $i): ?>
                    <div class="card-berita-kecil">
                        <a href="<?= site_url('Berita/Artikel/')?><?= $i->slug; ?>">
                        <div class="row">
                                <div class="col-sm-5">
                                    <img src="<?= base_url('')?>/upload/artikel/<?= $i->gambar;?>" alt="" class="img-fluid">
                                </div>
                                <div class="col-sm-7 my-3">
                                    <p> <span><?= $i->dusun;?></span></p>
                                    <h5><?=$i->judul;?></h5>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>  
            </div>
        </div>

    </div>
    </section>


    <script src="<?= base_url('') ?>/frontend/libraries/jquery/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url('') ?>/frontend/libraries/bootstrap/js/bootstrap.js"></script>
</html>