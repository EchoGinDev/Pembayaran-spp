<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id_spp'];
    
    $id_spp = $_POST['id_spp'];
    $tahun = $_POST['tahun'];
    $nominal = $_POST['nominal'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE spp SET id_spp='$id_spp',tahun='$tahun',nominal='$nominal' WHERE id_spp=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: spp.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM spp WHERE id_spp=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $id_spp = $user_data['id_spp'];
    $tahun = $user_data['tahun'];
    $nominal = $user_data['nominal'];
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
    <li><a href="spp.php">Kembali</a></li>
</ul>
    
    <form name="update_user" method="post" action="edit-spp.php">
        <table class="content-table" width="25%" border="0">
            <tr> 
                <td>id_spp</td>
                <td><input type="number" name="id_spp" value=<?php echo $id_spp;?>></td>
            </tr>
            <tr> 
                <td>tahun</td>
                <td><input type="number" name="tahun" value=<?php echo $tahun;?>></td>
            </tr>
            <tr> 
                <td>nominal</td>
                <td><input type="number" name="nominal" value=<?php echo $nominal;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Ubah"></td>
            </tr>
        </table>
    </form>
</body>
</html>