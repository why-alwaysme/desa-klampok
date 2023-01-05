<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('') ?>/frontend/libraries/bootstrap/css/bootstrap.css">
    <title>Tambah Artikel</title>
    <link rel="shortcut icon" type="image/icon" href="<?= base_url('') ?>/frontend/assets/logo/favicon.png" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&
    family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&
    display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('') ?>/frontend/style/main.css">
</head>

<body>

    <div class="container-fluid mt-5">

        <div class="col-xl col-lg">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-success">Buat Artikel Desa</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <?= $this->session->flashdata('message'); ?>
                    <form method="post" action="<?= site_url('Admin/Buat_Berita') ?>" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-success font-weight-bold">Judul Artikel</label>
                            <div class="col-sm-10">
                                    <input type="text" value="<?= set_value('judul') ?>" name="judul" class="form-control" placeholder="Artikel Klampok">
                                    <?= form_error('judul', '<small class="form-text text-danger text-left">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-success font-weight-bold">Dusun</label>
                            <div class="col-sm-10">
                            <select id="inputState" name="dusun" class="form-control">
                                <option selected disabled>Pilih Dusun</option>
                                <option value="Dusun Krajan">Krajan</option>
                                <option value="Dusun Kebonjati">Kebonjati</option>
                                <option value="Dusun Sumbul">Sumbul</option>
                             </select>
                             <?= form_error('dusun', '<small class="form-text text-danger text-left">', '</small>'); ?>
                            </div>
                        </div>
                        <input type="hidden" name="tanggal" value="<?= date("d/m/Y"); ?>">
                        <input type="hidden" name="no_gambar" value="<?= rand(9999, 99999); ?>">
                        
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-success font-weight-bold">Upload Foto</label>
                            <div class="col-sm-10">
                                <div class="custom-file">
                                    <input class="form-control" type="file" placeholder="" name="foto" id="foto">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-success font-weight-bold">Isi Artikel</label>
                            <textarea name="isi" id="summernote" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" name="buat" class="btn btn-primary py-2 col-sm-12 mt-4 mb-4" />
                            <a href="<?= site_url('Admin/Berita') ?>" class="btn btn-danger py-2 col-sm-12">Batal</a>
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
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
      $('#summernote').summernote({
        placeholder: 'Isi Artikel',
        tabsize: 2,
        height: 400,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['insert', ['link'] ],
          ['para', ['ul', 'ol', 'paragraph']],
        ]
      });
    </script>
</body>

</html>