<title>Login</title>

<body style="background-color:cadetblue;">
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2> Enjoy it's life</h2>
                <h5>( Login terlebih dahulu untuk mendapatkan hak akses )</h5>
                <br />
            </div>
        </div>
        <div class="row ">

            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong> Enter Details To Login </strong>
                    </div>
                    <div class="panel-body">
                        <form action="proses/cek_login.php" method="post">
                            <br />
                            <div class="form-group input-group">
                                <span class="input-group-addon">@</span>
                                <input type="email" name="email" class="form-control" placeholder="Masukkan Email" autofocus required />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" name="password" class="form-control" placeholder="Masukkan Password" autofocus required />
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline">
                                    <input type="checkbox" /> Remember me
                                </label>
                                <span class="pull-right">
                                    <a href="#" class="h5">Lupa password ? </a>
                                </span>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success" name="login">Log In</button>
                                <button type="reset" class="btn btn-danger">Reset</button></button>
                                <hr>
                                Belum Terdaftar ? <a href="?page=registerasi">Klik Disini </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>