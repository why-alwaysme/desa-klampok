<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('') ?>frontend/libraries/bootstrap/css/bootstrap.css">
    <title></title>

    <link rel="shortcut icon" type="image/icon" href="<?= base_url('') ?>/frontend/assets/logo/favicon.png" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&
    family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&
    display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('') ?>frontend/style/main.css">
</head>

<body>

    <main>
        <section class="section-posyandu-header"></section>
        <section class="section-posyandu-content">
            <div class="container">
                <div class="row indikator">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="<?php echo base_url('') ?>">
                                        Beranda
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">
                                    Posyandu
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-posyandu">
                            <h1>Kegiatan Posyandu</h1>
                            <p>Desa Klampok</p>
                            <div class="poster">
                                <div class="poster-container">
                                    <?php foreach ($info as $i) : ?>
                                        <img src="<?= base_url('') ?>/upload/poster/<?= $i->poster; ?>" class="tampil-poster rounded" alt="">
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <h2>Tentang Posyandu</h2>
                            <p>
                                <?php $no = 0;
                                foreach ($info as $i) : echo "";
                                    $no++; ?>
                                    <?= $i->about; ?>
                                <?php endforeach; ?>
                            </p>
                            <div class="manfaat row">
                                <div class="col-md-4">
                                    <img class="manfaat-image" src="frontend/images/ic_secure.png" alt="">
                                    <div class="description">
                                        <h3>Imunisasi</h3>
                                        <p>Layanan Imunisasi</p>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <img class="manfaat-image" src="frontend/images/ic_healthy-heart.png" alt="">
                                    <div class="description">
                                        <h3>Gizi</h3>
                                        <p>Peningkatan Gizi</p>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <img class="manfaat-image" src="frontend/images/ic_coronavirus.png" alt="">
                                    <div class="description">
                                        <h3>Pencegahan Diare</h3>
                                        <p>Penyediaan oralit</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-posyandu card-right">
                            <h2>Informasi Posyandu</h2>
                            <hr>
                            <table class="informasi-posyandu">
                                <tr>
                                    <td width="50%">Pelaksanaan</td>
                                    <td width="50%" class="text-right">
                                        <?php $no = 0;
                                        foreach ($info as $i) : echo "";
                                            $no++; ?>
                                            <?= $i->tanggal; ?>
                                        <?php endforeach; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50%">Pendaftar</td>
                                    <td width="50%" class="text-right">
                                        <?= $jumlah; ?> Peserta
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50%">Tempat</td>
                                    <td width="50%" class="text-right">
                                        <?php $no = 0;
                                        foreach ($info as $i) : echo "";
                                            $no++; ?>
                                            <?= $i->tempat; ?>
                                        <?php endforeach; ?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="daftar-posyandu">
                            <div class="btn-block">
                                <a href="<?= base_url('Posyandu/Konfirmasi') ?>" class="btn btn-konfirmasi mt-3 py-2">
                                    Cetak Formulir
                                </a>
                                <a href="<?= base_url('Posyandu/Daftar') ?>" class="btn btn-success btn-daftar-posyandu mt-3 py-2 px-2">
                                    Daftar Posyandu
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="<?= base_url('') ?>frontend/libraries/jquery/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url('') ?>frontend/libraries/bootstrap/js/bootstrap.js"></script>
    <script src="<?= base_url('') ?>frontend/libraries/retina/retina.min.js"></script>
</body>

</html>