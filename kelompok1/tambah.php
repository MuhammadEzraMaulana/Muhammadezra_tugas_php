<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
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
              <form action="proses.php" method="POST">
                
                <div class="form-group">
                  <label> ID KOSTUMER</label>
                  <input type="text" name=" id_kostumer" class="form-control">
                </div>

                <div class="form-group">
                  <label>NAMA KOSTUMER</label>
                  <input type="text" name="nama_kostumer"class="form-control">
                </div>

                <div class="form-group">
                  <label>Alamat KOSTUMER</label>
                  <textarea class="form-control" name="alamat_kostumer"rows="4"></textarea>
                </div>
                
                <button type="submit" class="btn btn-success">SIMPAN</button>
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