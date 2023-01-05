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
                                <li class="breadcrumb-item">
                                    <a href="<?php echo site_url('Posyandu') ?>">
                                        Posyandu
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">
                                    Konfirmasi
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 pl-lg-0">
                        <div class="card card-posyandu text-center">
                            <h1>Cetak Formulir</h1>
                            <p>Desa Klampok, Kec. Singosari, Kab. Malang</p>
                            <?= $this->session->flashdata('message'); ?>
                            <hr>
                            <div>
                                <h3>Cari Data Pendaftar</h3>
                            </div>
                            <form class="mt-3" action="<?= site_url('Posyandu/Konfirmasi') ?>" method="post">
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 label-posyandu col-form-label text-left">Nomor HP</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="cari" value="" id="nohp" placeholder="cari dengan nomor hp">
                                        <?= form_error('cari', '<small class="form-text text-danger text-left">', '</small>'); ?>
                                    </div>
                                    <div class="form-group col-sm-2">
                                        <button type="submit" class="btn btn-block btn-success">Cari</button>
                                    </div>
                                </div>
                            </form>
                            <div class="table-responsive">

                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Nomor HP</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Dusun</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 0;
                                        foreach ($query as $data) : echo "";
                                            $no++; ?>
                                            <tr>
                                                <th scope="row"><?= $no; ?></th>
                                                <td><?= $data->nama; ?></td>
                                                <td><?= $data->nomor_hp; ?></td>
                                                <td><?= $data->alamat; ?></td>
                                                <td><?= $data->dusun; ?></td>
                                                <td>
                                                    <a href="<?= site_url('Posyandu/Cetak/') ?><?= $data->id_pendaftar; ?> " target="_blank" class="btn btn-primary">CETAK</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
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