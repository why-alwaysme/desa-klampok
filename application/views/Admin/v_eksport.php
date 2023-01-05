<html>

<head>
    <title><?= $judul; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
    <div class="container">
        <center>
            <h2>Air Klampok</h2>
            <h4>Laporan Penjualan</h4>
        </center>
        <div class="data-tables datatable-dark">
            <table class="table tabel-air table-bordered" id="laporan">
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
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#laporan').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'pdf'
                ]
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>



</body>

</html>