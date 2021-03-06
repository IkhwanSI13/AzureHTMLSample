<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ikhwan Sumbission 1</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
    <div class="navbar-wrapper" style="margin-top:36px">
      <div class="container">
          <h1>Data Mahasiswa</h1>
          <a class="btn btn-primary" href="index.php" role="button">Load Data</a>
          <a class="btn btn-primary" href="input.php" role="button">Input Data</a>
          <hr/>
      </div>
    </div>

    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="container" style="margin-bottom:72px">
      <h3 style="margin-bottom:24px">Form Input</h3>
      <form method="post" action="index.php" enctype="multipart/form-data">
        <div class="form-group">
          <label for="email">NIM:</label>
          <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM" name="nim">
        </div>
        <div class="form-group">
          <label for="pwd">Nama:</label>
          <input type="text" class="form-control" id="nama" placeholder="Masukkan nama" name="nama">
        </div>
        <div class="form-group">
          <label for="pwd">Alamat:</label>
          <input type="text" class="form-control" id="alamat" placeholder="Masukkan alamat" name="alamat">
        </div>
        <div class="form-group">
          <label for="pwd">IPK:</label>
          <input type="number" step="0.01" class="form-control" id="ipk" placeholder="Masukkan ipk" name="ipk">
        </div>
        <button type="submit" name="submit" class="btn btn-default">Submit</button>
      </form>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
