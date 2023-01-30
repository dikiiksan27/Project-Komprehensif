<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="card text-center">
        <div class="card-header">
            <h1 class="h3 mb-0 text-dark-800">Jawab Pertanyaan Berikut Ini :</h1>
        </div>
        <div class="card-body">

            <div class="h2">Sering mati sendiri setiap beberapa Waktu</div>
            <form action="<?= base_url('dashboard/gejala'); ?>" method="post">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        YA
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                        TIDAK
                    </label>
                </div>
            </form>
        </div>
        <a href="<?php echo site_url('diagnosa/hasil') ?>" class="btn btn-primary">Next</a>
    </div>


</div>