<div class="container">

    <!-- Outer Row -->
    <br>
    <div class="row justify-content-center">

        <div class="col-lg-10">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Hasil Diagnosa</h1>
                                </div>



                                <!-- Card Gejala Terpilih  -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary text-center">Gejala yang Terpilih</h6>
                                    </div>
                                    <div class="card-body">
                                        <table class="table">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Gejala</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>laptop hidup, tapi tidak tampil di layar atau monitor</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Tampak blok hitam, dan gambar tidak simetris / acak</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Terdapat garis horizontal / vertikal di tengah monitor</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>


                                <!-- Card tingkat kepercayaan -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h2 class="m-0 font-weight-bold text-primary text-center">Bagian Laptop Yang Mengalami Kerusakan Adalah Monitor</h2>
                                        <h3 class="m-0 font-weight-bold text-primary text-center">Dengan Tingkat Keyakinan Certainty Factor 90%</h3>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="my-2 float-right"></div>
                                        <a href="<?= base_url('home'); ?>" class="btn btn-primary btn-icon-split float-right">
                                            <span class="text">Kembali ke Menu</span>
                                            <span class="icon text-white-50">
                                                <i class="fas fa-arrow-right"></i>
                                            </span>
                                        </a>
                                        <div class="my-2"></div>
                                        <a href="<?= base_url('diagnosa'); ?>" class="btn btn-primary btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-arrow-left"></i>
                                            </span>
                                            <span class="text">Diagnosa Lagi</span>
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