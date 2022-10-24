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
    //echo "Pendaftaran sukses, silahkan kembali dan lanjutkan login";
    header("Location:index.php");
} else {
    echo "error :" . $sql . "<br>" . $conn->error;
}


$conn->close();