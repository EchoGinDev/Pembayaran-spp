<?php 
// menghubungkan dengan koneksi database
include 'config.php';
 
// Data siswa

// mengambil data siswa
$data_siswa = mysqli_query($config,"SELECT * FROM siswa");
 
// menghitung data siswa
$jumlah_siswa = mysqli_num_rows($data_siswa);

//pembayaran

// mengambil data pembayaran
$data_pembayaran = mysqli_query($config,"SELECT * FROM pembayaran");
 
// menghitung data pembayaran
$jumlah_pembayaran = mysqli_num_rows($data_pembayaran);

//session_start();
 
//if (!isset($_SESSION['username'])) {
    //header("Location:index.php");
//}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>

<!-- Navbar -->

<!-- Go home button -->
<ul class="topnav">
    <li><a href="home.php">Home</a></li>
    <li><a href="Pembayaran.php">Pembayaran</a></li>
    <li><a href="Laporan.php">Laporan</a></li>
        
    <li style="float:right">
        <a href="logout.php">Log Out</a>
    </li>
</ul>

    <center><h1>Aplikasi Pembayaran SPP</h1></center>

<!-- Main Home -->

<!-- Data Siswa -->
<div class="box-data-siswa">

<div class="siswa">
<img src="img/siswa.png">
</div>
<p>Jumlah Data Siswa : <b><?php echo $jumlah_siswa; ?></b></p>

</div>

<!-- Data pembayaran -->
<div class="box-data-pembayaran">

<div class="pembayaran">
<img src="img/pembayaran.png">
</div>
<p>Jumlah Data Pembayaran : <b><?php echo $jumlah_pembayaran; ?></b></p>
    
</div>

</body>
</html>