<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM kelas ORDER BY id_kelas DESC");
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
<!-- Bar navigasi -->
<ul class="topnav">
  <li><a href="home.php">Home</a></li>
  <li><a href="add-kelas.php">Tambah Kelas</a></li>
</ul>

<center><h2>Aplikasi Pembayaran SPP</h2></center>

<!--Table -->
<table class="content-table" width='80%' border=1>
<thead>
  <tr class="active-row">
    <th>Id Kelas</th>
    <th>Kelas</th>
    <th>Program Keahlihan</th>
    <th>Update</th>
  </tr>
</thead>


<!-- PHP -->
<?php  
  while($user_data = mysqli_fetch_array($result)) {         
    echo "<tr>";
    echo "<td>".$user_data['id_kelas']."</td>";
    echo "<td>".$user_data['nama_kelas']."</td>";
    echo "<td>".$user_data['kompetensi_kealihan']."</td>";    
    echo "<td><a href='edit-kelas.php?id=$user_data[id_kelas]'>Edit</a> | <a href='delete-kelas.php?id=$user_data[id_kelas]'>Delete</a></td></tr>";        
  }
?>
</table>

</body>
</html>