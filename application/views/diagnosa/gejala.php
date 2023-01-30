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

            <!-- Topbar Navbar -->

            <!-- Nav bar menu -->
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="<?= base_url('menuuser'); ?>">Home</a>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" href="<?= base_url('menuuser/kerusakan'); ?>">Info Kerusakan Laptop</a>
                        <a class="nav-link active" href="<?= base_url('menuuser/hardware'); ?>">Info Hardware Laptop</a>
                    </div>
                </div>
            </nav>
            <!-- End Nav bar menu -->



        </nav>
        <!-- End of Topbar -->

        <!-- End Content Row -->
    </div>
    <div class="container">

        <br>
        <div class="row justify-content-center">

            <div class="col-lg-10">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0 bg-light">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-grey mb-4">Silahkan Jawab Pertanyaan Sesuai Dengan Gejala Yang Dialami</h1>
                                    </div>

                                    <div class="card text-center border-primary">
                                        <div class="card-header text-white bg-primary">
                                            <h4>Laptop masih menyala </h4>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title"></h5>
                                            <p class="card-text"></p>

                                            <a href="<?= base_url('diagnosa/hasil'); ?>" class="btn btn-primary btn-icon-split">
                                                <div class="my-2"></div>
                                                <span class="icon text-white-50">
                                                    <i class="fa-solid fa-xmark"></i>
                                                </span>
                                                <span class="text">Tidak</span>
                                            </a>
                                            <a href="<?= base_url('diagnosa/hasil'); ?>" class="btn btn-primary btn-icon-split">
                                                <div class="my-2"></div>
                                                <span class="icon text-white-50">
                                                    <i class="fa-solid fa-check"></i>
                                                </span>
                                                <span class="text">Benar</span>
                                            </a>


                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


    <!-- About-->





</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->