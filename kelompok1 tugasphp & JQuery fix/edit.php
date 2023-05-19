<?php
include('connect.php');
$id_kostumer = $_GET['id_kostumer'];
$data_mobil = mysqli_query($conn, "SELECT * FROM kostumer where id_kostumer= '$id_kostumer'");
while ($kostumer = mysqli_fetch_array($data_mobil)) {
    $id_kostumer = $kostumer['id_kostumer'];
    $nama_kostumer = $kostumer['nama_kostumer'];
    $alamat_kostumer = $kostumer['alamat_kostumer'];
}
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
                        <form action="proses_edit.php" method="POST">
                            <div class="form-group">
                                <label>ID KOSTUMER</label>
                                <input type="text" name="id_kostumer" value="<?php echo $id_kostumer; ?>" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>NAMA KOSTUMER</label>
                                <input type="text" name="nama_kostumer" value="<?php echo $nama_kostumer; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Alamat KOSTUMER</label>
                                <textarea class="form-control" name="alamat_kostumer" rows="4"><?php echo $alamat_kostumer; ?></textarea>
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