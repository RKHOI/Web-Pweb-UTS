<?php
include "koneksi.php";
if (isset($_POST['aksi'])) {
    if ($_POST['aksi'] == "login") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT * FROM user where username='$username' AND
password='$password'";
        $result = mysqli_query($conn, $query);
        $cekData = mysqli_num_rows($result);
        if ($cekData != 0) {
            header("location: isi.php");
        } else {
            echo ("<h1>Gagal Login masukkan useRname dan password yang benar

</h1>");
        }
    } else if ($_POST['aksi'] == "register") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['Role'];
        $query = "INSERT INTO user VALUES ('$username','$password',' $role');";
        $sql = mysqli_query($conn, $query);
        if ($sql) {
            echo ("<h1>Registrasi Berhasil !</h1>");
        } else {
            echo ("Registrasi Gagal");
        }
    }
}
