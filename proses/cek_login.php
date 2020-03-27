<?php
session_start();
include 'koneksi.php';

if (isset($_POST['login'])) {

	if ($_POST['email'] == "") {
		echo "<script>alert('Masukan Email Anda');window.location='../?page=login'</script>";
	} else if ($_POST['password'] == "") {
		echo "<script>alert('Masukan Password Anda');window.location='../?page=login'</script>";
	} else {

		// menangkap data yang dikirim dari form login
		$email = $_POST['email'];
		$password = md5($_POST['password']);

		// menyeleksi data user dengan username dan password yang sesuai
		$sqlStr = "select * from user where email='$email' and password='$password'";
		$login = mysqli_query($koneksi, $sqlStr);

		// menghitung jumlah data yang ditemukan
		$cek = mysqli_fetch_assoc($login);
		// cek apakah username dan password di temukan pada database
		if (isset($cek)) {

			// menyimpan data dalam session
			$_SESSION['email'] = $email;
			$_SESSION['nama'] = $cek['nama'];
			$_SESSION['nim'] = $cek['nim'];
			$_SESSION['gbr'] = $cek['gbr'];
			$_SESSION['level'] = $cek['level'];
			$_SESSION['password'] = $cek['password'];

			// redirect ke halam sesuai level
			switch ($cek['level']) {
				case 'admin':
					header('location:../?page=home_admin');
					return;

					// case 'baak':
					// 	header('location:../baak');
					// 	return;	
			}
		}
		echo "<script>alert('Data Tidak Sesuai');window.location='../?page=login'</script>";
	}
} else {
	echo "<script>alert('Masukan Email atau Password');window.location='../?page=login'</script>";
}
