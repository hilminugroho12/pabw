<?php
    include"koneksi.php";
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
        <title>Tambah Data</title>
    </head>
    <body>
        <div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #e3f2fd;">
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

        <div id="judul">
            <h3><b>Form Tambah Data</b></h3>
        </div>
        
        <div id="form-area ">
            <div id="form-wrapper">
                <div id="form">
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">NIM</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="nim" placeholder="J3C118154">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" placeholder="Hilmi">
                        </div>
                        
                        Jenis Kelamin
                        <br>
                        <label><input type="radio" name="jenis_kelamin" value="Laki - laki"> Laki - laki</label> 
                        <label><input type="radio" name="jenis_kelamin" value="Perempuan" > Perempuan</label>

                        <br>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Agama</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="agama">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Kong Hu Cu">Kong Hu Cu</option>
                            </select>
                        </div>
                        <br>
                        Olahraga Favorit
                        <div class="form-check">
                            <label><input type="checkbox" name="olahraga_fav[]" value="Lari"> Lari</label><br>
                            <label><input type="checkbox" name="olahraga_fav[]" value="Bersepeda"> Bersepeda</label><br>
                            <label><input type="checkbox" name="olahraga_fav[]" value="Futsal"> Futsal</label><br>
                            <label><input type="checkbox" name="olahraga_fav[]" value="Tenis"> Tenis</label><br>
                            <label><input type="checkbox" name="olahraga_fav[]" value="Badminton"> Badminton</label><br>
                        </div>
                    
                        <br>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Upload Foto</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="foto">
                        </div>


                        <br>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        <a href="index.php" ><button type="button" class="btn btn-light">Kembali</button></a>
                        <?php
                            if (isset($_GET['submit'])){
                                include "koneksi.php";
                                $nim = $_GET['nim'];
                                $nama = $_GET['nama'];
                                $jenis_kelamin = $_GET['jenis_kelamin'];
                                $agama = $_GET['agama'];
                                $olahraga_fav = implode(",",$_GET['olahraga_fav']);
                                $foto = $_GET['foto'];        
                                mysqli_query($kon," INSERT INTO `mahasiswa` (`nim`, `nama`, `jenis_kelamin`, `agama`, `olahraga_fav`, `foto`) 
                                VALUES ('$nim','$nama','$jenis_kelamin','$agama','$olahraga_fav','$foto')");

                                header("location:index.php");    
                                };
                                
                        ?>            
                    </form>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>