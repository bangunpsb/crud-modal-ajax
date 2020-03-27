<!-- fungsi untuk mengedit data nya -->
<?php
include('../proses/koneksi.php');
// if (isset($_POST['editrow'])) {
$editnim = $_POST['editnim'];
$editnama = $_POST['editnama'];
$editemail = $_POST['editemail'];
$editlevel = $_POST['editlevel'];
$editno_hp = $_POST['editno_hp'];

$sql = mysqli_query($koneksi, "UPDATE user set nama='$editnama', email='$editemail',level='$editlevel',no_hp='$editno_hp' WHERE nim='$editnim'");
// }
?>