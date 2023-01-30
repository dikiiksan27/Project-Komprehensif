<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"> <?= $title; ?></h1>

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card text-white bg-warning mb-3" style="max-width: 40rem;">
                <!-- <div class="card-header">Email</div> -->
                <div class="card-body">
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="kode_rule">Kode_Rule</label>
                            <input type="text" class="form-control" id="kode_rule" name="kode_rule" placeholder="R......">
                            <small class="form-text text-warning"> <?= form_error('kode_rule'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kode_gejala">Kode Gejala</label>
                            <input type="text" class="form-control" id="kode_gejala" name="kode_gejala" placeholder="G...G...G...">
                            <small class="form-text text-warning"> <?= form_error('kode_gejala'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kode_kerusakan">Kode Kerusakan</label>
                            <input type="text" class="form-control" id="kode_kerusakan" name="kode_kerusakan" placeholder="K.....">
                            <small class="form-text text-warning"> <?= form_error('kode_kerusakan'); ?></small>
                        </div>
                    </form>
                </div>
            </div>
            <button type="submit" class="btn btn-warning float-right" name="add">Add New Kerusakan</button>
            <a href="<?php echo site_url('dashboard/rule') ?>" class="btn btn-outline-warning">Kembali</a>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->