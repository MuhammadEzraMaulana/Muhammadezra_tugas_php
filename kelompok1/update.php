<?php

    include "connect.php";
    $id_kostumer = $_GET['id_kostumer'];
    $tampil = mysqli_query($conn, "select * from kostumer where id_kostumer='$id_kostumer'");
    $hasil = mysqli_fetch_array($tampil);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Data</title>
</head>

<body>
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        EDIT Data
                    </div>
                    <div class="card-body">
                        <form action="ubah.php" method="POST">
                            <div class="form-group">
                                <label>ID KOSTUMER</label>
                                <input type="text" name="id_kostumer" value="<?php echo $hasil['id_kostumer']; ?>" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>NAMA KOSTUMER</label>
                                <input type="text" name="nama_kostumer" value="<?php echo $hasil['nama_kostumer']; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Alamat KOSTUMER</label>
                                <textarea class="form-control" name="alamat_kostumer" rows="4"><?php echo $hasil['alamat_kostumer']; ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-success">UPDATE</button>
                            <a href="index.php" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>