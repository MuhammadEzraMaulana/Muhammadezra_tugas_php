<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>Tambah Data</title>
</head>

<body>

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        TAMBAH Data
                    </div>
                    <div class="card-body">
                        <form id="form-kostumer" action="proses_tambah.php" method="POST">

                            <div class="form-group">
                                <label> ID KOSTUMER</label>
                                <input type="text" name=" id_kostumer" id="input-id" class="form-control">
                                <p id="text-error-name1"></p>
                            </div>

                            <div class="form-group">
                                <label>NAMA KOSTUMER</label>
                                <input type="text" name="nama_kostumer" id="input-nama" class="form-control">
                                <p id="text-error-name2"></p>
                            </div>

                            <div class="form-group">
                                <label>Alamat KOSTUMER</label>
                                <textarea class="form-control" name="alamat_kostumer" id="input-alamat" rows="4"></textarea>
                                <p id="text-error-name3"></p>
                            </div>

                            <button type="button" class="btn btn-success" id="my-button">SIMPAN</button>
                            <button type="reset" class="btn btn-warning">RESET</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>
<script type="text/javascript">
    $('#my-button').click(function() {
        if ($('#input-id').val().length == 0 || $('#input-nama').val().length == 0 || $('#input-alamat').val().length == 0) {
            $('#input-id, #input-nama, #input-alamat').css({
                "backgroundColor": "#ff00002b"
            });

            $('#text-error-name1, #text-error-name2, #text-error-name3').text('Silahkan isi terlebih dahulu');
        } else {
            $('#form-kostumer').submit();
        }
    });
</script>