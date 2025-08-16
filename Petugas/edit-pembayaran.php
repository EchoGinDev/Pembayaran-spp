<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id_pembayaran'];
    
    $id_pembayaran=$_POST['id_pembayaran'];
    $id_petugas=$_POST['id_petugas'];
    $nisn=$_POST['nisn'];
    $tgl_bayar=$_POST['tgl_bayar'];
    $bulan_dibayar=$_POST['bulan_dibayar'];
    $tahun_dibayar=$_POST['tahun_dibayar'];
    $id_spp=$_POST['id_spp'];
    $jumlah_bayar=$_POST['jumlah_bayar'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE pembayaran SET id_pembayaran='$id_pembayaran',id_petugas='$id_petugas',nisn='$nisn',tgl_bayar='$tgl_dibayar',bulan_dibayar='$bulan_dibayar',tahun_dibayar='$tahun_dibayar',id_spp='$id_spp',jumlah_bayar='$jumlah_bayar' WHERE id_pembayaran=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: pembayaran.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM pembayaran WHERE id_pembayaran=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $id_pembayaran = $user_data['id_pembayaran'];
    $id_petugas = $user_data['id_petugas'];
    $nisn = $user_data['nisn'];
    $tgl_bayar = $user_data['tgl_bayar'];
    $bulan_dibayar = $user_data['bulan_dibayar'];
    $tahun_dibayar = $user_data['tahun_dibayar'];
    $id_spp = $user_data['id_spp'];
    $jumlah_bayar = $user_data['jumlah_bayar'];
}
?>
<html>
<head>	
    <title>Edit User Data</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
 
<body>
<!-- Go home button -->
<ul class="topnav">
    <li><a href="home.php">Home</a></li>
    <li><a href="pembayaran.php">Kembali</a></li>
</ul>

<br/><br/>
    
<form name="update_user" method="post" action="edit-pembayaran.php">
    <table class="content-table" width='80%' border=1>
        <tr> 
            <td>ID Pembayaran</td>
            <td><input type="text" name="id_pembayaran" value=<?php echo $id_pembayaran;?>></td>
        </tr>
        <tr> 
            <td>ID Petugas</td>
            <td><input type="text" name="id_petugas" value=<?php echo $id_petugas;?>></td>
        </tr>
        <tr> 
            <td>NISN</td>
            <td><input type="text" name="nisn" value=<?php echo $nisn;?>></td>
        </tr>
        <tr> 
            <td>Tgl Bayar</td>
            <td><input type="number" name="tgl_bayar" value=<?php echo $tgl_bayar;?>></td>
        </tr>
        <tr> 
            <td>Bulan Dibayar</td>
            <td><input type="text" name="bulan_dibayar" value=<?php echo $bulan_dibayar;?>></td>
        </tr>
        <tr> 
            <td>Tahun Dibayar</td>
            <td><input type="text" name="tahun_dibayar" value=<?php echo $tahun_dibayar;?>></td>
        </tr>
        <tr> 
            <td>ID SPP</td>
            <td><input type="text" name="id_spp" value=<?php echo $id_spp;?>></td>
        </tr>
        <tr> 
            <td>jumlah bayar</td>
            <td><input type="text" name="jumlah_bayar" value=<?php echo $jumlah_bayar;?>></td>
        </tr>
        <tr>
            <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
            <td><input type="submit" name="update" value="Update"></td>
        </tr>
    </table>
</form>

</body>
</html>