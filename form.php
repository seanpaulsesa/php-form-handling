<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Form Get & Post</title>
</head>

<body>

  <div class="container">
    <div class="a">
      <h1>Halaman PHP Form Handling</h1>
    </div>

    <div class="b">
      <form action="tampil.php" method="post" class="b">
        <ul>
          <label for="nama">Nama :</label>
          <br>
          <input type="text" id="nama" name="nama" placeholder="masukan nama...">
        </ul>
        <ul>
          <label for="email">Email :</label>
          <br>
          <input type="email" id="email" name="email" placeholder="masukan email...">
        </ul>
        <ul>
          <button type="submit">Submit!</button>
        </ul>
      </form>
    </div>

  </div>

</body>

</html> 