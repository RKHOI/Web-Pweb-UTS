<!DOCTYPE html>
<html>

<head>
    <title>Buildedin</title>
</head>
<link rel="shortcut icon" href="logo.jpg">
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
        <div class="container">
            <div class="row mt-4">
                <div class="col-md-6">
                    <h1>Data User admin <svg xmlns="http://www.w3.org/2000/svg" width="60" height="40" fill="currentColor" class="bi bi-file-medical-fill" viewBox="0 0 16 16">
                            <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM8.5 4.5v.634l.549-.317a.5.5 0 1 1 .5.866L9 6l.549.317a.5.5 0 1 1-.5.866L8.5 6.866V7.5a.5.5 0 0 1-1 0v-.634l-.549.317a.5.5 0 1 1-.5-.866L7 6l-.549-.317a.5.5 0 0 1 .5-.866l.549.317V4.5a.5.5 0 1 1 1 0zM5.5 9h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zm0 2h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1z" />
                        </svg></h1>
                </div>
                <div class="col-md-6">
                    <div class="tambah">
                        <a href="tambah.php" type="button" class="btn btn-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-database-fill-add" viewBox="0 0 16 16">
                                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0ZM8 1c-1.573 0-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4s.875 1.755 1.904 2.223C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777C13.125 5.755 14 5.007 14 4s-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1Z" />
                                <path d="M2 7v-.839c.457.432 1.004.751 1.49.972C4.722 7.693 6.318 8 8 8s3.278-.307 4.51-.867c.486-.22 1.033-.54 1.49-.972V7c0 .424-.155.802-.411 1.133a4.51 4.51 0 0 0-4.815 1.843A12.31 12.31 0 0 1 8 10c-1.573 0-3.022-.289-4.096-.777C2.875 8.755 2 8.007 2 7Zm6.257 3.998L8 11c-1.682 0-3.278-.307-4.51-.867-.486-.22-1.033-.54-1.49-.972V10c0 1.007.875 1.755 1.904 2.223C4.978 12.711 6.427 13 8 13h.027a4.552 4.552 0 0 1 .23-2.002Zm-.002 3L8 14c-1.682 0-3.278-.307-4.51-.867-.486-.22-1.033-.54-1.49-.972V13c0 1.007.875 1.755 1.904 2.223C4.978 15.711 6.427 16 8 16c.536 0 1.058-.034 1.555-.097a4.507 4.507 0 0 1-1.3-1.905Z" />
                            </svg> Tambah Data</a>
                    </div></br>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table id="tabel-data" class="table table-bordered table-hover">

                <thead>
                    <tr class="table-secondary">
                        <div class="tambah">
                            <th>NO </th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Role</th>
                            <th>Opsi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    include('koneksi.php'); //memanggil file koneksi
                    $data = mysqli_query($conn, "select * from user") or die(mysqli_error($conn));

                    $no = 1;

                    //melakukan perulangan
                    while ($row = mysqli_fetch_assoc($data)) {
                    ?>

                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $row['Username']; ?></td>
                            <td><?= $row['Password']; ?></td>
                            <td><?= $row['Role']; ?></td>
                            <td>
                                <a href="edit.php?id=<?= $row['Username']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="hapus.php?id=<?= $row['Username']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('anda yakin ingin hapus?');">Hapus</a>
                                <a href="upload.php?id=<?= $row['Username']; ?>" class="btn btn-sm btn-warning">Upload</a>
                            </td>
                        </tr>

                    <?php $no++;
                    } ?>
                </tbody>
            </table>
            <a href="index.php" type="button" class="btn btn-sm btn-danger">Logout</a>
        </div>
    </div>
    </div>
    </div>
    </div>
    <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
</body>


</html>