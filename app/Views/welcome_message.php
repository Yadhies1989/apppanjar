<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mt-3">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Penggugat / Pemohon</h3>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="kecamatan">Alamat / Kecamatan</label>
                                    <select class="form-control" id="kecamatan" name="kecamatan">
                                        <option value="">--Pilih Kecamatan--</option>
                                        <?php
                                        foreach ($kecamatan as $row) {
                                            echo '<option value="' . $row["id"] . '">' . $row["nama"] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="desa">Alamat / Desa</label>
                                    <select class="form-control" id="desa" name="desa">
                                        <option value="">--Pilih Desa--</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-3">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Tergugat /Termohon</h3>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="select2">Alamat</label>
                                    <select class="form-control" id="select2">
                                        <option value="0">--Pilih--</option>
                                        <option value="1">Bojonegoro</option>
                                        <option value="2">Luar Bojonegoro</option>
                                    </select>
                                </div>
                                <div class="form-group" id="form2">
                                    <label for="select2">Alamat 2</label>
                                    <select class="form-control" id="select22">
                                        <option value="0">--Pilih--</option>
                                        <option value="3">Pulau Jawa</option>
                                        <option value="4">Luar Pulau Jawa</option>

                                    </select>
                                </div>
                                <div class="form-group" id="kec2">
                                    <label for="kecamatan">Alamat / Kecamatan</label>
                                    <select class="form-control" id="kecamatan2" name="kecamatan">
                                        <option value="">--Pilih Kecamatan--</option>
                                        <?php
                                        foreach ($kecamatan as $row) {
                                            echo '<option value="' . $row["id"] . '">' . $row["nama"] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group" id="ds2">
                                    <label for="desa">Alamat / Desa</label>
                                    <select class="form-control" id="desa2" name="desa">
                                        <option value="">--Pilih Desa--</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-1">
                    <button type="button" onclick="getSelectValue()" class="btn btn-primary btn-lg btn-block">Tampilkan Panjar Biaya Perkara</button>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
<div class="modal fade" id="radius-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Taksiran Panjar Biaya Perkara - Radius I</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">No</th>
                            <th scope="col">Komponen Biaya</th>
                            <th scope="col">Radius I</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="text-center">1</th>
                            <td>Hak-hak Kepaniteraan</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>a. Biaya Pendaftaran</td>
                            <td>Rp.30.000,-</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>b. Redaksi</td>
                            <td>Rp.10.000,-</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-center">2</th>
                            <td>Biaya Proses / ATK Perkara</td>
                            <td>Rp.75.000,-</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-center">3</th>
                            <td>Biaya Panggilan</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>a. Biaya Panggilan Pemohon / Penggugat (3x)</td>
                            <td>Rp.300.000,-</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>b. Biaya Panggilan Termohon / Tergugat (3x)</td>
                            <td>Rp.300.000,-</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>c. Biaya Panggilan Mediasi (2x)</td>
                            <td>Rp.200.000,-</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-center">4</th>
                            <td>Biaya Materai</td>
                            <td>Rp.10.000,-</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-center">5</th>
                            <td>Biaya PNBP</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>a. Relaas Panggilan Pertama P & T</td>
                            <td>Rp.20.000,-</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>b. Relaas Panggilan Saksi dan Ahli</td>
                            <td>Rp.20.000,-</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>c. Pemberitahuan Putusan P & T</td>
                            <td>Rp.20.000,-</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>d. Pencabutan & PBT Pencabutan</td>
                            <td>Rp.20.000,-</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-center"><strong>Jumlah</strong></td>
                            <td><strong>Rp.1.005.000,-</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- modal Radius 2 -->
<div class="modal fade" id="radius-2">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Taksiran Panjar Biaya Perkara - Radius II</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">No</th>
                            <th scope="col">Komponen Biaya</th>
                            <th scope="col">Radius I</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="text-center">1</th>
                            <td>Hak-hak Kepaniteraan</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>a. Biaya Pendaftaran</td>
                            <td>Rp.30.000,-</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>b. Redaksi</td>
                            <td>Rp.10.000,-</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-center">2</th>
                            <td>Biaya Proses / ATK Perkara</td>
                            <td>Rp.75.000,-</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-center">3</th>
                            <td>Biaya Panggilan</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>a. Biaya Panggilan Pemohon / Penggugat (3x)</td>
                            <td>Rp.375.000,-</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>b. Biaya Panggilan Termohon / Tergugat (3x)</td>
                            <td>Rp.375.000,-</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>c. Biaya Panggilan Mediasi (2x)</td>
                            <td>Rp.250.000,-</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-center">4</th>
                            <td>Biaya Materai</td>
                            <td>Rp.10.000,-</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-center">5</th>
                            <td>Biaya PNBP</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>a. Relaas Panggilan Pertama P & T</td>
                            <td>Rp.20.000,-</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>b. Relaas Panggilan Saksi dan Ahli</td>
                            <td>Rp.20.000,-</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>c. Pemberitahuan Putusan P & T</td>
                            <td>Rp.20.000,-</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>d. Pencabutan & PBT Pencabutan</td>
                            <td>Rp.20.000,-</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-center"><strong>Jumlah</strong></td>
                            <td><strong>Rp.1.205.000,-</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- modal Radius 3 -->
<div class="modal fade" id="radius-3">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Taksiran Panjar Biaya Perkara - Radius III</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">No</th>
                            <th scope="col">Komponen Biaya</th>
                            <th scope="col">Radius I</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="text-center">1</th>
                            <td>Hak-hak Kepaniteraan</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>a. Biaya Pendaftaran</td>
                            <td>Rp.30.000,-</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>b. Redaksi</td>
                            <td>Rp.10.000,-</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-center">2</th>
                            <td>Biaya Proses / ATK Perkara</td>
                            <td>Rp.75.000,-</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-center">3</th>
                            <td>Biaya Panggilan</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>a. Biaya Panggilan Pemohon / Penggugat (3x)</td>
                            <td>Rp.450.000,-</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>b. Biaya Panggilan Termohon / Tergugat (3x)</td>
                            <td>Rp.450.000,-</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>c. Biaya Panggilan Mediasi (2x)</td>
                            <td>Rp.300.000,-</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-center">4</th>
                            <td>Biaya Materai</td>
                            <td>Rp.10.000,-</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-center">5</th>
                            <td>Biaya PNBP</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>a. Relaas Panggilan Pertama P & T</td>
                            <td>Rp.20.000,-</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>b. Relaas Panggilan Saksi dan Ahli</td>
                            <td>Rp.20.000,-</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>c. Pemberitahuan Putusan P & T</td>
                            <td>Rp.20.000,-</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>d. Pencabutan & PBT Pencabutan</td>
                            <td>Rp.20.000,-</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-center"><strong>Jumlah</strong></td>
                            <td><strong>Rp.1.405.000,-</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- modal Radius 4 -->
<div class="modal fade" id="radius-4">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Taksiran Panjar Biaya Perkara - Radius IV</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">No</th>
                            <th scope="col">Komponen Biaya</th>
                            <th scope="col">Radius I</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="text-center">1</th>
                            <td>Hak-hak Kepaniteraan</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>a. Biaya Pendaftaran</td>
                            <td>Rp.30.000,-</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>b. Redaksi</td>
                            <td>Rp.10.000,-</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-center">2</th>
                            <td>Biaya Proses / ATK Perkara</td>
                            <td>Rp.75.000,-</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-center">3</th>
                            <td>Biaya Panggilan</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>a. Biaya Panggilan Pemohon / Penggugat (3x)</td>
                            <td>Rp.525.000,-</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>b. Biaya Panggilan Termohon / Tergugat (3x)</td>
                            <td>Rp.525.000,-</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>c. Biaya Panggilan Mediasi (2x)</td>
                            <td>Rp.350.000,-</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-center">4</th>
                            <td>Biaya Materai</td>
                            <td>Rp.10.000,-</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-center">5</th>
                            <td>Biaya PNBP</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>a. Relaas Panggilan Pertama P & T</td>
                            <td>Rp.20.000,-</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>b. Relaas Panggilan Saksi dan Ahli</td>
                            <td>Rp.20.000,-</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>c. Pemberitahuan Putusan P & T</td>
                            <td>Rp.20.000,-</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>d. Pencabutan & PBT Pencabutan</td>
                            <td>Rp.20.000,-</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-center"><strong>Jumlah</strong></td>
                            <td><strong>Rp.1.605.000,-</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- modal not foud -->
<div class="modal fade" id="no-radius">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tidak Ditemukan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Data Inputan Kurang Lengkap</p>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>