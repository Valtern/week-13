<?php
session_start();

include "./koneksi.php";
include "./csrf.php";

$id = $_POST['id'];

$sqlsrv_query = "DELETE FROM anggota WHERE id = ?";
$sql = $db1->sqlsrv_prepare($query);
$sql->bind_param('i', $id);
$sql->sqlsrv_execute();

echo json_encode(['success' => 'Sukses']);
$db1->close();

?>