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
      <h3 style="margin-bottom:24px">Data Input</h3>
       <?php
          $host = "dicodingsqldbikhwan.database.windows.net";
          $user = "dicoding";
          $pass = "1234qwerASDF";
          $db = "db_submission1";
          try {
              $conn = new PDO("sqlsrv:server = $host; Database = $db", $user, $pass);
              $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
          } catch(Exception $e) {
              echo "Gagal: " . $e;
          }
          if (isset($_POST['submit'])) {
              try {
                  $nim = $_POST['nim'];
                  $nama = $_POST['nama'];
                  $alamat = $_POST['alamat'];
                  $ipk = $_POST['ipk'];
                  // Insert data
                  $sql_insert = "INSERT INTO input_mahasiswa (nim, nama, alamat, ipk) 
                              VALUES (?,?,?,?)";
                  $stmt = $conn->prepare($sql_insert);
                  $stmt->bindValue(1, $nim);
                  $stmt->bindValue(2, $nama);
                  $stmt->bindValue(3, $alamat);
                  $stmt->bindValue(4, $ipk);
                  $stmt->execute();
              } catch(Exception $e) {
                  echo "Gagal: " . $e;
              }
              echo "<h3>Data ditambahkan!</h3>";
          } 

          try {
                $sql_select = "SELECT * FROM input_mahasiswa";
                $stmt = $conn->query($sql_select);
                $queryAll = $stmt->fetchAll(); 
                if(count($queryAll) > 0) {
                    echo "<h2>People who are registered:</h2>";
                    echo "<table class='table'>";
                    echo "<thead><tr><th>NIM</th>";
                    echo "<th>Nama</th>";
                    echo "<th>Alamat</th>";
                    echo "<th>IPK</th></tr></thead><tbody>";
                    foreach($queryAll as $singleData) {
                        echo "<tr><td>".$singleData['nim']."</td>";
                        echo "<td>".$singleData['nama']."</td>";
                        echo "<td>".$singleData['alamat']."</td>";
                        echo "<td>".$singleData['ipk']."</td></tr>";
                    }
                    echo "</tbody></table>";
                } else {
                    echo "<h3>No one is currently registered.</h3>";
                }
            } catch(Exception $e) {
                echo "Gagal: " . $e;
            }
       ?> 
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
