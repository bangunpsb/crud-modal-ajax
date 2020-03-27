<!-- Menampilkan Edit Data ke modal -->
<?php
include('../proses/koneksi.php');
//  ambil datanya ke modal biar di edit 
if (isset($_POST["id_data"])) {
    $data = $_POST["id_data"];
    $sql = mysqli_query($koneksi, "SELECT * FROM user WHERE nim ='$data'");
    while ($row = mysqli_fetch_array($sql)) {
        $nim = $row['nim'];
        $nama = $row['nama'];
        $email = $row['email'];
        $password = $row['password'];
        $level = $row['level'];
        $no_hp = $row['no_hp'];
    }
}
?>


<!-- data yang mau ditampilkan di body form edit -->
<input type="hidden" name="editnim" value="<?= $nim; ?>">
<div class="form-group">
    <div class="form-line">
        <label for="nama">Nama</label>
        <input type="text" name="editnama" value="<?= $nama; ?>" class="editnama form-control" id="nama" placeholder="Ex : Budi Setiawan" autofocus required>
    </div>
</div>
<div class="form-group">
    <div class="form-line">
        <label for="email">Email</label>
        <input type="text" name="editemail" value="<?= $email; ?>" class="editemail form-control" id="email" placeholder="Ex : Bangunpsb@gmail.com" autofocus required>
    </div>
</div>
<div class="form-group">
    <label for="level">Status Akses</label>
    <select name="editlevel" id="editlevel" class="level form-control show-tick" data-live-search="true" required>
        <?php $sql = mysqli_query($koneksi, "SELECT DISTINCT level from user "); ?>
        <?php while ($row = $sql->fetch_assoc()) {; ?>
            <option value="<?= $row['level']; ?>"><?= $row['level']; ?></option>
        <?php
        }
        ?>

    </select>
</div>
<div class="form-group">
    <div class="form-line">
        <label for="no_hp">No Hp</label>
        <input type="text" name="editno_hp" value="<?= $no_hp; ?>" class="editno_hp form-control" id="no_hp" placeholder="Ex : 081232323" autofocus aria-required="">
    </div>
</div>

<!-- data yang mau ditampilkan di body form edit -->