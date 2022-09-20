<?php
include "assets/helpers/header_include.php";

$conn = mysqli_connect('localhost', 'root', '', 'db_admin');

$query = "SELECT COUNT(*) FROM complaints WHERE c_status = 0;";
$query1 = "SELECT COUNT(*) FROM complaints WHERE c_status = 1;";

$result = mysqli_query($conn, $query);
$result1 = mysqli_query($conn, $query1);


$rows = mysqli_fetch_assoc($result);
$rows1 = mysqli_fetch_assoc($result1);

$unresolved = $rows['COUNT(*)'];
$resolved = $rows1['COUNT(*)'];
?>