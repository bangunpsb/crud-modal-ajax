<?php
include 'koneksi.php';
?>

<!-- regis -->
<?php
if (isset($_POST["regis"])) {
    $gbr = $_FILES['gbr']['name'];
    $lokasi = $_FILES['gbr']['tmp_name'];
    move_uploaded_file($lokasi, "../assets/imgu/$gbr");
    session_start();
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = md5($_POST["password"]);
    $level = $_POST["level"];
    $no_hp = $_POST["no_hp"];

    $simpan = mysqli_query($koneksi, "insert into user values('$nim','$nama','$email','$password','$level','$no_hp','$gbr')");

    if (!$simpan) {
        echo "<script>alert('Data Gagal Disimpan');window.location='../registeration.php' </script>";
    } else {
        echo "<script>alert('Data Berhasil Disimpan');window.location='../registeration.php' </script>";
    }
}
?>