    <div class="container-fluid">

        <div class="col-xl col-lg">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-success">Informasi Posyandu</h6>
                    <?php $no = 0; foreach ($info as $i) : echo "";
                        $no++; ?>
                        <a class="btn btn-success" href="<?= site_url('Admin/Edit/') ?><?= $i->id; ?>">Edit</a>
                    <?php endforeach; ?>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-7 col-lg-12">
                            <?php foreach ($info as $i) : ?>
                                <img class="img-fluid rounded" src="<?= base_url('') ?>upload/poster/<?= $i->poster; ?>" alt="">
                            <?php endforeach; ?>
                        </div>

                        <div class="col-xl-5 col-md-6">

                            <div class="mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    Jumlah Pendaftar</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlah; ?> Peserta</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php $no = 0;
                            foreach ($info as $i) : echo "";
                                $no++; ?>

                                <div class="mb-4">
                                    <div class="card border-left-warning shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                        Tanggal Pelaksanaan</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $i->tanggal; ?></div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-calendar-alt fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="card border-left-info shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                        Tempat Pelaksanaan</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $i->tempat; ?></div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-clinic-medical fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="card border-left-danger shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                        Tentang Posyandu</div>
                                                    <div class="mb-0  text-gray-800"><?= $i->about; ?></div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-file-alt fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>

                    </div>
                </div>
                <!-- end card body -->
            </div>
        </div>


    </div>