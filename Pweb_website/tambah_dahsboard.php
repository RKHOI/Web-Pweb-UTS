<?php
include('koneksi.php');

?>
<!DOCTYPE html>
<html>

<head>
    <title>Tambah User</title>
    <style type="text/css">
        * {
            font-family: "Trebuchet MS";
        }

        h1 {
            text-transform: uppercase;
            color: black;
        }

        button {
            background-color: black;
            color: #fff;
            padding: 10px;
            text-decoration: none;
            font-size: 12px;
            border: 0px;
            margin-top: 20px;
        }

        label {
            margin-top: 10px;
            float: left;
            text-align: left;
            width: 100%;
        }

        input {
            padding: 6px;
            width: 100%;
            box-sizing: border-box;
            background: #f8f8f8;
            border: 2px solid #ccc;
            outline-color: black;
        }

        div {
            width: 100%;
            height: auto;
        }

        .base {
            width: 400px;
            height: auto;
            padding: 20px;
            margin-left: auto;
            margin-right: auto;
            background: #ededed;
        }
    </style>
</head>

<body>
    <center>
        <h1>Tambah Data</h1>
        <center>
            <form method="POST" action="proses_tambah.php" enctype="multipart/form-data">
                <section class="base">
                    <div>
                        <label>Nama</label>
                        <input type="text" name="Nama" />
                    </div>
                    <div>
                        <label>Kelas</label>
                        <input type="text" name="Kelas" required="" />
                    </div>
                    <div>
                        <label>NIM</label>
                        <input type="text" name="NIM" required="" />
                    </div>
                    <div>
                        <label>Jurusan</label>
                        <input type="text" name="Jurusan" required="" />
                    </div>
                    <div>
                        <label>Foto</label>
                        <input type="file" name="Foto" required="" />
                    </div>
                    <div>
                        <button type="submit">Simpan Data</button>
                    </div>
                </section>
            </form>
</body>

</html>