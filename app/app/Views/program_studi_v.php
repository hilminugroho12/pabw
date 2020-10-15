<section>
      
    <div class="container">
        <h3>Program Studi</h3>    
        <br>
        <?php if (!empty($session)) { ?>
            <div class="alert alert-<?php echo $session['status'] ? 'success' : 'danger'; ?> alert-dismissible fade show" role="alert">
                <?php echo $session['message'];?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php 
        }
        ?>
        
        <p>
            <a href="<?php echo site_url('Program_Studi/add'); ?>" class="btn btn-primary fa fa-plus">
                
            </a> 
        </p>
        <table class="table">
            <thead class="thead">
                <tr>
                    <th>Aksi</th>
                    <th>Kode Prodi</th>
                    <th>Program studi</th>
                    <th>Ketua</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dataProdi as $row):?>
                <tr>
                    <th>
                        <a href="<?php echo site_url('Program_Studi/edit/'.$row->kode_prodi); ?>" class="btn btn-warning fa fa-pencil">Ubah</a>
                        <a href="<?php echo site_url('Program_Studi/delete/'.$row->kode_prodi); ?>" class="btn btn-danger fa fa-trash" onclick=" return confirm('Apakah Anda yakin akan menghapus data ini?'); ">Hapus</a>
                    </th>                    
                    <td><?php echo $row->kode_prodi; ?></td>
                    <td><?php echo $row->nama_prodi; ?></td>
                    <td><?php echo $row->ketua_prodi; ?></td>
                </tr>

                <?php 
                    endforeach; 
                
                if (empty($dataProdi)){
                    ?>
                    <tr>
                        <td colspan="4" class="text-center">Tidak Ada Data</td>
                    </tr>
                <?php
                }
                ?>


            </tbody>
        </table>
    </div>
</section>