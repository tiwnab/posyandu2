<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Tambah Data Orang Tua</h1>
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
                        <form role="form" action="<?php echo base_url();?>kader/orangtua/insert" method="post">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-md-3 col-form-label">Nomor KK</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="no_kk">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-md-3 col-form-label">Nama Ayah</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="nama_ayah">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-md-3 col-form-label">Nama Ibu</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="nama_ibu">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-md-3 col-form-label">RT/RW</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="rt_rw">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-md-3 col-form-label">No Hp</label>
                                    <div class="col-md-6">
                                        <input type="number" class="form-control" name="no_hp">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-md-3 col-form-label">Status KB</label>
                                    <div class="col-md-6">
                                        <select class="form-control" name="kb" >
                                            <option value="">Pilih Status</option>
                                            <option value="pil">PIL</option>
                                            <option value="suntik">Suntik KB</option>
                                            <option value="implan">Implan</option>
                                            <option value="iud">IUD</option>
                                            <option value="lain">Lain-lain</option>
                                            <option value="non">Non KB</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-md-3 col-form-label">Nama Balita</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="nama_balita">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-md-3 col-form-label">Jenis Kelamin</label>
                                    <div class="col-md-6">
                                        <select class="form-control" name="jenis_kelamin" >
                                            <option value="">Pilih Jenis Kelamin</option>
                                            <option value="L">Laki-Laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-md-3 col-form-label">Tanggal Lahir</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="tgl_lahir" id="datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-md-3 col-form-label">ASI</label>
                                    <div class="col-md-6">
                                        <select class="form-control" name="asi" >
                                            <option value="">Pilih Status</option>
                                            <option value="asi">ASI</option>
                                            <option value="non">Non ASI</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-md-3 col-form-label">Berat Lahir</label>
                                    <div class="col-md-1">
                                        <input type="number" class="form-control" name="berat_lhr">
                                    </div>
                                    <div class="col-md-3">
                                        <label>Kg</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-md-3 col-form-label">Panjang Badan</label>
                                    <div class="col-md-1">
                                        <input type="number" class="form-control" name="panjang_lhr">
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
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->