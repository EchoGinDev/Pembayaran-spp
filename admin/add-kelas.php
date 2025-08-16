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
    <li><a href="kelas.php">Kembali</a></li>
</ul>

<form action="add-kelas.php" method="post" name="form1">
    
    <table class="content-table" width="25%" border="0">
        <tr> 
            <td>id_kelas</td>
            <td><input type="text" name="id_kelas"></td>
        </tr>
        <tr> 
            <td>nama_kelas</td>
             <td><input type="text" name="nama_kelas"></td>
        </tr>
        <tr> 
            <td>kompetensi_kealihan</td>
            <td><input type="text" name="kompetensi_kealihan"></td>
        </tr>
        <tr>
        <!-- add button -->
            <td></td>

            <td><input type="submit" name="Submit" value="Simpan"> <input type="reset" value="Hapus"></td>
        </tr>
    </table>
</form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $id_kelas = $_POST['id_kelas'];
        $nama_kelas = $_POST['nama_kelas'];
        $kompetensi_kealihan = $_POST['kompetensi_kealihan'];
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO kelas(id_kelas,nama_kelas,kompetensi_kealihan) VALUES('$id_kelas','$nama_kelas','$kompetensi_kealihan')");
        
        // Show message when user added
        echo "Berhasil disimpan.<a href='kelas.php'>View Users</a>";
    }
    ?>
</body>
</html>