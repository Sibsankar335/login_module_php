<?php

$host = "mysql-dfa08d4-dsibsankar088-e1d8.i.aivencloud.com";
$user = "avnadmin";
$password = "AVNS_VoXXKXueCeEkLhQzeXF";
$database = "defaultdb";
$port =23204;

$con = mysqli_init();

mysqli_ssl_set(
    $con,
    null,
    null,
    null,
    null,
    null
);

if (!mysqli_real_connect(
    $con,
    $host,
    $user,
    $password,
    $database,
    $port
)) {
    die("Database connection failed: " . mysqli_connect_error());
}

?>
