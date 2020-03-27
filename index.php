<?php
session_start();
include 'proses/koneksi.php';
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Favicon-->
    <link rel="icon" href="assets/img/c.jpg" type="image/x-icon">
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core Css -->
    <link href="admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Multi Select Css -->
    <link href="admin/plugins/multi-select/css/multi-select.css" rel="stylesheet">
    <!-- Bootstrap Select Css -->
    <link href="admin/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    <!-- Waves Effect Css -->
    <link href="admin/plugins/node-waves/waves.css" rel="stylesheet" />
    <!-- Animation Css -->
    <link href="admin/plugins/animate-css/animate.css" rel="stylesheet" />
    <!-- Morris Chart Css-->
    <link href="admin/plugins/morrisjs/morris.css" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="admin/css/style.css" rel="stylesheet">
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="admin/css/themes/all-themes.css" rel="stylesheet" />
    <!-- Jquery Core Js -->
    <script src="admin/plugins/jquery/jquery.min.js"></script>
</head>

<body class="theme-red">



    <!-- direktori file -->
    <?php
    if (isset($_GET["page"])) {
        if ($_GET["page"] == "registerasi") {
            include "registeration.php";
        } else if ($_GET["page"] == "home_admin") {
            include "admin/home.php";
        } else if ($_GET["page"] == "user_admin") {
            include "admin/user_admin.php";
        } else if ($_GET["page"] == "user_admin_add") {
            include "admin/user_admin_add.php";
        } else if ($_GET["page"] == "simpan") {
            include "admin/simpan.php";
        } else if ($_GET["page"] == "hapus") {
            include "admin/hapus.php";
        } else if ($_GET["page"] == "edit") {
            include "admin/edit.php";
        } else if ($_GET["page"] == "editdata") {
            include "admin/editdata.php";
        } else if ($_GET["page"] == "logout") {
            include "logout.php";
        } else if ($_GET["page"] == "login") {
            include "login.php";
        } else {
            include "404.php";
        }
    } else {
        include "login.php";
    }
    ?>



    <!-- Bootstrap Core Js -->
    <script src="admin/plugins/bootstrap/js/bootstrap.js"></script>
    <!-- Select Plugin Js -->
    <script src="admin/plugins/bootstrap-select/js/bootstrap-select.js"></script>
    <!-- Slimscroll Plugin Js -->
    <script src="admin/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- Waves Effect Plugin Js -->
    <script src="admin/plugins/node-waves/waves.js"></script>
    <!-- Jquery CountTo Plugin Js -->
    <script src="admin/plugins/jquery-countto/jquery.countTo.js"></script>
    <!-- Morris Plugin Js -->
    <script src="admin/plugins/raphael/raphael.min.js"></script>
    <script src="admin/plugins/morrisjs/morris.js"></script>
    <!-- ChartJs -->
    <script src="admin/plugins/chartjs/Chart.bundle.js"></script>
    <!-- Sparkline Chart Plugin Js -->
    <script src="admin/plugins/jquery-sparkline/jquery.sparkline.js"></script>
    <!-- Jquery DataTable Plugin Js -->
    <script src="admin/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="admin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <!-- Multi Select Plugin Js -->
    <script src="admin/plugins/multi-select/js/jquery.multi-select.js"></script>
    <!-- Custom Js -->
    <script src="admin/js/admin.js"></script>
    <script src="admin/js/pages/ui/modals.js"></script>
    <script src="admin/js/pages/tables/jquery-datatable.js"></script>
    <!-- <script src="admin/js/pages/index.js"></script> -->
    <!-- Demo Js -->
    <script src="admin/js/demo.js"></script>
</body>