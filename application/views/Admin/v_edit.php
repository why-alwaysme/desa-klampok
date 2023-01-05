<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('') ?>/frontend/libraries/bootstrap/css/bootstrap.css">
    <title>Edit Info Posyandu</title>
    <link rel="shortcut icon" type="image/icon" href="<?= base_url('') ?>/frontend/assets/logo/favicon.png" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&
    family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&
    display=swap" rel="stylesheet">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?= base_url('') ?>/frontend/style/main.css">
</head>

<body>

    <div class="container-fluid mt-5">

        <div class="col-xl col-lg">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-success">Edit Informasi Posyandu</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <?= $this->session->flashdata('message'); ?>
                    <form method="post" action="<?= site_url('Admin/Edit') ?>" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-success font-weight-bold">Tanggal Pelaksanaan</label>
                            <div class="col-sm-10">
                                <?php foreach ($info as $i) : ?>
                                    <input type="text" id="datepicker" value="<?= $i->tanggal; ?>" name="tanggal" class="form-control">
                                <?php endforeach; ?>
                                <?= form_error('tanggal', '<small class="form-text text-danger text-left">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-success font-weight-bold">Tempat Pelaksanaan</label>
                            <div class="col-sm-10">
                                <?php foreach ($info as $i) : ?>
                                    <input type="text" value="<?= $i->tempat; ?>" name="tempat" class="form-control">
                                <?php endforeach; ?>
                                <?= form_error('tempat', '<small class="form-text text-danger text-left">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-success font-weight-bold">Upload Poster</label>
                            <div class="col-sm-10">
                                <div class="custom-file">
                                    <input class="form-control" type="file" placeholder="" name="poster" id="poster">
                                    <?= form_error('poster', '<small class="form-text text-danger text-left">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-success font-weight-bold">Deskripsi Posyandu</label>
                            <?= form_error('keterangan', '<small class="form-text text-danger text-left mb-3">', '</small>'); ?>
                            <textarea name="keterangan" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" name="update" value="Update" class="btn btn-primary py-2 col-sm-12 mt-4 mb-4" />
                            <a href="<?= site_url('Admin/Posyandu') ?>" class="btn btn-danger py-2 col-sm-12">Batal</a>
                        </div>

                    </form>

                </div>
                <!-- end card body -->
            </div>
        </div>


    </div>

    <script src="<?= base_url('') ?>/frontend/libraries/jquery/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url('') ?>/frontend/libraries/bootstrap/js/bootstrap.js"></script>
    <script src="<?= base_url('') ?>/frontend/libraries/retina/retina.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4',
            icons: {
                rightIcon: '<i class="fa fa-calendar text-primary" aria-hidden="true"></i>'
            }
        });
    </script>
</body>

</html>