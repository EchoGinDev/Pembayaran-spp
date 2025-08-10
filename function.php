<?php

$mysqli = mysqli_connect("localhost","root","","xii_rpl_a");

//login
if(isset($_POST['login'])){
$username = $_POST['uname'];
$password = $_POST['psw'];

$cekuser = mysqli_query($mysqli,"select * from petugas where username='$username' and password='$password'");
$hitung = mysqli_num_rows($cekuser);
};

if($hitung > 0){
//kalau ditemukan
$ambildatarole = mysqli_fetch_array($cekuser);
$role = $ambildatarole['level'];

if($role=='admin'){
//kalau dia admin
$_SESSION['log'] = 'logged';
$_SESSION['role'] = 'Admin';
    header('location:admin');
    }else{
//kalau bukan admin
$_SESSION['log'] = 'logged';
$_SESSION['role'] = 'petugas';
    header('location:petugas');
    }

}else{
//kalau tidak ditemukan
    echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";
}


?>