<?php
  include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Edit Data</title>
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
    <?php
        include "koneksi.php";
        $id = $_GET['id'];
        $query_mysql = mysqli_query($kon,"SELECT * FROM mahasiswa WHERE id='$id'") or die(mysqli_error(''));
        while($row = mysqli_fetch_assoc($query_mysql)){
        $dataor = explode(',',$row['olahraga_fav']);
    ?>
    
    <div align="center" id="judul">
        <h2>Form Edit Data</h2>
    </div>

    <div id="form-area">
        <div id="form-wrapper" >
            <div id="form">
                <form action="aksi_edit.php" method="POST" >
                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">NIM</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="nim"  value="<?php echo $row['nim'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="nama"  value="<?php echo $row['nama'] ?>">
                    </div>
                    
                    <div>
                        Jenis Kelamin
                        <br>
                        <label><input type="radio" name="jenis_kelamin" value="Laki - laki" <?php if($row['jenis_kelamin']=='Laki - laki') echo 'checked'?>> Laki - laki</label> 
                        <label><input type="radio" name="jenis_kelamin" value="Perempuan" <?php if($row['jenis_kelamin']=='Perempuan') echo 'checked'?>> Perempuan</label>

                    </div>
                        <br>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Agama</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="agama">
                            <option value="Islam" <?php if($row['agama'] == 'Islam') {echo "selected";}?>>Islam</option>
                            <option value="Kristen" <?php if($row['agama'] == 'Kristen') {echo "selected";}?>>Kristen</option>
                            <option value="Budha" <?php if($row['agama'] == 'Budha') {echo "selected";}?>>Budha</option>
                            <option value="Hindu" <?php if($row['agama'] == 'Hindu') {echo "selected";}?>>Hindu</option>
                            <option value="Kong Hu Cu" <?php if($row['agama'] == 'Kong Hu Cu') {echo "selected";}?>>Kong Hu Cu</option>
                        </select>
                    </div>
                    <br>
                    Olahraga Favorit
                    <div class="form-check">
                        <label><input type="checkbox" name="olahraga_fav[]" value="Lari" 
                        <?php if (in_array("Lari", $dataor)) echo "checked";?>> Lari</label><br>

                        <label><input type="checkbox" name="olahraga_fav[]" value="Bersepeda" 
                        <?php if (in_array("Bersepeda", $dataor)) echo "checked";?> > Bersepeda</label><br>

                        <label><input type="checkbox" name="olahraga_fav[]" value="Futsal" 
                        <?php if (in_array("Futsal", $dataor)) echo "checked";?>> Futsal</label><br>

                        <label><input type="checkbox" name="olahraga_fav[]" value="Tenis" 
                        <?php if (in_array("Tenis", $dataor)) echo "checked";?>> Tenis</label><br>

                        <label><input type="checkbox" name="olahraga_fav[]" value="Badminton" 
                        <?php if (in_array("Badminton", $dataor)) echo "checked";?>> Badminton</label><br>
                    </div>
                
                    <br>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Upload Foto</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="foto"  value="
                        <?php if($row['foto']) $row['foto']?>">
                        
                        <br>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        <a href="index.php">Kembali</a>
                        
                    </div>
                </form>
            </div>
                <?php } ?>
        </div>
    </div>
</body>
</html>