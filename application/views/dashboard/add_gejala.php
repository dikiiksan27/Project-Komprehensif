<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->



    <div class="row mt-3">
        <div class="col-md-6">
            <div class="h3 mb-4 text-gray-800 font-weight-bold font-italic font-underline text-center"><img src="<?= base_url('assets/img/unimma.png') ?>" class="rounded mx-auto d-block" width="50px" height="50px">
                <ins>ADD GEJALA</ins>
            </div>
            <div class="card text-white bg-primary mb-3" style="max-width: 40rem;">
                <!-- <div class="card-header">Email</div> -->
                <div class="card-body">
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="gejala">Gejala</label>
                            <input type="text" class="form-control" id="gejala" name="gejala" placeholder="Nama Gejala">
                            <small class="form-text text-warning"> <?= form_error('gejala'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kode_gejala">Kode_Gejala</label>
                            <input type="text" class="form-control" id="kode_gejala" name="kode_gejala" placeholder="Kode Gejala">
                            <small class="form-text text-warning"> <?= form_error('kode_gejala'); ?></small>
                        </div>
                        <select class="btn btn-success" name="status">
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>
                        </select>
                </div>

            </div>
            <button type="submit" class="btn btn-primary float-right" name="add">Add New Gejala</button>
            <a href="<?php echo site_url('dashboard/gejala') ?>" class="btn btn-outline-primary">Kembali</a>
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->