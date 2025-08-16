<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM petugas ORDER BY id_petugas DESC");
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
  <li><a href="add-petugas.php">Tambah Petugas</a></li>
</ul>

<center><h1>Laporan Petugas</h1></center>

<!--Table -->
<table class="content-table" width='80%' border=1>
<thead>
  <tr class="active-row">
    <th>ID Petugas</th>
    <th>Username</th>
    <th>Password</th>
    <th>Nama Petugas</th>
    <th>Level</th>
    <th>Update</th>
  </tr>
</thead>

<!-- PHP -->
<?php  
  while($user_data = mysqli_fetch_array($result)) {         
    echo "<tr>";
    echo "<td>".$user_data['id_petugas']."</td>";
    echo "<td>".$user_data['username']."</td>";
    echo "<td>".$user_data['password']."</td>";
    echo "<td>".$user_data['nama_petugas']."</td>";
    echo "<td>".$user_data['level']."</td>";    
    echo "<td><a href='edit-petugas.php?id=$user_data[id_petugas]'>Edit</a> | <a href='delete-petugas.php?id=$user_data[id_petugas]'>Delete</a></td></tr>";        
  }
?>
</table>

</body>
</html>