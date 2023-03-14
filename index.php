<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Form Get & Post</title>
</head>


<body>
  <section id="content">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="row mt-3">
            <div class="col">
              <div class="shadow p-3 mb-5 bg-body rounded">
                <h2 class="text-center">Halaman PHP Form Handling</h2>
                <div class="card-body">
                  <div class="row justify-content-center">
                    <div class="col-md-5">
                      <form action="tampil.php" method="POST">
                        <div class="mb-3">
                          <label for="nama" class="form-label">Nama</label>
                          <input type="text" class="form-control" id="nama" aria-describedby="nama" name="nama" placeholder="masukan nama..">
                        </div>
                        <div class="mb-3">
                          <label for="email" class="form-label">Email</label>
                          <input type="email" class="form-control" id="email" aria-describedby="email" name="email" placeholder="masukan email..">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </section>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>