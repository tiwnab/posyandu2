<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pengguna</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                        <li class="breadcrumb-item active">Pengguna</li>
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
                            <a href="<?php echo base_url();?>petugas/pengguna/add" class="btn btn-success btn-large">Tambah Akun</a>
                        </div>
                        <table id="example1" class="table table-bordered table-striped" style="width:100%">
                            <thead>
                            <tr>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>Role</th>
                                <th>No Hp</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if ($list_pengguna != null){
                                foreach ($list_pengguna as $list_pengguna):?>
                                    <tr>
                                        <td><?php echo $list_pengguna->nama ?></td>
                                        <td><?php echo $list_pengguna->nip ?></td>
                                        <td><?php echo $list_pengguna->role ?></td>
                                        <td><?php echo $list_pengguna->no_telp ?></td>
                                        <td><a
                                                href="javascript:;"
                                                data-id="<?php echo $list_pengguna->id ?>"
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

        <div class="modal fade" id="view-berita">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="judul"></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="" id="image" name="image" width="100%">
                            <br>
                        <div id="isi"></div>
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