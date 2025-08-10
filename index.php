<?php
 require 'function.php';
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

<h3>Login Admin/Petugas</h3>
<div class="nijika">
<img src="img/logo-spp2.png">
</div>


<h3>Aplikasi Pembayaran SPP</h3>
<form method="post">
    <label>Username:</label>
    <input type="text" name="uname" required/>
    <label>Password:</label>
    <input type="password" name="psw" required/>

<div class="tombol">
    <input type="submit" name="login"/>
</div>

<center>
<a href="index2.php">Login siswa</a>
</center>

</form>

    
</body>
</html>