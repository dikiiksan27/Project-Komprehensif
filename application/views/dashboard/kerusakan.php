<!-- End of Main Content -->
<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> <?= $title; ?></h1>
    </div>

    <div class="row">
        <div class="col-md-5">
            <form action="<?= base_url('dashboard/kerusakan'); ?>" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search Keywords..." name="keyword" autocomplete="off" autofocus>
                    <div class="input-group-append">
                        <input class="btn btn-primary" type="submit" name="submit">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- /.container-fluid -->
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show">
                    <?= $this->session->flashdata('flash'); ?> product is <strong>success</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <!-- DataTales Example -->
    <div class="row">


        <a href="<?= base_url("dashboard/add_kerusakan"); ?>" class="btn btn-success mb-3">Add New Kerusakan</a>

        <table class="table table-hover">
            <thead class="thead-primary">
                <tr class="bg-successtext-white">
                    <th scope="col">No</th>
                    <th scope="col">Kode Kerusakan</th>
                    <th scope="col">Kerusakan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($kerusakan as $k) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $k['kode_kerusakan']; ?></td>
                        <td><?= $k['kerusakan']; ?></td>
                        <td>
                            <a href="<?= base_url('dashboard/edit_kerusakan/'); ?><?= $k['id_kerusakan']; ?>" class="badge badge-warning">edit</a>
                            <a href="<?= base_url('dashboard/delete_kerusakan/'); ?><?= $k['id_kerusakan']; ?>" class="badge badge-danger">delete</a>
                        </td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <a href="<?php echo site_url('dashboard') ?>" class="btn btn-outline-success">Kembali</a>
</div>


<!-- Modal -->
<div class="modal fade" id="newGejalaModal" tabindex="-1" role="dialog" aria-labelledby="newGejalaModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newGejalaModalLabel">Add New Gejala</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('dashboard/gejala') ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="gejala" name="gejala" placeholder="Nama Gejala">
                        <input type="text" class="form-control" id="kode_gejala" name="kode_gejala" placeholder="Nama Kode Gejala">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>