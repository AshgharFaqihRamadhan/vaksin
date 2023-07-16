<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Vaksin</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body style="background-image: url(C:\Users\Ashghar\OneDrive\Documents\ppkn\backgrnd.jpg)">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <div class="container-fluid">
                     </div>
        </nav>
        <div class="row mt-3">
            <div class="col-sm">
                <h3>Data vaksin</h3>
            </div>
        </div>
        
        </div>
        <div class="row mt-3">
            <div class="col">
                <table class="table table-striped table-hover table-sm">
                    <tr>
                        <th>No</th>
                        <th>Nik</th>
                        <th>Nama </th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                    </tr>
                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $hasil = $koneksi->query("SELECT * FROM pasien");
                    ?>
                    <?php
                    while ($row = $hasil->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row['nik']; ?></td>
                            <td><?= $row['nama']; ?></td>
                            <td><?= $row['jk']; ?></td>
                            <td><?= $row['alamat']; ?></td>
                    </tr>
                        </div>
                    <?php } ?>
                </table>
                <div> 
                    <a href="logout.php" class="btn btn-large btn-danger">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>