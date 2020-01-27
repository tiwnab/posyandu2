<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Orang Tua</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/kader">Home</a></li>
                        <li class="breadcrumb-item active">Data Orang Tua</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row btn-add">
                            <div class="col-md-6" style="padding-left: 0;">
                                <?php if ($this->session->userdata('role') == "kader") {?>
                                <a href="<?php echo base_url();?>kader/orangtua/add" class="btn btn-success btn-large">Tambah Akun</a>
                                <?php } ?>
                            </div>
                            <div class="col-md-6 text-right" style="padding-left: 0;">
                                <a href="<?php echo base_url().$this->session->userdata('role');?>/orangtua/export" class="btn btn-info btn-large">Export Data Excel</a>
                            </div>
                        </div>
                        <table id="example1" class="table table-bordered table-striped" style="width:100%">
                            <thead>
                            <tr>
                                <th>No KK</th>
                                <th>Nama Orang Tua</th>
                                <th>RT</th>
                                <th>Nama Bayi</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if ($list_orangtua != null){
                                foreach ($list_orangtua as $list_orangtua):?>
                                    <tr>
                                        <td><?php echo $list_orangtua->no_kk ?></td>
                                        <td><?php echo $list_orangtua->nama_ayah ?>/<?php echo $list_orangtua->nama_ibu ?></td>
                                        <td><?php echo $list_orangtua->rt_rw ?></td>
                                        <td>
                                            <a
                                                    href="javascript:;"
                                                    data-id="<?php echo $list_orangtua->id ?>"
                                                    data-toggle="modal" data-target="#view-balita">
                                                <button data-toggle="modal" data-target="#modal-default" data-toggle="tooltip" data-placement="top" title="Balita"
                                                        class="btn btn-light badge-pill"><i class="fas fas fa-info"></i></button>
                                            </a>
                                        </td>
                                        <td><a
                                                href="javascript:;"
                                                data-id="<?php echo $list_orangtua->id ?>"
                                                data-toggle="modal" data-target="#view-berita">
                                                <button data-toggle="modal" data-target="#modal-default" data-toggle="tooltip" data-placement="top" title="View Berita"><i class="fas fa-list"></i></button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach;
                            } else {echo "<tr><td>Data Not Found</td></tr>";}?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>

        <div class="modal fade" id="view-balita">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Data Balita</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-3">Nama Balita</div>
                            <div class="col-md-4">
                                <label id="nama_balita"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">Tgl Lahir</div>
                            <div class="col-md-4">
                                <label id="tgl_lahir"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">Umur</div>
                            <div class="col-md-4">
                                <label id="umur"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">Jenis Kelamin</div>
                            <div class="col-md-4">
                                <label id="gender"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">Berat Lahir</div>
                            <div class="col-md-4">
                                <label id="berat_lhr"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">Panjang Lahir</div>
                            <div class="col-md-4">
                                <label id="panjang_lhr"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->