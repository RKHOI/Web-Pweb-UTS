<?php
include 'koneksi.php';


$Nama       = $_POST['Nama'];
$NIM        = $_POST['NIM'];
$Kelas      = $_POST['Kelas'];
$Jurusan    = $_POST['Jurusan'];
$Foto       = $_FILES['Foto']['name'];

if ($Foto != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg');
    $x = explode('.', $Foto);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['foto']['tmp_name'];
    $angka_acak     = rand(1, 999);
    $Foto_Baru = $angka_acak . '-' . $Foto;
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, 'Foto/'.$Foto_Baru);
        $query = "INSERT INTO dashboar_admin (Nama, NIM, Kelas, Jurusan, Foto) VALUES ( '$Nama', '$NIM', '$Kelas', '$Jurusan','$Foto_Baru')";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("Query gagal dijalankan: " . mysqli_errno($conn) .
                " - " . mysqli_error($conn));
        } else {
            echo "<script>alert('Data berhasil ditambah.');window.location='upload.php';</script>";
        }
    } else {
        echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah_dashboard.php';</script>";
    }
} else {
    $query = "INSERT INTO dashboar_admin(NAMA, KELAS, NIM, JURUSAN, Foto) VALUES ('$Nama', '$Kelas', '$NIM', '$Jurusan' null)";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($conn) .
            " - " . mysqli_error($conn));
    } else {
        echo "<script>alert('Data berhasil ditambah.');window.location='upload.php';</script>";
    }
}
