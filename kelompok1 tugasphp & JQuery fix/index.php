<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container card mt-5">
        <div class="card-body ">
            <a href="tambah.php" Class="btn btn-primary mt-3 mb-3">Tambah Data</a>
            <table class="table" id="example">
                <thead>
                    <tr class="text-center">
                        <th style="text-align: center;"> ID KOSTUMER</th>
                        <th style="text-align: center;">NAMA KOSTUMER</th>
                        <th style="text-align: center;">ALAMAT KOSTUMER</th>
                        <th style="text-align: center;">AKSI</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    include('connect.php');
                    $data_mobil = mysqli_query($conn, "SELECT * FROM kostumer");
                    while ($kostumer = mysqli_fetch_array($data_mobil)) {
                    ?>
                        <tr>
                            <td style="text-align: center;"><?php echo $kostumer['id_kostumer'] ?></td>
                            <td style="text-align: center;"><?php echo $kostumer['nama_kostumer'] ?></td>
                            <td style="text-align: center;"><?php echo $kostumer['alamat_kostumer'] ?></td>
                            <td style="text-align: center;">
                                <a href="edit.php?id_kostumer=<?php echo $kostumer['id_kostumer']; ?>" class="btn btn-primary">Edit</a>
                                <a href="proses_delete.php?id_kostumer=<?php echo $kostumer['id_kostumer']; ?>" class="btn btn-danger" onclick="confirm('Apakah Anda Yakin Mau Dihapus ?')">Delete</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>

</html>