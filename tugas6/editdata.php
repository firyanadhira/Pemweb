<?php  
  include 'koneksi.php'
?>

<!DOCTYPE html>
<html>
<head>
	<title> Edit Data </title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
		if (isset($_POST['edit'])) {
  	 $kode = $_POST['npm'];
     $nama = $_POST['nama'];
     $jurusan = $_POST['jurusan'];
     $semester = $_POST['semester'];
     $alamat = $_POST['alamat'];
     $qEditMahasiswa = "UPDATE mahasiswa SET nama='$nama',jurusan='$jurusan',semester='$semester',alamat='$alamat' WHERE npm='$kode'";
     $editMahasiswa = mysqli_query($openServer, $qEditMahasiswa);
     header("location:datamahasiswa.php");
  }

		if (isset($_GET['edit'])) {
  			$kode=$_GET['edit'];
  			$qUpdate="SELECT * FROM mahasiswa WHERE npm = '$kode'";
  			$update=mysqli_query ($openServer, $qUpdate);

  			while ($row=mysqli_fetch_assoc($update)) {
  	?>
    <div class="col-md-6" style="padding-top: 50px; margin-left: 400px;">
        <div class="kotak-transparan">
          <h1 class="form-mhs" style="text-align: center; color: #ffffff; padding-top: 70px;"> EDIT DATA </h1>
          <br>
          <div class="form-input">
            <table class="table table-bordered">
                <form method="post" action="editdata.php">
                  <label> Masukkan NPM </label>
                  <input readonly type="text" name="npm" value="<?php echo $row['npm']; ?>" class="form-control">
                  <label> Masukkan Nama </label>
                  <input type="text" name="nama" value=" <?php echo $row['nama']; ?>" class="form-control">
                  <label> Masukkan Jurusan </label>
                  <input type="text" name="jurusan" value=" <?php echo $row['jurusan']; ?>" class="form-control">
                  <label> Masukkan Semester </label>
                  <input type="text" name="semester" value=" <?php echo $row['semester']; ?>" class="form-control">
                  <label> Masukkan Alamat </label>
                  <input type="text" name="alamat" value=" <?php echo $row['alamat']; ?>" class="form-control">
                  <br>
                  <input type="submit" name="edit" value="edit" class="btn btn-success">
                </form>
            </table>
          </div>
        </div>
      </div>
	
  <?php 
  		}
  	}
	?>
</body>
</html>