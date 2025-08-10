<?php

$nisn = $_POST['nisn'];
$nis = $_POST['nis'];

include 'config.php';
$sql = "SELECT*FROM siswa WHERE nisn='$nisn' AND nis='$nis'";
$query = mysqli_query($config, $sql);
if (mysqli_num_rows($query)>0){
    $data = mysqli_fetch_array($query);
    session_start();

    $_SESSION['nama'] = $data['nama'];
    $_SESSION['id_kelas'] = $data['id_kelas'];
    $_SESSION['alamat'] = $data['alamat'];
    $_SESSION['no_telp'] = $data['no_telp'];
    $_SESSION['id_spp'] = $data['id_spp'];


if ($nisn == $nisn && $nis == $nis) {
    session_start();
    $_SESSION['nisn'] = $nisn;
    header("Location: siswa/index.php");
} else {
    header("Location: index2.php");
  }
}
?>