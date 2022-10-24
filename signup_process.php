<?php
include 'koneksi.php';
include 'caesar.php';

$fullname = $_POST["fullname"];
$username = $_POST["username"];
$password = $_POST["password"];
$password_salt=$password . $username;
$password_md5 = md5($password_salt);


$passkey = substr($password, 2);
$key = ((strlen($password)) + (strlen($username)) - 5);
$text=$username;
$enkripuser = encrypt($text, $key);

$sql = "INSERT INTO `users` (`fullname`, `username`, `password`) VALUES ('$fullname', '$enkripuser', '$password_md5')";

if ($conn->query($sql) === TRUE){
    echo("<script LANGUAGE='JavaScript'>
        window.alert('Registrasi Berhasil');
        window.location.href='index.php';
        </script>");
} else {
    echo("<script LANGUAGE='JavaScript'>
        window.alert('Registrasi Gagal');
        window.location.href='signup.php';
        </script>");
}