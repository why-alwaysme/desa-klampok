<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('') ?>/frontend/libraries/bootstrap/css/bootstrap.css">
    <title></title>
    <link rel="shortcut icon" type="image/icon" href="<?= base_url('') ?>/frontend/assets/logo/favicon.png" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&
    family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&
    display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('') ?>/frontend/style/main.css">
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
                                <li class="breadcrumb-item">
                                    <a href="<?php echo site_url('Posyandu') ?>">
                                        Posyandu
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">
                                    Daftar
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 pl-lg-0">
                        <div class="card card-posyandu text-center">
                            <h1>Pendaftaran Posyandu</h1>
                            <p>Desa Klampok, Kec. Singosari, Kab. Malang</p>
                            <?= $this->session->flashdata('message'); ?>
                            <hr>
                            <form method="post" action="<?= site_url('Posyandu/Daftar') ?>" class="needs-validation mt-3" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 label-posyandu col-form-label text-left">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="namapendaftar" id="namapendaftar" value="<?= set_value('namapendaftar') ?>" placeholder="Siti Noerbaya">
                                        <?= form_error('namapendaftar', '<small class="form-text text-danger text-left">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 label-posyandu col-form-label text-left">Nomor HP</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nohp" name="nohp" placeholder="0812345" value="<?= set_value('nohp') ?>">
                                        <small class="form-text text-muted text-left">Mohon untuk mengisi nomor telepon dengan teliti.</small>
                                        <?= form_error('nohp', '<small class="form-text text-danger text-left">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 label-posyandu col-form-label text-left">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="alamatpendaftar" id="alamatpendaftar" value="<?= set_value('alamatpendaftar') ?>">
                                        <?= form_error('alamatpendaftar', '<small class="form-text text-danger text-left">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 label-posyandu col-form-label text-left">Dusun Asal</label>
                                    <div class="col-sm-10">
                                        <select id="inputState" name="dusunpendaftar" class="form-control">
                                            <option selected disabled>Pilih Dusun</option>
                                            <option value="Dusun Krajan">Krajan</option>
                                            <option value="Dusun Kebonjati">Kebonjati</option>
                                            <option value="Dusun Sumbul">Sumbul</option>
                                        </select>
                                        <?= form_error('dusunpendaftar', '<small class="form-text text-danger text-left">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group mt-5">
                                    <button type="submit" name="daftar" class="btn btn-block btn-success py-2">Daftar</button>
                                </div>
                            </form>
                            <div>
                                <a href="<?= site_url('Posyandu') ?>" class="btn btn-block btn-danger py-2">
                                    Batal
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