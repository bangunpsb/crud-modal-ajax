<!-- Hapus Postingan -->
<?php
include('../proses/koneksi.php');
if (isset($_POST['hapus'])) {
    $nim = $_POST['hapus'];
    $hapus = mysqli_query($koneksi, "DELETE FROM user where nim='$nim'");
    return true;
}
?>