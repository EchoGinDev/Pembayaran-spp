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
    <li><a href="petugas.php">Kembali</a></li>
</ul>

<form action="add-petugas.php" method="post" name="form1">
    <table class="content-table" width="25%" border="0">
        <tr> 
            <td>id petugas</td>
            <td><input type="text" name="id_petugas"></td>
        </tr>
        <tr> 
            <td>username</td>
             <td><input type="text" name="username"></td>
        </tr>
        <tr> 
            <td>password</td>
            <td><input type="text" name="password"></td>
        </tr>
        <tr> 
            <td>nama petugas</td>
            <td><input type="text" name="nama_petugas"></td>
        </tr>
        <tr>
            <td>Level Petugas</td>
            <td>
                <select name="level">
                <option value="">Pilih petugas</option>
                <option value="admin">Admin</option>
                <option value="petugas">Petugas</option>
            </select>
            </td>
        </tr>
        <tr>
        <!-- add button -->
            <td></td>
            
            <td><input type="submit" name="Submit" value="add"></td>
        </tr>
    </table>
</form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $id_petugas = $_POST['id_petugas'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $nama_petugas = $_POST['nama_petugas'];
        $level = $_POST['level'];
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO petugas(id_petugas,username,password,nama_petugas,level) VALUES('$id_petugas','$username','$password','$nama_petugas','$level')");

        
        
        // Show message when user added
        echo "Berhasil disimpan. <a href='petugas.php'>View Users</a>";
    }
    ?>
</body>
</html>