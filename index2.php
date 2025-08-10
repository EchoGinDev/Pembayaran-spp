<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require 'proses-siswa.php';
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>



<div class="box">

<h3>Login Siswa</h3>
<div class="nijika">
<img src="img/logo-spp2.png">
</div>


<h3>Aplikasi Pembayaran SPP</h3>
<form method="post" action="proses-siswa.php">
    <label>NISN:</label>
    <input type="text" name="nisn" required/>
    <label>NIS:</label>
    <input type="text" name="nis" required/>

    <div class="start">
        <input type="submit" name="login" value="Login"/>
    </div>

    <center>
        <a href="index.php">Login Admin/Petugas</a>
    </center>
</form>

</body>
</html>