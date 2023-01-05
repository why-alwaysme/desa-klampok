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
                                <li class="breadcrumb-item active">
                                    Air
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 pl-lg-0">
                        <div class="card card-posyandu">
                            <div class="text-center">
                                <h1>Air Klampok</h1>
                                <p>Pelayanan Jual-Beli Air Desa Klampok</p>
                                <hr>

                            </div>

                            <div class="row justify-content-center">
                                <div class="col-lg-9 mb-3">
                                    <div class="card card-air text-center">
                                        <div class="card-header card-header-pesan">
                                            <h3>Pesan</h3>
                                        </div>
                                        <div class="card-body">
                                            <form action="<?= site_url('Air/Pesan') ?>" method="POST" enctype="multipart/form-data">
                                                <input type="hidden" name="nomortagihan" id="nomortagihan" value="<?= rand(9999, 99999); ?>">
                                                <div class="form-gorup row mb-2">
                                                    <label for="" class="label-air col-form-label col-sm-2 text-left">Nama</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" id="namapemesan" name="namapemesan" placeholder="Habibie">
                                                        <?= form_error('namapemesan', '<small class="form-text text-danger text-left">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="form-gorup row mb-2">
                                                    <label for="" class="label-air col-form-label col-sm-2 text-left">Nomor HP</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" onkeypress="return hanyaAngka(event)" type="text" id="nohp" name="nohp" placeholder="081234">
                                                        <?= form_error('nohp', '<small class="form-text text-danger text-left">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="form-gorup row mb-2">
                                                    <label for="" class="label-air col-form-label col-sm-2 text-left">Isi Ulang</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" onkeypress="return hanyaAngka(event)" value="0" type="text" id="isiulang" name="isiulang" placeholder="Satuan dalam Galon" onkeyup="sum();">
                                                    </div>
                                                </div>
                                                <div class=" form-gorup row mb-2">
                                                    <label for="" class="label-air col-form-label col-sm-2 text-left">Air + Galon</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" onkeypress="return hanyaAngka(event)" value="0" type="text" id="paketgalon" name="paketgalon" placeholder="Satuan dalam Galon" onkeyup="sum();">
                                                    </div>
                                                </div>
                                                <div class=" form-gorup row mb-2">
                                                    <label for="" class="label-air col-form-label col-sm-2 text-left">Total</label>
                                                    <div class="col-sm-10">
                                                        <input readonly class="form-control" type="text" value="0" id="totaltagihan" name="totaltagihan" onchange='tryNumberFormat(this.form.thirdBox);' readonly>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-pesan btn-block">Pesan</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 mb-3">
                                    <div class="card card-air text-center">
                                        <div class="card-header card-header-harga">
                                            <h3>Harga</h3>
                                        </div>
                                        <div class="card-body">
                                            <table class="container card-harga">
                                                <?php $no = 0;
                                                foreach ($info as $i) : echo "";
                                                    $no++; ?>
                                                    <tr>
                                                        <td class="text-left">Isi ulang</td>
                                                        <td class="text-right">RP. <?= $i->harga_air ?></td>
                                                        <input type="hidden" value="<?= $i->harga_air ?>" id="hargaair">
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">Air + Galon</td>
                                                        <td class="text-right">RP. <?= $i->harga_air_galon ?></td>
                                                        <input type="hidden" value="<?= $i->harga_air_galon ?>" id="airgalon">
                                                    </tr>
                                                <?php endforeach; ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?= $this->session->flashdata('message'); ?>
                            <form class="mt-3" action="<?= site_url('Air') ?>" method="POST">
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 label-posyandu col-form-label text-left">Nomor HP</label>
                                    <div class="col-sm-8 mb-3">
                                        <input type="text" name="cari" onkeypress="return hanyaAngka(event)" id="nohp" class="form-control" placeholder="Cari dengan nomor hp">
                                    </div>
                                    <div class="form-group col-sm-2">
                                        <button type="submit" class="btn btn-block btn-primary">CARI</button>
                                    </div>
                                </div>
                                <?= form_error('cari', '<small class="form-text text-danger text-left">', '</small>'); ?>
                            </form>
                            <?php $no = 0;
                            foreach ($query as $data) : echo "";
                                $no++; ?>
                                <div class="col-lg-6 mb-3">
                                    <div class="card card-tagihan">
                                        <div class="card-header">
                                            <h5>RINCIAN TAGIHAN</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group row mb-2">
                                                <label for="" class="label-tagihan col-sm-4">Nomor Tagihan</label>
                                                <div class="col-sm-5 nomor-tagihan">
                                                    <?= $data->nomor_tagihan; ?>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-2">
                                                <label for="" class="label-tagihan col-sm-4">Nama</label>
                                                <div class="col-sm-5">
                                                    <?= $data->nama_pemesan; ?>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-2">
                                                <label for="" class="label-tagihan col-sm-4">Nomor HP</label>
                                                <div class="col-sm-5">
                                                    <?= $data->nomor_hp; ?>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-2">
                                                <label for="" class="label-tagihan col-sm-4">Isi Ulang</label>
                                                <div class="col-sm-5">
                                                    <?= $data->isi_ulang, " Galon"; ?>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-2">
                                                <label for="" class="label-tagihan col-sm-4">Air + Galon</label>
                                                <div class="col-sm-5">
                                                    <?= $data->air_galon, " Galon";
                                                    ('Galon'); ?>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-2">
                                                <label for="" class="label-tagihan col-sm-4">Total Tagihan</label>
                                                <div class="col-sm-5 total-tagihan">
                                                    <?= "Rp. ", $data->total; ?>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-2">
                                                <label for="" class="label-tagihan col-sm-4">Total Tagihan</label>
                                                <div class="col-sm-5 status">
                                                    <?= $data->status; ?>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="card-footer text-right">
                                            <a href="<?= site_url('Air/Pembayaran/') ?><?= $data->nomor_tagihan; ?>" class="btn btn-bayar px-4">Bayar</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>


    <script src="<?= base_url('') ?>/frontend/libraries/jquery/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url('') ?>/frontend/libraries/bootstrap/js/bootstrap.js"></script>
    <script src="<?= base_url('') ?>/frontend/libraries/retina/retina.min.js"></script>
    <script>
        function hanyaAngka(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))

                return false;
            return true;
        }

        function sum() {
            var hargaair = document.getElementById('hargaair').value;
            var air_galon = document.getElementById('airgalon').value;
            var isiulang = document.getElementById('isiulang').value;
            var paketgalon = document.getElementById('paketgalon').value;
            var result = parseInt(isiulang * hargaair) + parseInt(paketgalon * air_galon);
            if (!isNaN(result)) {
                document.getElementById('totaltagihan').value = result;
            }
        }
    </script>
</body>

</html>