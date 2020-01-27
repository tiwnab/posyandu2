<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data KMS</h1>
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

    <section class="content">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                <div class="card-body">
                    
                    <form>
                    <div class="form-group">
                    <label for="exampleFormControlSelect2">Bulan</label>
                    <select class="form-control form-control-sm">
                        <option></option>
                      <option value="Januari">Januari</option>
                      <option value="Februari">Februari</option>
                      <option value="Maret">Maret</option>
                    </select>
                  </div>
                      
                      <div class="form-group">
                        <label for="exampleFormControlSelect2">Tahun</label>
                        <select class="form-control form-control-sm">
                          <option></option>
                          <option value="2020">2020</option>
                          <option value="2019">2019</option>
                          <option value="2018">2018</option>
                        </select>
                      </div>

                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row btn-add">
                            <a href="<?php echo base_url();?>kms/list/export" class="btn btn-info btn-large">Export Data Excel</a>
                        </div>
                        <table id="example1" class="table table-bordered table-striped" style="width:100%">
                            <thead>
                            <tr>
                                <th>Balita</th>
                                <th>Jenis Kelamin</th>
                                <th>Data Orang Tua</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if ($list_anak != null){
                                foreach ($list_anak as $list_anak):?>
                                    <tr>
                                        <td><?php echo $list_anak->nama ?></td>
                                        <td><?php
                                            if ($list_anak->jenis_kelamin == 'L') {
                                                echo "Laki Laki";
                                            } else {
                                                echo "Perempuan";
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <a href="javascript:;" data-id="<?php echo $list_anak->id_ortu ?>"
                                               data-toggle="modal" data-target="#view-ortu">
                                                <button data-toggle="modal" data-target="#modal-default" data-toggle="tooltip" data-placement="top" title="Data Orangtua"
                                                        class="btn btn-light badge-pill"><i class="fas fas fa-search"></i></button>
                                            </a>
                                        </td>
                                        <td><a
                                                href="javascript:;"
                                                data-id="<?php echo $list_anak->id ?>"
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

        <div class="modal fade" id="view-ortu">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Data Orang Tua</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-3">Nama Ayah</div>
                            <div class="col-md-4">
                                <label id="nama_ayah"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">Nama Ibu</div>
                            <div class="col-md-4">
                                <label id="nama_ibu"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">RT/RW</div>
                            <div class="col-md-4">
                                <label id="rt_rw"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">No Hp</div>
                            <div class="col-md-4">
                                <label id="no_hp"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">Status KB</div>
                            <div class="col-md-4">
                                <label id="kb"></label>
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