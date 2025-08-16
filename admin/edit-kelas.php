<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id_kelas'];
    
    $id_kelas=$_POST['id_kelas'];
    $nama_kelas=$_POST['nama_kelas'];
    $kompetensi_kealihan=$_POST['kompetensi_kealihan'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE kelas SET id_kelas='$id_kelas',nama_kelas='$nama_kelas',kompetensi_kealihan='$kompetensi_kealihan' WHERE id_kelas=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: kelas.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM kelas WHERE id_kelas=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $id_kelas = $user_data['id_kelas'];
    $nama_kelas = $user_data['nama_kelas'];
    $kompetensi_kealihan = $user_data['kompetensi_kealihan'];
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
    <li><a href="kelas.php">Kembali</a></li>
</ul>
    
    <form name="update_user" method="post" action="edit-kelas.php">
        <table class="content-table" width="25%" border="0">
            <tr> 
                <td>id_kelas</td>
                <td><input type="text" name="id_kelas" value=<?php echo $id_kelas;?>></td>
            </tr>
            <tr> 
                <td>nama_kelas</td>
                <td><input type="text" name="nama_kelas" value=<?php echo $nama_kelas;?>></td>
            </tr>
            <tr> 
                <td>kompetensi_kealihan</td>
                <td><input type="text" name="kompetensi_kealihan" value=<?php echo $kompetensi_kealihan;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Ubah"></td>
            </tr>
        </table>
    </form>
</body>
</html>