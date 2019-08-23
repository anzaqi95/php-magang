<?php require 'header.php';
require 'sidebar.php'; ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Mahasiswa
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">

        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tambah Mahasiswa Baru</h3>
          </div>
          <form method="POST"action="proses.php">
            <div class="form-group">
                <label >Nama </label>
                <input type="text" name="nama" > <br>
            </div>
            <div class="form-group">
                <label >NIM </label>  
                <input type="text" name="nim" > <br>
            </div>
            <div class="form-group">
                <label >Asal Kampus </label>  
                <input type="text" name="asal_kampus" > <br>
            </div>
            <div class="form-group">
                <label >Prodi </label>  
                <input type="text" name="prodi" > <br>
            </div>
            <div class="form-group">
                <label >Tahun Angkatan </label>  
                <input type="text" name="tahun_angkatan" > <br>
            </div>
            <div class="form-group">
                <label >Email </label>  
                <input type="text" name="email" > <br>
            </div>
            <div class="form-group">
                <label >No Telepon </label>  
                <input type="text" name="no_telp" > <br>
            </div>
            <div class="form-group">
                <label >Alamat </label>  
                <input type="text" name="alamat" > <br>
            </div>
            <div class="form-group">
                <label >Tempat Lahir </label>  
                <input type="text" name="tempat_lahir" > <br>
            </div>
            <div class="form-group">
                <label >NIM </label>  
                <input type="text" name="nim" > <br>
            </div>
            <input type="submit" name="tambah" value="Tambah" ><br>
        </form>
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
<?php require 'footer.php'; ?>