<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Users</title>

    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
 
<body>
<!-- Go home button -->
<ul class="topnav">
    <li><a href="home.php">Home</a></li>
    <li><a href="siswa.php">Kembali</a></li>
</ul>

<br/><br/>
 
<form action="add-siswa.php" method="post" name="form1">
    <table class="content-table" width="25%" border="0">
        <tr> 
            <td>NISN</td>
            <td><input type="text" name="nisn"></td>
        </tr>
        <tr> 
            <td>NIS</td>
            <td><input type="text" name="nis"></td>
        </tr>
        <tr> 
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr> 
            <td>ID Kelas</td>
            <td><input type="text" name="id_kelas"></td>
        </tr>
        <tr> 
            <td>Alamat</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr> 
            <td>NO Telp</td>
            <td><input type="text" name="no_telp"></td>
        </tr>
        <tr> 
            <td>ID SPP</td>
            <td><input type="text" name="id_spp"></td>
        </tr>
        <tr> 
            <td></td>
            <td><input type="submit" name="Submit" value="Simpan"> <input type="reset" name="reset" value="hapus"></td>
        </tr>
    </table>
</form>
    
<?php
 
// Check If form submitted, insert form data into users table.
if(isset($_POST['Submit'])) {
    $nisn = $_POST['nisn'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $id_kelas = $_POST['id_kelas'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $id_spp = $_POST['id_spp'];
        
    // include database connection file
    include_once("config.php");
                
    // Insert user data into table
    $result = mysqli_query($mysqli, "INSERT INTO siswa(nisn,nis,nama,id_kelas,alamat,no_telp,id_spp) VALUES('$nisn','$nis','$nama','$id_kelas','$alamat','$no_telp','$id_spp')");
        
    // Show message when user added
    echo "Berhasil di simpan. <a href='siswa.php'>View Users</a>";
}
?>

</body>
</html>