<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM spp ORDER BY id_spp DESC");
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
  <li><a href="add-spp.php">Tambah SPP</a></li>
</ul>

<center><h1>Laporan Data Sumbangan Pembinaan Pendidikan (SPP)</h1></center>

<!--table -->
<table class="content-table" width='80%' border=1>
<thead>
  <tr class="active-row">
    <th>Id SPP</th>
    <th>Tahun</th>
    <th>Nominal</th>
    <th>Update</th>
  </tr>
</thead>

<!-- PHP -->
<?php  
  while($user_data = mysqli_fetch_array($result)) {         
    echo "<tr>";
    echo "<td>".$user_data['id_spp']."</td>";
    echo "<td>".$user_data['tahun']."</td>";
    echo "<td>".$user_data['nominal']."</td>";    
    echo "<td><a href='edit-spp.php?id=$user_data[id_spp]'>Edit</a> | <a href='delete-spp.php?id=$user_data[id_spp]'>Delete</a></td></tr>";        
  }
?>
</table>

</body>
</html>