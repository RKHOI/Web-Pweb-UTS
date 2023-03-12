<?php
$host = "localhost:3308";
$user = "root";
$pass = "anka9904";
$db = "buidedin_uts";
$conn = mysqli_connect($host, $user, $pass, $db);
if ($conn) {
    //echo "Database Terkoneksdai";
} else {
    echo ("koneksi gagal");
}
