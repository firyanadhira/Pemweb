<?php  
  include 'koneksi.php'
?>

<!DOCTYPE html>
<html>
<head>
  <title> Data Mahasiswa </title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">
</head>
<body>
  <?php 
    if (isset($_GET['delete'])) {
      $kode=$_GET['delete'];
      $qDelete="DELETE FROM mahasiswa WHERE npm = '$kode'";
      $delete=mysqli_query ($openServer, $qDelete);
    }
   ?>
   <h1 style="text-align: center; font-family: 'Patua One', cursive; padding-top: 50px;">DATA MAHASISWA</h1>
   <a href="index.php" class="btn btn-outline-primary" style="margin-left: 180px;">Tambah Data</a>
   <br>.<br>
  <table class="table" style="width: 1200px; text-align: center; margin-left: 170px;">
    <thead class="thead-dark">
      <tr>
        <th>NPM</th>
        <th>NAMA</th>
        <th>JURUSAN</th>
        <th>SEMESTER</th>
        <th>ALAMAT</th>
        <th>ACTION</th>
      </tr>
    </thead>
    
    <?php  
      $mahasiswa="SELECT * FROM mahasiswa";
      $openMahasiswa = mysqli_query($openServer, $mahasiswa);

      while ($row = mysqli_fetch_assoc($openMahasiswa)) {
    ?>
    <tr>
      <td>
        <?php echo $row ['npm']; ?>
      </td>
      <td>
        <?php echo $row ['nama']; ?>
      </td>
      <td>
        <?php echo $row ['jurusan']; ?>
      </td>
      <td>
        <?php echo $row ['semester']; ?>
      </td>
      <td>
        <?php echo $row ['alamat']; ?>
      </td>
      <td>
        <a href="editkaryawan.php?edit=<?php echo $row['npm'] ?>" class=" btn btn-warning "> update </a>
        <a href="?delete=<?php echo $row['npm'] ?> " class="btn btn-danger"> delete </a>
      </td>
    </tr>
    <?php
      }
    ?>
  </table>
</body>
</html>