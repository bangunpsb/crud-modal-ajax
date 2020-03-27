<!-- Simpan Postingan -->
<?php
include('../proses/koneksi.php');
if (isset($_POST['simpan'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $level = $_POST['level'];
    $no_hp = $_POST['no_hp'];
    $gbr = "ex.jpg";
    $sql = mysqli_query($koneksi, "INSERT into user (nim,nama,email,password,level,no_hp,gbr) values ('$nim','$nama','$email','$password','$level','$no_hp','$gbr')");
    return true;
}
