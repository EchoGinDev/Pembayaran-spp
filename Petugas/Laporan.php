<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM pembayaran ORDER BY id_pembayaran DESC");
?>


<html lang="en">
  <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Homepage</title>
        <link rel="stylesheet" type="text/css" href="style2.css">
  </head>
<body>

<!-- Go home button -->
<ul class="topnav">
  <li><a href="home.php">Home</a></li>
</ul>
  
 
 <!--Table -->
<table class="content-table" width='80%' border=1>
<thead>
    <tr class="active-row">
    <th>ID Pembayaran</th> <th>ID Petugas</th> <th>NISN</th> <th>Tgl Bayar</th><th>Bulan Bayar</th> <th>Tahun Dibayar</th> <th>ID SPP</th> <th>Jumlah Bayar</th>
    <th>Print</th>
    </tr>
</thead>

<center><h1>Laporan Pembayaran SPP</h1></center>

    
<?php  
while($user_data = mysqli_fetch_array($result)) {         
    echo "<tr>";
    echo "<td>".$user_data['id_pembayaran']."</td>";
    echo "<td>".$user_data['id_petugas']."</td>";
    echo "<td>".$user_data['nisn']."</td>";
    echo "<td>".$user_data['tgl_bayar']."</td>";
    echo "<td>".$user_data['bulan_dibayar']."</td>";
    echo "<td>".$user_data['tahun_dibayar']."</td>";
    echo "<td>".$user_data['id_spp']."</td>";
    echo "<td>".$user_data['jumlah_bayar']."</td>";
    echo "<td><a href='cetak1.php?id=$user_data[id_pembayaran]'>Print</a></td></tr>";        
}
?>

</table>

</body>
</html>