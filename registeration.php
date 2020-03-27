<title>Registerasi</title>

<body style="background-color:cadetblue;">

    <div class="container">
        <div class="row text-center  ">
            <div class="col-md-12">
                <br /><br />
                <h2> Enjoy it's life</h2>
                <h5>( Daftar sekarang untuk mendapatkan hak akses )</h5>
                <br />
            </div>
        </div>
        <div class="row">

            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong> Pengguna Baru ? Daftar Sekarang </strong>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="proses/proses.php" method="post" enctype="multipart/form-data">
                            <br />
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-check-square-o"></i></span>
                                <input type="text" name="nim" class="form-control" placeholder="Masukkan nim/nidn" autofocus required>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-child"></i></span>
                                <input type="text" name="nama" class="form-control" placeholder="Masukkan nama" required>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon">@</span>
                                <input type="email" name="email" class="form-control" placeholder="Masukkan email" />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" name="password" class="form-control" placeholder="Masukkan password" required />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-camera-retro"></i></span>
                                <input type="file" name="gbr" class="form-control" />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                                <input type="number" id="no_hp" name="no_hp" class="form-control" placeholder="Masukkan no hp" required />
                            </div>
                            <input type="hidden" name="level" class="form-control" value="mahasiswa" />
                            <div class="col-md-12">
                                <button type="submit" name="regis" class="btn btn-success">Daftar <span class="glyphicon glyphicon-user"></span> </button>
                                <button type="reset" class="btn btn-danger">Reset <span class="fa fa-refresh"></span> </button>
                                <hr />
                                Sudah Daftar ? <a href="?page=login">Login disini</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>