<div class="container-fluid">

    <div class="col-xl col-lg">
        <div class="card shadow mb-4 card-info-air">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Informasi Air</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <?php $no = 0;
                foreach ($data as $i) : echo "";
                    $no++ ?>
                    <form action="<?= site_url('Admin/Edit2') ?>" method="POST">
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label class="label-alamat">Alamat</label>
                                <input type="text" name="alamat" class="form-control" value="<?= $i->alamat; ?>" required placeholder="628123">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label class="label-wa">Nomor Whatsapp (Awali dengan angka 62 | contoh: 628123)</label>
                                <input type="text" name="nomor_wa" class="form-control" value="<?= $i->nomor_wa; ?>" required placeholder="628123">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label class="label-harga">Harga Isi Ulang</label>
                                <input type="text" name="harga_air" class="form-control" value="<?= $i->harga_air; ?>" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="label-harga">Harga Air + Galon</label>
                                <input type="text" name="harga_galon" class="form-control" value="<?= $i->harga_air_galon; ?>" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label class="label-bca">Nama Rekening BCA</label>
                                <input type="text" name="nama_bca" class="form-control" value="<?= $i->nama_bca; ?>" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="label-bca">Nomor Rekening BCA</label>
                                <input type="text" name="nomor_bca" class="form-control" value="<?= $i->nomor_bca; ?>" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label class="label-bni">Nama Rekening BNI</label>
                                <input type="text" name="nama_bni" class="form-control" value="<?= $i->nama_bni; ?>" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="label-bni">Nomor Rekening BNI</label>
                                <input type="text" name="nomor_bni" class="form-control" value="<?= $i->nomor_bni; ?>" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label class="label-mandiri">Nama Rekening MANDIRI</label>
                                <input type="text" name="nama_mandiri" class="form-control" value="<?= $i->nama_mandiri; ?>" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="label-mandiri">Nomor Rekening MANDIRI</label>
                                <input type="text" name="nomor_mandiri" class="form-control" value="<?= $i->nomor_mandiri; ?>" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label class="label-dana">Nama Rekening DANA</label>
                                <input type="text" name="nama_dana" class="form-control" value="<?= $i->nama_dana; ?>" required placeholder="Nama Rekening OVO">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="label-dana">Nomor DANA</label>
                                <input type="text" name="nomor_dana" class="form-control" value="<?= $i->nomor_dana; ?>" required placeholder="Nomor OVO">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label class="label-ovo">Nama Rekening OVO</label>
                                <input type="text" name="nama_ovo" class="form-control" value="<?= $i->nama_ovo; ?>" required placeholder="Nama Rekening OVO">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="label-ovo">Nomor OVO</label>
                                <input type="text" name="nomor_ovo" class="form-control" value="<?= $i->nomor_ovo; ?>" required placeholder="Nomor OVO">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label class="label-gopay">Nama Rekening Go Pay</label>
                                <input type="text" name="nama_gopay" class="form-control" value="<?= $i->nama_gopay; ?>" required placeholder="Nama Rekening OVO">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="label-gopay">Nomor Go Pay</label>
                                <input type="text" name="nomor_gopay" class="form-control" value="<?= $i->nomor_gopay; ?>" required placeholder="Nomor OVO">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label class="label-shopee">Nama Shopee</label>
                                <input type="text" name="nama_shopee" class="form-control" value="<?= $i->nama_shopee; ?>" required placeholder="Nama Rekening OVO">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="label-shopee">Nomor Shopee</label>
                                <input type="text" name="nomor_shopee" class="form-control" value="<?= $i->nomor_shopee; ?>" required placeholder="Nomor OVO">
                            </div>
                        </div>
                        <div class="form-row">
                            <button type="submit" class="btn btn-block btn-primary">SUBMIT</button>
                        </div>
                    </form>
                <?php endforeach; ?>
            </div>
            <!-- end card body -->
        </div>
    </div>
</div>