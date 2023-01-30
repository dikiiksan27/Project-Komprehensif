<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"> <?= $title; ?></h1>

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card text-white bg-success mb-3" style="max-width: 40rem;">
                <!-- <div class="card-header">Email</div> -->
                <div class="card-body">
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="kode_kerusakan">Kode Kerusakan</label>
                            <input type="text" class="form-control" id="kode_kerusakan" name="kode_kerusakan" placeholder="Kode kerusakan">
                            <small class="form-text text-warning"> <?= form_error('kode_kerusakan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kerusakan">Nama Kerusakan</label>
                            <input type="text" class="form-control" id="kerusakan" name="kerusakan" placeholder="Nama kerusakan">
                            <small class="form-text text-warning"> <?= form_error('kerusakan'); ?></small>
                        </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success float-right" name="add">Add New Kerusakan</button>
            <a href="<?php echo site_url('dashboard/kerusakan') ?>" class="btn btn-outline-success">Kembali</a>
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->