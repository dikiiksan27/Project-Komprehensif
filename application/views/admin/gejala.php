<!-- End of Main Content -->
<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Gejala</h1>
    </div>


    <!-- /.container-fluid -->


    <!-- DataTales Example -->
    <div class="row">

        <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newGejalaModal">Add New Gejala</a>
        <table class="table table-hover">
            <thead class="thead-primary">
                <tr class="bg-primary text-white">
                    <th scope="col">No</th>
                    <th scope="col">Gejala</th>
                    <th scope="col">Kode Gejala</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($gejala as $g) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $g['gejala']; ?></td>
                        <td><?= $g['kode_gejala']; ?></td>
                        <td>
                            <a href="" class="badge badge-success">edit</a>
                            <a href="" class="badge badge-danger">delete</a>
                        </td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

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
            <form action="">
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