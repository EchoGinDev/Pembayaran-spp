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
    <li><a href="pembayaran.php">Kembali</a></li>
</ul>
 
<br/><br/>

<form action="add-pembayaran.php" method="post" name="form1">
    <table class="content-table" width="25%" border="0">
    <th>
        <tr> 
            <td>ID Pembayaran</td>
            <td><input type="text" name="id_pembayaran"></td>
        </tr>
        <tr> 
            <td>ID Petugas</td>
            <td><input type="text" name="id_petugas"></td>
        </tr>
        <tr> 
            <td>NISN</td>
            <td><input type="text" name="nisn"></td>
        </tr>
        <tr> 
            <td>Tgl Bayar</td>
            <td><input type="number" name="tgl_bayar"></td>
        </tr>
        <tr> 
            <td>Bulan Dibayar</td>
            <td><input type="text" name="bulan_dibayar"></td>
        </tr>
        <tr> 
            <td>Tahun Dibayar</td>
            <td><input type="text" name="tahun_dibayar"></td>
        </tr>
        <tr> 
            <td>ID SPP</td>
            <td><input type="text" name="id_spp"></td>
        </tr>
        <tr> 
            <td>Jumlah Bayar</td>
            <td><input type="number" name="jumlah_bayar"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="Submit" value="Simpan"> <input type="reset" value="Hapus"></td>
        </tr>
    </table>
</form>
    
<?php
 
// Check If form submitted, insert form data into users table.
if(isset($_POST['Submit'])) {
    $id_pembayaran = $_POST['id_pembayaran'];
    $id_petugas = $_POST['id_petugas'];
    $nisn = $_POST['nisn'];
    $tgl_bayar = $_POST['tgl_bayar'];
    $bulan_dibayar = $_POST['bulan_dibayar'];
    $tahun_dibayar = $_POST['tahun_dibayar'];
    $id_spp = $_POST['id_spp'];
    $jumlah_bayar = $_POST['jumlah_bayar'];
        
// include database connection file
    include_once("config.php");
                
    // Insert user data into table
    $result = mysqli_query($mysqli, "INSERT INTO pembayaran(id_pembayaran,id_petugas,nisn,tgl_bayar,bulan_dibayar,tahun_dibayar,id_spp,jumlah_bayar) VALUES('$id_pembayaran','$id_petugas','$nisn','$tgl_bayar','$bulan_dibayar','$tahun_dibayar','$id_spp','$jumlah_bayar')");
        
    // Show message when user added
    echo "User added successfully. <a href='pembayaran.php'>View Users</a>";
}
?>

</body>
</html>