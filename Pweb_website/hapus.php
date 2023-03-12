<?php				
			include 'koneksi.php';
			$id = $_GET['id']; //menampung id

			$data = mysqli_query($conn, "delete from user where username ='$username'") or die(mysqli_error($conn));

			
			echo "<script>alert('data berhasil dihapus.');window.location='isi.php';</script>";
