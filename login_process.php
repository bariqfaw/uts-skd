<?php
include 'koneksi.php';

include 'caesar.php';
$username = $_POST["username"];
$password = $_POST["password"];
$password_salt=$password . $username;
$password_md5 = md5($password_salt);


$passkey = substr($password, 2);
$key = ((strlen($password)) + (strlen($username)) - 5);
$text=$username;
$enkripuser = encrypt($text, $key);

$data = mysqli_query($conn, "SELECT * FROM users WHERE username ='$enkripuser' and password ='$password_md5'");

 //menghitung jumlah data yang ditemukan
 $cek = mysqli_num_rows($data);
if($cek>0){
   
    $aName1 = mysqli_fetch_assoc($data);
    header("Location:dashboard.php");
    $uname = $aName1['username'];
}else{
    echo "Login Gagal cek Username dan Password";
    header("Location:index.php");
}