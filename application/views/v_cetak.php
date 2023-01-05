<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../frontend/libraries/bootstrap/css/bootstrap.css">
    <title>Posyandu - Desa Klampok</title>
</head>

<body>
    <div class="container" style="text-align: center;  clear:both; padding-top: 50px;">
        <h2>PEMERINTAH DESA KLAMPOK</h2>
    </div>
    <br><br><br>

    <table width=100%>
        <tr>
            <td style="text-align:center; font-weight:bold;" width=50%;>Desa Klampok</td>
            <td style="text-align:center; font-weight:bold;">Kec. Singosari, Kab. Malang</td>
        </tr>
    </table>
    <br>
    <hr class="ml-2 mr-2">
    <br><br>
    <div class="container" style="text-align: center;">
        <h4>Formulir Bukti Pendaftaran Posyandu</h4><br>
    </div>
    <br><br>
    <div class="container">
        <div class="row">
            <div>
                <p class="pl-5">Bersama dengan data ini:</p>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container row">
        <div class="col-sm-2">

        </div>
        <div class="col-sm-4">
            <table style="font-weight:bold;">
                <ol>
                    <?php
                    foreach ($query as $data) : ?>
                        <tr>
                            <td>Nama Pendaftar</td>
                            <td>:</td>
                            <td><?php echo $data->nama; ?></td>
                        </tr>
                        <tr>
                            <td>Nomor HP</td>
                            <td>:</td>
                            <td><?php echo $data->nomor_hp; ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><?php echo $data->alamat; ?></td>
                        </tr>
                        <tr>
                            <td>Asal Dusun</td>
                            <td>:</td>
                            <td><?php echo $data->dusun; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </ol>
            </table>
        </div>
        <div class="col-sm-4">

        </div>
        <div class="col-sm-4">

        </div>
    </div>

    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div>
                <p class="pl-5">Saya bertanggung jawab data tersebut adalah benar sebagai bukti telah mendaftarkan diri untuk mengikuti program Posyandu di Desa klampok.</p>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>

    <table width=100%>
        <tr>
            <td style="text-align:center; font-weight:bold;" width=50%;>Kepala Desa</td>
            <td style="text-align:center; font-weight:bold;">Ketua Panitia</td>
        </tr>
    </table>
    <br><br><br><br><br><br><br><br>
    <table width=100%>
        <tr>
            <td style="text-align:center; font-weight:bold;" width=50%;>(Nama Kepala Desa)</td>
            <td style="text-align:center; font-weight:bold;">(Nama Panitia)</td>
        </tr>
    </table>

    <script>
        window.print();
    </script>
</body>

</html>