<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Air</title>
    <link rel="stylesheet" href="<?= base_url('') ?>/frontend/libraries/bootstrap/css/bootstrap.css">
    <link rel="shortcut icon" type="image/icon" href="<?= base_url('') ?>/frontend/assets/logo/favicon.png" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&
    family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&
    display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('') ?>/frontend/style/main.css">
</head>

<body>
    <main>
        <section class="section-checkout">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 pl-lg-0">
                        <div class="text-center">
                            <img src="<?= base_url('') ?>/frontend/assets/logo/checkout.jpg" alt="">
                            <h1>Pemesanan Berhasil!</h1>
                            <p>
                                Anda dapat melakukan pembayaran di tempat atau transfer melalui bank
                            </p>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 pl-lg-0">
                        <div class="justify-content-center row">
                            <div class="col-lg">
                                <div class="card card-checkout rounded text-center">
                                    <h3>Pembayaran Di Tempat</h3>
                                    <hr>
                                    <p>Silahkan membayar tagihan dengan datang ke PT. Air klampok </p>
                                    <table class="container checkout-transfer">
                                        <?php $no = 0;
                                        foreach ($info as $i) : echo "";
                                            $no++; ?>
                                            <tr>
                                                <td class="text-left">Alamat</td>
                                                <td class="text-right"><?= $i->alamat; ?></td>
                                            </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="card card-checkout rounded text-center">
                                    <h3>Transfer</h3>
                                    <hr>
                                    <table class="container checkout-transfer">
                                        <tr>
                                            <td class="text-left">BCA | <?= $i->nama_bca; ?></td>
                                            <td class="text-right"><?= $i->nomor_bca; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">BNI | <?= $i->nama_bni; ?></td>
                                            <td class="text-right"><?= $i->nomor_bni; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">MANDIRI | <?= $i->nama_mandiri; ?></td>
                                            <td class="text-right"><?= $i->nomor_mandiri; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">DANA | <?= $i->nama_dana; ?></td>
                                            <td class="text-right"><?= $i->nomor_dana; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">OVO | <?= $i->nama_ovo; ?></td>
                                            <td class="text-right"><?= $i->nomor_ovo; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">GO PAY | <?= $i->nama_gopay; ?></td>
                                            <td class="text-right"><?= $i->nomor_gopay; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">SHOPEE PAY | <?= $i->nama_shopee; ?></td>
                                            <td class="text-right"><?= $i->nomor_shopee; ?></td>
                                        </tr>
                                    <?php endforeach; ?>

                                    <?php $no = 0;
                                    foreach ($data as $d) : echo "";
                                        $no++; ?>
                                        <tr>
                                            <td class="text-left text-pemesan">Nomor Tagihan</td>
                                            <td class="text-right text-pemesan"><?= $d->nomor_tagihan; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left text-pemesan">Nama Pemesan</td>
                                            <td class="text-right text-pemesan"><?= $d->nama_pemesan; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left text-tagihan">Jumlah Tagihan</td>
                                            <td class="text-right text-tagihan">Rp. <?= $d->total; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </table>
                                </div>
                                <div class="konfirmasi-pembayaran">
                                    <?php $no = 0;
                                    foreach ($info as $i) : echo "";
                                        $no++; ?>
                                        <?php $no = 0;
                                        foreach ($data as $d) : echo "";
                                            $no++; ?>
                                            <a href="https://wa.me/<?= $i->nomor_wa; ?>?text=Halo%20Admin!%0ASaya%20ingin%20Konfirmasi%20Pembayaran%0ANomor%20Tagihan%3A%20<?= $d->nomor_tagihan; ?>%0ANama%3A%20<?= $d->nama_pemesan; ?>" target="_blank" class="btn btn-block btn-konfirmasi mt-3 py-2">Konfirmasi</a>
                                        <?php endforeach; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="container text-center mt-5">
                            <a href="<?= site_url('Air') ?>" class="btn btn-air-page mt-3 px-5">Selesai</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="<?= base_url('') ?>/frontend/libraries/jquery/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url('') ?>/frontend/libraries/bootstrap/js/bootstrap.js"></script>
    <script src="<?= base_url('') ?>/frontend/libraries/retina/retina.min.js"></script>
</body>

</html>