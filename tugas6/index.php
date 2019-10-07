<?php  
  include 'koneksi.php'
?>
<!DOCTYPE html>
<html>
<head>
	<title> Form Mahasiswa </title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">
	<style>
		body{
			background-image: url(image/background.jpg);
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
				
			</div>
			<div class="col-md-6" style="padding-top: 50px;">
				<div class="kotak-transparan">
					<h1 class="form-mhs" style="text-align: center; color: #ffffff; padding-top: 20px;"> FORM MAHASISWA </h1>
					<br>
					<div class="form-input">
						<table class="table table-bordered">
							<form action="index.php" method="post">
								<div class="form-group">
									<label style="color: #ffffff;"> NPM </label>
									<input type="text" name="npm" class="form-control" placeholder="Enter your NPM">
								</div>
								<div class="form-group">
									<label style="color: #ffffff;"> Nama </label>
									<input type="text" name="nama" class="form-control" placeholder="Enter your name">
								</div>
								<div class="form-group">
									<label style="color: #ffffff;"> Jurusan </label>
									<input type="text" name="jurusan" class="form-control" placeholder="Enter your department">
								</div>
								<div class="form-group">
								    <label style="color: #ffffff;"> Semester </label>
								    <input type="text" name="semester" class="form-control" placeholder="Enter your semester">
								</div>
								<div class="form-group">
									<label style="color: #ffffff;"> Alamat </label>
									<input type="text" name="alamat" class="form-control" placeholder="Enter your address">
								</div>
								<button type="submit" name="simpan" class="btn btn-primary">Submit</button>
							</form>
							<?php
  	
							    if (isset($_POST['simpan'])) {
							      $npm = $_POST['npm'];
							      $nama = $_POST['nama'];
							      $jurusan = $_POST['jurusan'];
							      $semester = $_POST['semester'];
							      $alamat = $_POST['alamat'];
							      $qTambahData = "INSERT INTO mahasiswa VALUES('$npm' , '$nama' , '$jurusan' , '$semester' , '$alamat')";
							      $tambahData = mysqli_query($openServer, $qTambahData);

							    }
							?>
						</table>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<a href="datamahasiswa.php" class="btn btn-dark" style="margin-top: 60px; margin-left: 60px;">Lihat Data Mahasiswa</a>
			</div>
		</div>
	</div>
</body>
</html>