<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Tambah Berat Badan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Orang Tua</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-8">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="<?php echo base_url();?>kader/berat_badan/insert" method="post">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-md-3 col-form-label">Nomor KK</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="no_kk" id="no_kk" readonly>
                                        <input type="hidden" class="form-control" name="id_balita" id="id_balita" readonly>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="btn btn-info col-md-8" data-toggle="modal" data-target="#search-kk">Cari No KK</a>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-md-3 col-form-label">Tanggal Periksa</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="tgl_periksa" id="datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Berat Lahir</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="berat">
                                    </div>
                                    <div class="col-md-3">
                                        <label>Kg</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Tinggi Badan</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="tinggi">
                                    </div>
                                    <div class="col-md-3">
                                        <label>Cm</label>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Tambah</button>
                                <button type="reset" class="btn btn-primary">Reset</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->

                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

    <div class="modal fade" id="search-kk">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Search KK</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table id="example1" class="table table-bordered table-striped" style="width:100%">
                        <thead>
                        <tr>
                            <th>No KK</th>
                            <th>Nama Orang Tua</th>
                            <th>Nama Bayi</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if ($list_orangtua_anak != null){
                            foreach ($list_orangtua_anak as $list_orangtua_anak):?>
                                <tr>
                                    <td><?php echo $list_orangtua_anak['no_kk'] ?></td>
                                    <td><?php echo $list_orangtua_anak['nama_ayah'] ?>/<?php echo $list_orangtua_anak['nama_ibu'] ?></td>
                                    <td><?php echo $list_orangtua_anak['nama'] ?></td>
                                    <td><button class="btn btn-success" onclick="getNoKK('<?php echo $list_orangtua_anak['id_balita']."_".$list_orangtua_anak['no_kk']; ?>')">Pilih</button></td>
                                </tr>
                            <?php endforeach;
                        } else {echo "<tr><td>Data Not Found</td></tr>";}?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->