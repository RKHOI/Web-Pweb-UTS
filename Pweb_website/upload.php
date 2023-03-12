<?php
include('koneksi.php');
?>
<html>

<head>
    <title>Buildedin</title>
    <link rel="shortcut icon" href="logo.jpg">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <style type="text/css">
        * {
            font-family: "Trebuchet MS";
        }

        h1 {
            text-transform: uppercase;
            color: black;
        }

        table {
            border: solid 1px #DDEEEE;
            border-collapse: collapse;
            border-spacing: 0;
            width: 70%;
            margin: 10px auto 10px auto;
        }

        table thead th {
            background-color: black;
            border: solid 1px #DDEEEE;
            color: white;
            padding: 10px;
            text-align: left;
            text-decoration: none;
        }

        table tbody td {
            border: solid 1px #DDEEEE;
            color: #333;
            padding: 10px;
        }

        a {
            background-color: black;
            color: #fff;
            padding: 10px;
            text-decoration: none;
            font-size: 12px;
        }
    </style>
</head>

<body>
    <center>
        <h1>Data-Data User</h1>
        <center>
            <center><a href="tambah_dahsboard.php">+ &nbsp; Tambah Data User</a>
                <center>
                    <br />
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Id</th>
                                <th>Nama</th>
                                <th>NIM</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Foto</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $query = "SELECT * FROM dashboar_admin ORDER BY ID ASC";
                            $result = mysqli_query($conn, $query);
                            if (!$result) {
                                die("Query Error: " . mysqli_errno($conn) .
                                    " - " . mysqli_error($conn));
                            }


                            $no = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $row['ID']; ?></td>
                                    <td><?php echo $row['nama']; ?></td>
                                    <td><?php echo $row['Kelas']; ?></td>
                                    <td><?php echo $row['NIM']; ?></td>
                                    <td><?php echo $row['Jurusan']; ?></td>
                                    <td style="text-align: center;"><img src="Foto/647-logo.jpg ?php echo $row['Foto']; ?>" style="width: 120px;"></td>
                                    <td>
                                        <a href="edit_dashboard.php?id=<?= $row['ID']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="hapus_dashboard.php?id=<?= $row['ID']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('anda yakin ingin hapus?');">Hapus</a>
                                    </td>
                                </tr>

                            <?php
                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>
                    <a href="isi.php" type="button" class="btn btn-dark">Home</a>
</body>

</html>