<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                      <!-- Nav bar menu -->
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="<?= base_url('menuuser'); ?>">Home</a>
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                <a class="nav-link active" href="<?= base_url('menuuser/kerusakan'); ?>">Info Kerusakan Laptop</a>
                                <a class="nav-link active" href="<?= base_url('menuuser/hardware'); ?>">Info Hardware Laptop</a>
                                <a class="nav-link active" href="<?= base_url('menuuser/tentangkami'); ?>">Tentang Kami</a>
                                <a class="nav-link active" href="<?= base_url('menuuser/bantuan'); ?>">Bantuan</a>
                                </div>
                            </div>
                        </nav>
                      <!-- End Nav bar menu -->

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div> -->

                    

                      <!-- Content Row -->
                      <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">
                            <div class="card  border-secondary mb-3" style="max-width: 540px;">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                    <img src="..." alt="...">
                                    </div>
                                    <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Hai Sahabat Laptop !!!</h5>
                                        <p class="card-text">Kenalin nih, saya Dikhi Qhoirul Ikhsan kuliah di Universitas Muhammadiah Magelang.</p>
                                        <p class="card-text text-center">Kenali media sosial saya disini : </p>
                                        <div class="mb-2">
                                    </div>

                                    <a href="#" class="btn btn-facebook btn-block">
                                        <i class="fab fa-facebook-f fa-fw"></i>Facebook</a>
                                    <a href="#" class="btn btn-google btn-block">
                                        <i class="fab fa-instagram fa-fw"></i>Instagram</a>

                                    </div>
                                    </div>
                                </div>
                            </div>
 
                        </div>
                    <!-- End Content Row -->    
                    </div>

                    <div class="card-deck">
                        <div class="card border-secondary mb-3">
                            <div class="card-body">
                                <p class="card-text"><small class="text-muted">Tujuan</small></p>
                                <p class="card-text">Menghitung tingkat akurasi yang dihasilkan oleh sistem pakar diagnosa kerusakan pada laptop menggunakan metode Dempster Shafer dan Certainty Factor.</p>
                                <p class="card-text">Membandingkan tingkat akurasidiantara Dempster Shafer dan Certainty Factor pada sistem pakar untuk mendiagnosa kerusakan pada laptop.</p>
                            </div>
                        </div>
                        <div class="card border-secondary mb-3">
                            <div class="card-body">
                                <p class="card-text"><small class="text-muted">Manfaat</small></p>
                                <p class="card-text">Memberikan pemahaman cara mendiagnosa kerusakan laptop menggunakan metode Dempster Shafer dan Certainty Factor kepada pengguna.</p>
                                <p class="card-text">Membantu masyarakat dalam mendiagnosa kerusakan yang ada pada laptop.</p>
                            </div>
                        </div>
                    </div>

                   




                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Sistem Pakar 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('assets/'); ?>vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('assets/'); ?>js/demo/chart-area-demo.js"></script>
    <script src="<?= base_url('assets/'); ?>js/demo/chart-pie-demo.js"></script>

</body>

</html>