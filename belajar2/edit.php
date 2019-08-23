<?php require 'koneksi.php'; require 'header.php';
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
        
        </div>
		<?php 
		
		$id_mahasiswa = $_GET['id'];
		$data = mysqli_fetch_assoc(mysqli_query($koneksi,"SELECT * FROM mahasiswa WHERE id_mahasiswa='$id_mahasiswa'"));
		?>
		
		<form action="proses.php" method="POST">		
			<table>
				<tr>
					<td>Nama</td>
					<td>
						<input type="hidden" name="id_mahasiswa" value="<?php echo $data['id_mahasiswa'] ?>">
						<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
					</td>					
				</tr>	
				<tr>
					<td>NIM</td>
					<td><input type="text" name="nim" value="<?php echo $data['nim'] ?>"></td>					
				</tr>
				<tr>
					<td>Asal Kampus</td>
					<td><input type="text" name="asal_kampus" value="<?php echo $data['asal_kampus'] ?>"></td>
				</tr>	
				<tr>
					<td>Prodi</td>
					<td><input type="text" name="prodi" value="<?php echo $data['prodi'] ?>"></td>
				</tr>	
				<tr>
					<td>Tahun Angkatan</td>
					<td><input type="text" name="tahun_angkatan" value="<?php echo $data['tahun_angkatan'] ?>"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" value="<?php echo $data['email'] ?>"></td>
				</tr>
				<tr>
					<td>No Telepon</td>
					<td><input type="text" name="no_telp" value="<?php echo $data['no_telp'] ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>
				</tr>	
				<tr>
					<td>Tempat Lahir</td>
					<td><input type="text" name="tempat_lahir" value="<?php echo $data['tempat_lahir'] ?>"></td>
				</tr>	
				<tr>
					<td>Tanggal Lahir</td>
					<td><input type="text" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir'] ?>"></td>
				</tr>	
				<tr>
					<td>Status</td>
					<td><input type="text" name="status" value="<?php echo $data['status'] ?>"></td>
				</tr>				
				<tr>
					<td></td>
					<td><input type="submit" name="edit" value="Simpan"></td>					
				</tr>				
			</table>
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