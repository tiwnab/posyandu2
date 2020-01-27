<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Tambah Data Imunisasi Balita</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Data Imunisasi Balita</li>
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
                        <form role="form" action="<?php echo base_url();?>kader/data_imunisasi/insert" method="post">
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
                                    <label for="inputEmail3" class="col-md-3 col-form-label">ID Imunisasi</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="id_imunisasi" id="id_imunisasi" readonly>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="btn btn-info col-md-8" data-toggle="modal" data-target="#search-imunisasi">Cari Imunisasi</a>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-md-3 col-form-label">Tanggal Periksa</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="tgl_imunisasi" id="datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask>
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
         /.modal-content
    </div>

    <div class="modal fade" id="search-imunisasi">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Search Imunisasi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table id="example2" class="table table-bordered table-striped" style="width:100%">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Jenis Imunisasi</th>
                            <th>Sesi</th>
                            <th>Keterangan Sesi</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if ($list_imunisasi != null){
                            foreach ($list_imunisasi as $list_imunisasi):?>
                                <tr>
                                    <td><?php echo $list_imunisasi->id ?></td>
                                    <td><?php echo $list_imunisasi->jenis ?></td>
                                    <td><?php echo $list_imunisasi->sesi ?></td>
                                    <td><?php echo $list_imunisasi->ket_sesi ?></td>
                                    <td><button class="btn btn-success" onclick="getIdImunisasi('<?php echo $list_imunisasi->id; ?>')">Pilih</button></td>
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