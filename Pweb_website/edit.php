<?php
include('koneksi.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Edit data</title>
</head>
<link rel="shortcut icon" href="logo.jpg">
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
        <div class="card">
            <div class="card-header bg-success text-white ">
                <h1>Edit data</h1>
            </div>
            <div class="card-body">
                <?php
                include('koneksi.php');

                $ID = $_GET['ID'];

                $data = mysqli_query($conn, "select * from user where ID = '$ID'");
                $row = mysqli_fetch_assoc($data);

                ?>
                <form action="" method="post" role="form">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="Username" required="" class="form-control" value="<?= $row['Username']; ?>">

                        <input type="hidden" name="Username" required="" value="<?= $row['Username']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="Password" class="form-control" value="<?= $row['Password']; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit" value="simpan">Update data</button>
                </form>

                <?php

                if (isset($_POST['submit'])) {
                    $Username = $_POST['Username'];
                    $Password = $_POST['Password'];

                    //query mengubah barang
                    mysqli_query($conn, "update user set Username='$Username', Password='$Password'where Username ='$Username'") or die(mysqli_error($conn));

                    //redirect ke halaman index.php
                    echo "<script>alert('data berhasil diupdate.');window.location='index.php';</script>";
                }



                ?>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>