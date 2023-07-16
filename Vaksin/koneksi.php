<?php
$koneksi = new mysqli('localhost', 'root', '', 'rumahsakit')
or die(mysqli_error($koneksi));


if (isset($_POST['simpan'])){
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $koneksi->query("INSERT INTO pasien (nik, nama, telp, jk, alamat) values ('$nik', '$nama', '$telp', '$jk', '$alamat')");

    header('location:pasien.php');
}


if(isset($_GET['nik'])){
    $nik = $_GET['nik'];
    $koneksi->query("DELETE FROM pasien where nik = '$nik'");
    header("location:pasien.php");
}

if (isset($_POST['edit'])){
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

    $koneksi->query("UPDATE pasien SET nik='$nik',nama='$nama',jk='$jk',alamat='$alamat' where nik = '$nik'");
    header("location:pasien.php");
}