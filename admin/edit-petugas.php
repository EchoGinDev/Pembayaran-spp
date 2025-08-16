<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id_petugas'];
    
    $id_petugas=$_POST['id_petugas'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $nama_petugas=$_POST['nama_petugas'];
    // update user data
    $result = mysqli_query($mysqli, "UPDATE petugas SET id_petugas='$id_petugas',username='$username',password='$password',nama_petugas='$nama_petugas',level='$level' WHERE id_petugas=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: petugas.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM petugas WHERE id_petugas=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $id_petugas = $user_data['id_petugas'];
    $username = $user_data['username'];
    $password = $user_data['password'];
    $nama_petugas = $user_data['nama_petugas'];
    $level = $user_data['level'];
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
        <li><a href="petugas.php">Go to Home</a></li>
    </ul>
    
    <form name="update_user" method="post" action="edit-petugas.php">
        <table class="content-table" width="25%" border="0">
            <tr> 
                <td>id_petugas</td>
                <td><input type="text" name="id_petugas" value=<?php echo $id_petugas;?>></td>
            </tr>
            <tr> 
                <td>username</td>
                <td><input type="text" name="username" value=<?php echo $username;?>></td>
            </tr>
            <tr> 
                <td>password</td>
                <td><input type="text" name="password" value=<?php echo $password;?>></td>
            </tr>
            <tr> 
                <td>nama_petugas</td>
                <td><input type="text" name="nama_petugas" value=<?php echo $nama_petugas;?>></td>
            </tr>
            <tr> 
                <td>level</td>
                <td><input type="enum" name="level" value=<?php echo $level;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>