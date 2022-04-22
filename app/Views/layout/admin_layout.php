<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PROFIL RPL</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets-admin/img/favicon.png" rel="icon">
    <link href="../assets-admin/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets-admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets-admin/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets-admin/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets-admin/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../assets-admin/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../assets-admin/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets-admin/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets-admin/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="" class="logo d-flex align-items-center">
                <img src="../assets-admin/img/favicon.png" alt="">
                <span class="d-none d-lg-block">PROFILRPL</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-10" href="" data-bs-toggle="dropdown">
                        <span class="d-none d-md-block ps-2">K. Anderson</span>
                    </a>

                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="<?= base_url('/admin') ?>">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->


            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="<?= base_url('/admin/user') ?>">
                            <i class="bi bi-circle"></i><span>Data User</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('/admin/berita') ?>">
                            <i class="bi bi-circle"></i><span>Data Berita</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Tables Nav -->

            <li class="nav-heading">Pages</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-register.html">
                    <i class="bi bi-card-list"></i>
                    <span>Register</span>
                </a>
            </li><!-- End Register Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="/">
                    <i class="bi bi-box-arrow-left"></i>
                    <span>Logout</span>
                </a>
            </li><!-- End Logout Page Nav -->

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <?= $this->renderSection('content') ?>

    </main>
    <!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../assets-admin/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="../assets-admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets-admin/vendor/chart.js/chart.min.js"></script>
    <script src="../assets-admin/vendor/echarts/echarts.min.js"></script>
    <script src="../assets-admin/vendor/quill/quill.min.js"></script>
    <script src="../assets-admin/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="../assets-admin/vendor/tinymce/tinymce.min.js"></script>
    <script src="../assets-admin/vendor/php-email-form/validate.js"></script>

    <!-- Page level plugins -->
    <script src="../assets-admin/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets-admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="../assets-admin/vendor/jquery/jquery.min.js"></script>
    <script src="../assets-admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets-admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../assets-admin/js/demo/datatables-demo.js"></script>

    <!-- Custom styles for this page -->
    <link href="../assets-admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Template Main JS File -->
    <script src="../assets-admin/js/main.js"></script>

</body>

</html>