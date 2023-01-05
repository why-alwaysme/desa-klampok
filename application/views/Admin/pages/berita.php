<div class="container-fluid">

    <div class="col-xl col-lg">
        <div class="card shadow mb-4">

            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-success">Artikel Desa</h6>
                <a class="btn btn-success" href="<?= site_url('Admin/Buat_Berita')?>">Tambah Artikel</a>
            </div>

            <div class="card-body">

                <form class="mt-3" action="<?= site_url('Admin/Berita') ?>" method="post">
                    <div class="form-group row">

                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="cari" value="" id="nohp" placeholder="cari judul">
                            <?= form_error('cari', '<small class="form-text text-danger text-left">', '</small>'); ?>
                        </div>
                        <div class="form-group col-sm-2">
                            <button type="submit" class="btn btn-block btn-success">Cari</button>
                        </div>
                    </div>
                </form>

                <div class="table-responsive tabel-berita">

                    <table class="table table-bordered text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Dusun</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0;
                            foreach ($artikel as $data) : echo "";
                                $no++; ?>
                                <tr>
                                    <th scope="row"><?= $no; ?></th>
                                    <td><?= $data->judul; ?></td>
                                    <td><?= $data->tanggal; ?></td>
                                    <td><?= $data->dusun; ?></td>
                                    <td>
                                        <a href="<?= site_url('Admin/Hapus3/') ?><?= $data->id; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
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