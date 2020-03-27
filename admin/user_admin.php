<title>ADMIN </title>
<?php
// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['level'] == "") {
    header("location:?page=login");
}
?>
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->
<div class="search-bar">
    <div class="search-icon">
        <i class="material-icons">search</i>
    </div>
    <input type="text" placeholder="START TYPING...">
    <div class="close-search">
        <i class="material-icons">close</i>
    </div>
</div>
<!-- #END# Search Bar -->
<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="#">Mahasiswa</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Call Search -->
                <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                <!-- #END# Call Search -->
                <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div align="center" class="user-info">
            <div class="image">
                <img src="assets/img/c.jpg" width="48" height="48" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['nim']; ?></div>
                <div class="email"><?= $_SESSION['email']; ?></div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li>
                    <a href="?page=home_admin">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="?page=user_admin">
                        <i class="material-icons">people</i>
                        <span>user</span>
                    </a>
                </li>
                <li>
                    <a href="?page=logout">
                        <i class="material-icons">logout</i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">

                Support by | <a href="#">Rakensuuu |</a> <a href="https://t.me/uhaHoney"><i class="glyphicon glyphicon-envelope "></i> Telegram</a>
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
</section>


<!-- content -->
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>CRUD DATA</h2>
        </div>

        <!-- Widgets -->
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            CRUD DATA MENGGUNAKAN MODAL AJAX
                        </h2>
                        <br>
                        <!-- <a href="?page=user_admin_add"> -->
                        <button class="btn btn-success" data-toggle="modal" data-target="#addModal">Tambah Data</button>
                        <!-- </a> -->
                        <div class="row">
                            <div class="col-md-6">
                                <?php
                                if (isset($_SESSION['pesan'])) {
                                    echo "<div class='alert alert-warning alert-dismissible'>" . '    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $_SESSION['pesan'] . "</div>";
                                    unset($_SESSION['pesan']);
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Nim</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Level</th>
                                        <th>No Hp</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sql = mysqli_query($koneksi, "SELECT * FROM user"); ?>
                                    <?php while ($data = $sql->fetch_assoc()) { ?>
                                        <tr>
                                            <td><?= $data["nim"]; ?></td>
                                            <td><?= $data["nama"]; ?></td>
                                            <td><?= $data["email"]; ?></td>
                                            <td><?= $data["level"]; ?></td>
                                            <td><?= $data["no_hp"]; ?></td>
                                            <td>
                                                <button type="submit" class="hapus" value="<?= $data['nim']; ?>">Hapus</button>
                                                <button type="submit" class="edit" value="<?= $data['nim']; ?>">Edit</button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->
        <!-- #END# Widgets -->
    </div>
</section>

<!-- add modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="defaultModalLabel">Tambah Data Baru</h4>
            </div>
            <div class="modal-body">
                <form class="form_simpan" method="post">
                    <div class="form-group">
                        <div class="form-line">
                            <label for="addnim">NIM</label>
                            <input type="text" class="addnim form-control" name="addnim" id="addnim" value="" placeholder="Ex : 1610307057004" autofocus required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-line">
                            <label for="nama">Nama</label>
                            <input type="text" class="addnama form-control" name="addnama" id="addnama" placeholder="Ex : Budi Setiawan" autofocus required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-line">
                            <label for="addemail">Email</label>
                            <input type="text" class="addemail form-control" name="addemail" id="addemail" placeholder="Ex : Bangunpsb@gmail.com" autofocus required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-line">
                            <label for="password">Password</label>
                            <input type="password" class="addpassword form-control" name="addpassword" id="password" placeholder="Ex : ##############" autofocus required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="addlevel">Status Akses</label>
                        <select name="addlevel" id="addlevel" class="addlevel form-control show-tick" data-live-search="true" required>
                            <option value="" disabled selected>Pilih Status</option>
                            <option value="admin">ADMIN</option>
                            <option value="karyawan">KARYAWAN</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="form-line">
                            <label for="addno_hp">No Hp</label>
                            <input type="text" class="addno_hp form-control" name="addno_hp" id="addno_hp" placeholder="Ex : 081232323" autofocus aria-required="">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="form-group">
                    <button type="button" class="simpan_data btn btn-success waves-effect" value="simpan_data" data-dismiss="modal">Simpan</button>
                </div>

            </div>
        </div>
    </div>
</div>


<!-- edit modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="form_edit">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" id="defaultModalLabel">Edit Data</h4>
                </div>
                <div class="modal-body" id="result_update">


                </div>
                <div class="modal-footer">
                    <div class="form-group">
                        <button type="button" name="edit_data" class="edit_data btn btn-success waves-effect" data-dismiss="modal">Edit Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<!-- simpan menggunakan realize-->
<script type="text/javascript">
    $(document).ready(function() {

        // simpan
        $(".simpan_data").click(function() {
            var simpan = $('.simpan_data').val();
            var nim = $('.addnim').val();
            var nama = $('.addnama').val();
            var email = $('.addemail').val();
            var password = $('.addpassword').val();
            var level = $('#addlevel').val();
            var no_hp = $('.addno_hp').val();
            alert(simpan);
            $.ajax({
                type: 'post',
                url: 'admin/simpan.php',
                data: {
                    'simpan': simpan,
                    'nim': nim,
                    'nama': nama,
                    'email': email,
                    'password': password,
                    'level': level,
                    'no_hp': no_hp
                },
                success: function(data) {
                    // alert(data);
                    if (data = true) {
                        window.location.reload();
                    }
                }
            });
        });
        // $(".simpan_data").click(function() {
        //     var data = $('.form_simpan').serialize();
        //     // alert(data);
        //     $.ajax({
        //         type: 'post',
        //         url: 'admin/simpan.php',
        //         data: data,
        //         success: function(data) {
        //             // alert(data);
        //             if (data = true) {
        //                 window.location.reload();
        //             }
        //         }
        //     });
        // });


        // fungsi manggil edit data ke modal
        $(".edit").click(function() {
            var id_data = $(this).attr("value");
            $.ajax({
                type: 'post',
                url: 'admin/edit.php',
                data: {
                    id_data: id_data
                },
                success: function(data) {
                    $("#result_update").html(data);
                    $('#editModal').modal('show');
                }
            });
        });


        // fungsiedit data
        $('.edit_data').click(function() {
            var edit = $('.form_edit').serialize();
            alert(edit);
            $.ajax({
                type: 'post',
                url: 'admin/editdata.php',
                data: edit,
                success: function(data) {
                    $('#editModal').hide();
                    location.reload();
                }
            });
        });



        // hapus    

        $(".hapus").click(function() {
            var data = $(this).attr("value");
            var result = confirm('Anda yakin ingin menghapus ' + data);
            if (result == true) {
                // alert(data);
                $.ajax({
                    type: 'post',
                    url: 'admin/hapus.php',
                    data: {
                        "hapus": data
                    },
                    success: function(data) {
                        if (data = true) {
                            window.location.reload();
                        }
                    }
                });
            } else {
                window.location.reload();
            }
        });

    });
</script>