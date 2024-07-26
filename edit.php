<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto mt-5">
          <div class="card">
            <div class="card-header">
              <h5>Form Edit Data</h5>
            </div>
            <div class="card-body">
              <form action="" method="post">
                <div class="mb-3">
                  <label for="hasil_panen" class="form-label">Hasil Panen</label>
                  <input type="number" class="form-control" id="hasil_panen" name="
              hasil_panen" placeholder="Masukkan hasil panen" required>
                </div>
                <div class="mb-3"></div>
              </form>

              <a href='edit.php?id={$row[' id']}' class='btn btn-sm btn-warning'>Edit</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
  </body>

</html>