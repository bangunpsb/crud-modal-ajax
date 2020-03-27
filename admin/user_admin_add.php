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
                            CRUD DATA MENGGUNAKAN AJAX
                        </h2>
                        <br>
                        <a href="?page=user_admin">View Data</a>
                        <p></p>
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
                        <form class="form-simpan" method="post">
                            <div class="form-group">
                                <div class="form-line">
                                    <label for="nim">NIM</label>
                                    <input type="text" class="nim form-control" name="nim" id="nim" value="" placeholder="Ex : 1610307057004" autofocus required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="nama form-control" name="nama" id="nama" placeholder="Ex : Budi Setiawan" autofocus required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <label for="email">Email</label>
                                    <input type="text" class="emaill form-control" name="email" id="email" placeholder="Ex : Bangunpsb@gmail.com" autofocus required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <label for="password">Password</label>
                                    <input type="password" class="password form-control" name="password" id="password" placeholder="Ex : ##############" autofocus required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="level">Status Akses</label>
                                <select name="level" id="level" class="level form-control show-tick" data-live-search="true" required>
                                    <option value="" disabled selected>Pilih Status</option>
                                    <option value="admin">ADMIN</option>
                                    <option value="karyawan">KARYAWAN</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <label for="no_hp">No Hp</label>
                                    <input type="text" class="no_hp form-control" name="no_hp" id="no_hp" placeholder="Ex : 081232323" autofocus aria-required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="simpan btn btn-success">Simpan</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->
        <!-- #END# Widgets -->
    </div>
</section>

<!-- 
<script type="text/javascript">
    $(document).ready(function() {
        $(".simpan").click(function() {
            var data = $(".form-simpan").serialize();
            $.ajax({
                type: 'post',
                url: 'admin/simpan.php',
                data: {
                    'simpan': data
                },
                success: function(s) {
                    alert(s);
                    if (s = true) {
                        window.location.reload();
                    }
                }
            });
        });
    });
</script> -->


<script type="text/javascript">
    $(document).ready(function() {

        $(".simpan").click(function() {
            var nim = $(".nim").val();
            var nama = $(".nama").val();
            var email = $(".emaill").val();
            var password = $(".password").val();
            var level = $(".level option:selected").attr("value");
            var no_hp = $(".no_hp").val();
            alert(level);
            $.ajax({
                type: 'post',
                url: 'admin/simpan.php',
                data: {
                    // 'simpan',
                    'nim': nim,
                    'nama': nama,
                    'email': email,
                    'password': password,
                    'level': level,
                    'no_hp': no_hp
                },
                success: function(s) {
                    alert(s);
                    if (s = true) {
                        window.location.reload();
                    }
                }
            });
        });
    });
</script>