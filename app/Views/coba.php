<div class="content-wrapper">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg mt-3">
                    <div class="card card-primary">
                        <div class="card-body">
                            <?php foreach ($kecamatan as $kcm) : ?>
                                <ul><?= $kcm['nama']; ?></ul>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
</div>