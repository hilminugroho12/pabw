<?php
    include "koneksi.php";

    $result = mysqli_query($kon,'SELECT * FROM mahasiswa');
    

?>
<!doctype html>
<html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <link rel="stylesheet" href="./css/style.css">
      <title>Daftar</title>
    </head>
    <body>
      <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="../index.php">Home</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="../prakt1">Pertemuan 1</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Pertemuan 2<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../prakt3">Pertemuan 3</a>
              </li>           
              <li class="nav-item">
                <a class="nav-link" href="../prakt4">Pertemuan 4</a>
              </li>     
            </ul>
          </div>
        </nav>
      </div>

      <div>
        <h2 align="center" style="padding-top:20px;">Daftar Data Dalam Database</h2>
        
      </div>

      <div class="container">      
        <a href="insert.php" id="btn-tambah">Tambah Data</a>                
        <br>
        <br>
        <table class="table table-hover">
            <thead class = "thead-dark" >
                <tr>                    
                    <th scope="col">NIM</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">JENIS KELAMIN</th>
                    <th scope="col">AGAMA</th>
                    <th scope="col">OLAHRAGA FAVORIT</th>
                    <th scope="col">FOTO PROFIL</th>
                    <th scope="col">OPSI</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while ($row=mysqli_fetch_array($result))  // VARIABEL UNTUK CRUD GUNAKAN $row BUKAN $data
                    {
                    echo "<tr>";                                    
                    echo "<td>".$row['nim']."</td>";
                    echo "<td>".$row['nama']."</td>";
                    echo "<td>".$row['jenis_kelamin']."</td>";
                    echo "<td>".$row['agama']."</td>";
                    echo "<td>".$row['olahraga_fav']."</td>";
                    echo "<td><img src='./images/".$row['foto']."' width='100' height='100'></td>";
                    echo "<td>"?><a href="edit.php?id=<?php echo $row['id']; ?>" ><button type="button" name="sub" class="btn btn-warning">Edit</button></a> 
                                <a href="delete.php?id=<?php echo $row['id']; ?>"><button type="button" name="sub" class="btn btn-danger">Hapus</button></a>
                    <?php
                    }
            
                ?>
            </tbody>
        </table>
      </div>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>