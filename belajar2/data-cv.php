<?php require 'header.php';
require 'sidebar.php'; ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data CV
        </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Data</a></li>
        <li class="active">Data tables</li>
    </ol>
    </section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
        
        <div class="box">
            
            <div class="box-header">
            <h3 class="box-title">Data Table With Full Features</h3>

            <?php    
            if(isset($_GET['pesan'])){
                $pesan = $_GET['pesan'];
                if($pesan == "input"){
                echo "Data berhasil di input.";
            }else if($pesan == "update"){
                echo "Data berhasil di update.";
            }else if($pesan == "hapus"){
                echo "Data berhasil di hapus.";
            }
        }
        ?>
        <!-- /.box-header -->
        <div class="box-body">
         <a class="btn btn-primary" href="tambah.php" role="button">Tambah Barang</a>
         <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th width="5%">No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Asal Kampus</th>
                    <th>Prodi</th>
                    <th>Tahun Angkatan</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Alamat</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
             <?php $data_mahasiswa=mysqli_query($koneksi, "select * from mahasiswa");
             $no=1;
             while($data=mysqli_fetch_assoc($data_mahasiswa)) { ?>
                <tr>
                    <td><?=$no++  ?></td>
                    <td><?=$data['nama']?></td>
                    <td><?=$data['nim']?></td>
                    <td><?=$data['asal_kampus']?></td>
                    <td><?=$data['prodi']?></td>
                    <td><?=$data['tahun_angkatan']?></td>
                    <td><?=$data['email']?></td>
                    <td><?=$data['no_telp']?></td>
                    <td><?=$data['alamat']?></td>
                    <td><?=$data['tempat_lahir']?></td>
                    <td><?=$data['tanggal_lahir']?></td>
                    <td><?=$data['status']?></td>
                    <td>
                        <a class="edit" href="edit.php?id=<?php echo $data['id_mahasiswa']; ?>">Edit</a> |
                        <a class="hapus" href="proses.php?id=<?php echo $data['id_mahasiswa']; ?>">Hapus</a>                 
                    </td>
                </tr>
            <?php } ?>  

        </tbody>

    </table>
</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->


<?php require 'footer.php'; ?>
