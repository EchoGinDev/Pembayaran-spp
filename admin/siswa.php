<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM siswa ORDER BY nisn DESC");
?>

<!-- HTML -->

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>
<!-- CSS link -->
  <link rel="stylesheet" type="text/css" href="style2.css">
</head>


<body>
<!-- Go home button -->
<ul class="topnav">
  <li><a href="home.php">Home</a></li>
  <li><a href="add-siswa.php">Tambah Siswa</a></li>
</ul>
  
<center><h1>Laporan Data Siswa</h1></center>

<!--Table -->
<table class="content-table" width='80%' border=1>
<thead>
  <tr class="active-row">
    <th>NISN</th>
    <th>NIS</th>
    <th>Nama</th>
    <th>ID Kelas</th>
    <th>Alamat</th>
    <th>NO Telp</th>
    <th>ID SPP</th>
    <th>Update</th>
  </tr>
</thead>

    
<?php  
  while($user_data = mysqli_fetch_array($result)) {         
    echo "<tr>";
    echo "<td>".$user_data['nisn']."</td>";
    echo "<td>".$user_data['nis']."</td>";
    echo "<td>".$user_data['nama']."</td>";
    echo "<td>".$user_data['id_kelas']."</td>";
    echo "<td>".$user_data['alamat']."</td>";
    echo "<td>".$user_data['no_telp']."</td>";
    echo "<td>".$user_data['id_spp']."</td>";    
    echo "<td><a href='edit-siswa.php?id=$user_data[nisn]'>Edit</a> | <a href='delete-siswa.php?id=$user_data[nisn]'>Delete</a></td></tr>";        
}
?>
</table>

</body>
</html>