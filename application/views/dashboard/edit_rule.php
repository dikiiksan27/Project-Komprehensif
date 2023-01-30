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
                        <input type="hidden" name="id_rule" value="<?= $rule['id_rule']; ?>">
                        <div class="form-group">
                            <label for="kode_rule">Kode Rule</label>
                            <input type="text" class="form-control" id="kode_rule" name="kode_rule" value="<?= $rule['kode_rule']; ?>">
                            <small class="form-text text-warning"> <?= form_error('kode_rule'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kode_gejala">Kode Gejala</label>
                            <input type="text" class="form-control" id="kode_gejala" name="kode_gejala" value="<?= $rule['kode_gejala']; ?>">
                            <small class="form-text text-warning"> <?= form_error('kode_gejala'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kode_kerusakan">Kode Kerusakan</label>
                            <input type="text" class="form-control" id="kode_kerusakan" name="kode_kerusakan" value="<?= $rule['kode_kerusakan']; ?>">
                            <small class="form-text text-warning"> <?= form_error('kode_kerusakan'); ?></small>
                        </div>
                </div>
            </div>
            <button type="submit" class="btn btn-warning float-right" name="edit">Edit Product</button>
            <a href="<?php echo site_url('dashboard/rule') ?>" class="btn btn-outline-warning">Kembali</a>

            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->