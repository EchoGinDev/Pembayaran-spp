<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['nisn'];
    
    $nisn = $_POST['nisn'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $id_kelas = $_POST['id_kelas'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $id_spp = $_POST['id_spp'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE siswa SET nisn='$nisn',nis='$nis',nama='$nama',id_kelas='$id_kelas',alamat='$alamat',no_telp='$no_telp',id_spp='$id_spp'
        WHERE nisn=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: siswa.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM siswa WHERE nisn=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $nisn = $user_data['nisn'];
    $nis = $user_data['nis'];
    $nama = $user_data['nama'];
    $id_kelas = $user_data['id_kelas'];
    $alamat = $user_data['alamat'];
    $no_telp = $user_data['no_telp'];
    $id_spp = $user_data['id_spp'];
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
    <li><a href="siswa.php">Kembali</a></li>
</ul>
    
    <form name="update_user" method="post" action="edit-siswa.php">
        <table class="content-table" width="25%" border="0">
            <tr> 
                <td>NISN</td>
                <td><input type="text" name="nisn" value=<?php echo $nisn;?>></td>
            </tr>
            <tr> 
                <td>NIS</td>
                <td><input type="text" name="nis" value=<?php echo $nis;?>></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>ID Kelas</td>
                <td><input type="text" name="id_kelas" value=<?php echo $id_kelas;?>></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
            </tr>
            <tr> 
                <td>NO Telp</td>
                <td><input type="text" name="no_telp" value=<?php echo $no_telp;?>></td>
            </tr>
            <tr> 
                <td>ID SPP</td>
                <td><input type="text" name="id_spp" value=<?php echo $id_spp;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Ubah"></td>
            </tr>
        </table>
    </form>
</body>
</html>