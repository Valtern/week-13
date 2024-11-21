<?php
// // koneksi ke database
// $koneksi = mysqli_connect("localhost","root","","prakwebdb");

// // periksa koneksi
// if(mysqli_connect_errno()){
//     die("Koneksi database gagal: ". mysqli_connect_error());
// }
//     define('HOST', 'localhost');
//     define('USER', 'root');
//     define('PASS', '');
//     define('DB1', 'prakwebdb');

//     //buat koneksi
//     $db1 = new mysqli(HOST, USER, PASS, DB1)

// 



$serverName = "WAPII";
$database = "prakwebdb";
$username = ""; 
$password = "";

try {
    $koneksi = new PDO("sqlsrv:Server=$serverName;Database=$database", $username, $password);
    $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>


