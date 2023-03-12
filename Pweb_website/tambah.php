<?php
include('koneksi.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>Buildedin</title>
</head>
<link rel="shortcut icon" href="logo.jpg">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<style>
    .mx-auto {
        width: 1600px
    }

    .card {
        margin-top: 10px
    }
</style>

<body>
    <div class="container col-md-6 mt-4">
        <h1>Tambah Data </h1>
        <div class="card">
            <div class="card-body">
                <form action="" method="post" role="form">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="Username" required="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="Password" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="role">Role</label>
                        <select class="form-select" name="Role" required>
                            <option selected>Pilih Role...</option>
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan data</button>
                </form>

                <?php
                include('koneksi.php');

                //melakukan pengecekan jika button submit diklik maka akan menjalankan perintah simpan dibawah ini
                if (isset($_POST['submit'])) {
                    //menampung data dari inputan
                    $username = $_POST['Username'];
                    $Password = $_POST['Password'];
                    $Role = $_POST['Role'];

                    $data = mysqli_query($conn, "insert into user (Username,password,role)values('$username', '$Password', '$Role')") or die(mysqli_error($conn));

                    //ini untuk menampilkan alert berhasil dan redirect ke halaman index
                    echo "<script>alert('data berhasil disimpan.');window.location='isi.php';</script>";
                }
                ?>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>