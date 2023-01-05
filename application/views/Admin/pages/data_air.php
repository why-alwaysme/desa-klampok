<div class="container-fluid">

    <div class="col-xl col-lg">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Data Pemesanan Air</h6>

                <a class="btn btn-primary" href="<?= site_url('Admin/Laporan') ?>" target="_blank">
                    Eksport
                </a>
            </div>
            <!-- Card Body -->
            <div class="card-body text-center">
                <form class="mt-3" action="<?= site_url('Admin/Data_air') ?>" method="post">
                    <div class="form-group row">

                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="cari" value="" id="nohp" placeholder="cari nama pemesan">
                            <?= form_error('cari', '<small class="form-text text-danger text-left">', '</small>'); ?>
                        </div>
                        <div class="form-group col-sm-2">
                            <button type="submit" class="btn btn-block btn-primary">Cari</button>
                        </div>
                    </div>
                </form>
                <div class="table-responsive">

                    <table class="table tabel-air table-bordered" id="dataAir">
                        <thead class="thead-air">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nomor Tagihan</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Nomor HP</th>
                                <th scope="col">Isi Ulang</th>
                                <th scope="col">Air + Galon</th>
                                <th scope="col">Tagihan</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0;
                            foreach ($query as $data) : echo "";
                                $no++; ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $data->nomor_tagihan; ?></td>
                                    <td><?= $data->nama_pemesan; ?></td>
                                    <td><?= $data->nomor_hp; ?></td>
                                    <td><?= $data->isi_ulang; ?></td>
                                    <td><?= $data->air_galon; ?></td>
                                    <td><?= $data->total; ?></td>
                                    <td><?= $data->status; ?></td>
                                    <td>
                                        <a href="<?= site_url('Admin/Lunas/') ?><?= $data->nomor_tagihan; ?>" class="btn btn-success"><i class="fas fa-check-square"></i></a>
                                        <a href="<?= site_url('Admin/Invoice/') ?><?= $data->nomor_tagihan; ?>" target="_blank" class="btn btn-warning"><i class="fas fa-print"></i></a>
                                        <a href="<?= site_url('Admin/Hapus/') ?><?= $data->nomor_tagihan; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end card body -->
        </div>
    </div>
</div>