<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"> <?= $title; ?></h1>

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card text-white bg-primary mb-3" style="max-width: 40rem;">
                <!-- <div class="card-header">Email</div> -->
                <div class="card-body">
                    <form method="post" action="">
                        <input type="hidden" name="id_gejala" value="<?= $gejala['id_gejala']; ?>">
                        <div class="form-group">
                            <label for="gejala">Nama Gejala</label>
                            <input type="text" class="form-control" id="gejala" name="gejala" value="<?= $gejala['gejala']; ?>">
                            <small class="form-text text-warning"> <?= form_error('gejala'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kode_gejala">Kode_Gejala</label>
                            <input type="text" class="form-control" id="kode_gejala" name="kode_gejala" value="<?= $gejala['kode_gejala']; ?>">
                            <small class="form-text text-warning"> <?= form_error('kode_gejala'); ?></small>
                        </div>

                        <select class="btn btn-success" name="status">
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>
                        </select>
                </div>
                <button type="submit" class="btn btn-primary float-right" name="edit">Edit Gejala</button>
                <a href="<?php echo site_url('dashboard/gejala') ?>" class="btn btn-outline-primary">Kembali</a>
                </form>
            </div>
        </div>


    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->