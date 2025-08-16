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
    <li><a href="spp.php">Kembali</a></li>
</ul>
 
<form action="add-spp.php" method="post" name="form1">
    <table class="content-table" width="25%" border="0">
        <tr> 
            <td>id_spp</td>
            <td><input type="number" name="id_spp"></td>
        </tr>
        <tr> 
            <td>tahun</td>
            <td><input type="number" name="tahun"></td>
        </tr>
        <tr> 
            <td>nominal</td>
            <td><input type="number" name="nominal"></td>
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
        $id_spp = $_POST['id_spp'];
        $tahun = $_POST['tahun'];
        $nominal = $_POST['nominal'];
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO spp(id_spp,tahun,nominal) VALUES('$id_spp','$tahun','$nominal')");
        
        // Show message when user added
        echo "User added successfully. <a href='spp.php'>View Users</a>";
    }
    ?>
</body>
</html>