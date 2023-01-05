<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="<?= base_url('') ?>/frontend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="shortcut icon" type="image/icon" href="<?= base_url('') ?>/frontend/assets/logo/favicon.png" />
    <link href="<?= base_url('') ?>/frontend/css/sb-admin-2.min.css" rel="stylesheet">

    <title><?= $title; ?></title>


    <link rel="stylesheet" href="<?= base_url('') ?>/frontend/css/style.css">
</head>

<body class="bg-login">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-5">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <i class="fab fa-envira" style="font-size: 48px; color: #007b5e"></i>
                                        <br><br>
                                        <h3 class="mb-4 judul">Desa Klampok</h3>
                                        <?= $this->session->flashdata('message'); ?>
                                        <hr>
                                    </div>
                                    <form method="post" role=form class="user" action="<?= base_url('Admin') ?>">
                                        <div class="form-group mt-4">
                                            <input type="text" class="form-control form-control-user" name="user" placeholder="Username" value="<?= set_value('user'); ?>">
                                            <?= form_error('user', '<small class="form-text text-danger text-left">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="pass" placeholder="Password">
                                            <?= form_error('pass', '<small class="form-text text-danger text-left">', '</small>'); ?>
                                        </div>
                                        <button class="btn btn-login btn-user btn-block" name="login" value="Login" type="submit">
                                            Login
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('') ?>/frontend/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('') ?>/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('') ?>/frontend/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('') ?>/frontend/js/sb-admin-2.min.js"></script>

</body>

</html>