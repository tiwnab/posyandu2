<!doctype html>
<html lang="en">

<body>
    <!-- MAIN -->
    <div class="main">
      <!-- MAIN CONTENT -->
      <div class="main-content">
        <div class="container-fluid">
          <!-- OVERVIEW -->
          <div class="panel panel-headline">
            <div class="panel-heading"> 
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3">
                  <main>
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line"><strong> DAFTAR </strong></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <br />
                        
                        <div class="form-group">
                          <label for="nama">Nama pengguna:<font color="red">*</font></label>
                          <input id="nama" type="text" style="width:500px" class="form-control" name="nama">
                        </div>
                        <div class="form-group">
                          <label for="id_karyawan">NIP:<font color="red">*</font></label>
                          <input id="id_karyawan" type="text" style="width:500px" class="form-control" name="no_karyawan">
                        </div>
                        <div class="form-group">
                          <label for="password">Password:<font color="red">*</font></label>
                          <input id="password" type="password" style="width:500px" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                          <label for="password">Konfirmasi Password:<font color="red">*</font></label>
                          <input id="password" type="password" style="width:500px" class="form-control" name="konfirm_pass"> 
                        </div>
                        
                        <div class="form-group">
                          <label for="prodi">Status :<font color="red">*</font></label>
                          <select class="form-control" id="status_user" name="status_user" style="width:500px">
                            <option value="_">___Pilih Status___</option>
                            <option value="Admin">Petugas Kesehatan</option>
                            <option value="Petugas">Kader</option>
                          </select>
                        </div>

                          <div class="form-group">
                          <label for="password">Alamat Bertugas</label>
                          <input id="password" type="password" style="width:500px" class="form-control" name="konfirm_pass"> 
                        </div>
                                   
                       <div class="form-group">
                          <label for="password">Nomor hp </label>
                          <input id="password" type="password" style="width:500px" class="form-control" name="konfirm_pass"> 
                        </div>
                                      <hr/>
                
                          <button type="submit" class="btn btn-default btn-lg">Daftar </button>
                        </label></div>
                      </form>
                        
                        </div>
                        </div>  
                      </div>
                    </div>
                  </div>
              </main>
              </div>

              </div>
              
          <!-- END OVERVIEW -->
          <div class="row">
            <div class="col-md-6">
            </div>
              
            </div>
          </div>
        </div>
      </div>
      <!-- END MAIN CONTENT -->
    </div>
</body>


<script type="text/javascript">
   $('#status_user').on('change', function(){
        var val = this.value;
        if(val == "User"){
          $('#area').attr('style','display:block !important');
        }else {
           $('#area').attr('style','display:none !important');
        }
      });
</script>