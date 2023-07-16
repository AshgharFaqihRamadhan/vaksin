<?php 
$host = "localhost"; 
$user = "root";
$password = ""; 
$database = "rumahsakit"; 
$koneksi = mysqli_connect('localhost', 'root', '', 'rumahsakit');

if (mysqli_connect_errno()){
echo "Koneksi gagal : " . mysqli_connect_error();
}

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$user = mysqli_query($koneksi, "select * from user where username='$username' and password='$password'");

$cek = mysqli_num_rows($user);

if($cek > 0){
$data = mysqli_fetch_assoc($user);

if($data['level'] == 'admin'){

$_SESSION['username'] = $username;
$_SESSION['level'] = 'admin';

header('location:pasien.php');

}elseif($data['level'] == 'ketua'){

$_SESSION['username'] = $username;
$_SESSION['level'] = 'ketua';

header('location:data.php');

}elseif($data['level'] == 'anggota'){

$_SESSION['username'] = $username;
$_SESSION['level'] = 'anggota';

header('location:anggota.php');
}
}else{

header("location:login.php?pesan=gagal");
}
